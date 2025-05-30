<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Score;
use App\Models\HasilSeleksi;
use Illuminate\Http\Request;

class HasilSeleksiController extends Controller
{
    public function index()
    {
        $data = HasilSeleksi::with(['user', 'score'])
            ->whereIn('status', ['diterima', 'tidak diterima'])
            ->get()
            ->sortByDesc(fn($item) => $item->score->nilai_akhir)
            ->values(); // reset ulang indexnya

        $users = User::whereIn('id', $data->pluck('user_id'))->get();

        // Hasil seleksi dipetakan per user_id
        $hasilSeleksis = $data->keyBy('user_id');

        return view('shared.hasilSeleksi.index', compact('data', 'users', 'hasilSeleksis'));
    }

    public function prosesSeleksi(Request $request)
    {
        $request->validate([
            'jumlah_diterima' => 'required|integer|min:1',
        ]);

        $jumlah = $request->jumlah_diterima;

        // Ambil skor teratas sesuai jumlah diterima
        $ranking = Score::orderBy('nilai_akhir', 'desc')->take($jumlah)->get();

        // Simpan sebagai 'diterima'
        foreach ($ranking as $score) {
            HasilSeleksi::updateOrCreate(['user_id' => $score->user_id], ['score_id' => $score->id, 'status' => 'diterima']);
        }

        // Sisanya jadi 'tidak diterima'
        $seluruhUserId = Score::pluck('user_id');
        $diterimaId = $ranking->pluck('user_id');

        $sisanya = $seluruhUserId->diff($diterimaId);
        foreach ($sisanya as $userId) {
            $score = Score::where('user_id', $userId)->first();
            if ($score) {
                HasilSeleksi::updateOrCreate(['user_id' => $userId], ['score_id' => $score->id, 'status' => 'tidak diterima']);
            }
        }

        return back()->with('success', "Seleksi otomatis berhasil. $jumlah pelamar diterima.");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::all();

        $alternatifs = Alternatif::with(['user', 'kriteria'])->get();

        $users = User::where('role', 'pelamar')
            ->with(['alternatifs.kriteria'])
            ->get();

        return view('shared.alternatif.index', compact('alternatifs', 'users', 'kriterias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nilai' => 'required|array',
            'nilai.*' => 'required|numeric',
        ]);

        foreach ($request->nilai as $kriteria_id => $nilai) {
            Alternatif::create([
                'user_id' => $request->user_id,
                'kriteria_id' => $kriteria_id,
                'nilai' => $nilai,
            ]);
        }

        return redirect()->back()->with('success', 'Data alternatif berhasil disimpan.');
    }

    public function update(Request $request, User $user)
    {
        try {
            $validated = $request->validate([
                'nilai' => 'required|array',
                'nilai.*' => 'required|numeric|min:0',
            ]);

            foreach ($validated['nilai'] as $kriteria_id => $nilai) {
                Alternatif::updateOrCreate(['user_id' => $user->id, 'kriteria_id' => $kriteria_id], ['nilai' => $nilai]);
            }

            return redirect()->back()->with('success', 'Data alternatif berhasil diperbarui.');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui data alternatif.');
        }
    }

    public function destroy(User $user)
    {
        $user->alternatifs()->delete();

        return redirect()->route('alternatif')->with('success', 'Data alternatif dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class SawController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::all();
        $jumlahKriteria = $kriterias->count();

        $users = User::where('role', 'pelamar')
            ->whereHas('alternatifs', function ($query) {
                // hanya memastikan user punya relasi alternatif
            })
            ->with(['alternatifs.kriteria'])
            ->get()
            // filter manual: hanya user yang jumlah alternatifnya sama dengan jumlah kriteria
            ->filter(function ($user) use ($jumlahKriteria) {
                return $user->alternatifs->count() === $jumlahKriteria;
            });

        // return view('shared.SAW.index', compact('kriterias', 'users'));
        // Susun data alternatif dalam bentuk array user_id => alternatif[]
        $dataAlternatif = [];
        foreach ($users as $user) {
            $dataAlternatif[$user->id] = $user->alternatifs;
        }

        // Panggil fungsi konversi
        $konversi = $this->konversiNilai($dataAlternatif, $kriterias);

        // Kirim ke view
        return view('shared.SAW.index', compact('kriterias', 'users', 'konversi'));
    }

    private function konversiNilai($alternatifs, $kriterias)
    {
        $konversi = [];

        foreach ($alternatifs as $userId => $dataAlternatif) {
            foreach ($dataAlternatif as $alt) {
                $kriteria = $kriterias->where('id', $alt->kriteria_id)->first();
                $sub = $kriteria->subKriterias->first(function ($s) use ($alt) {
                    return $alt->nilai >= $s->min && $alt->nilai <= $s->max;
                });

                $konversi[$userId][$kriteria->id] = $sub ? $sub->bobot : 0;
            }
        }

        return $konversi;
    }
}

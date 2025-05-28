<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Score;
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
            ->whereHas('alternatifs', function ($query) {})
            ->with(['alternatifs.kriteria'])
            ->get()
            // filter user yang jumlah alternatifnya sama dengan jumlah kriteria
            ->filter(function ($user) use ($jumlahKriteria) {
                return $user->alternatifs->count() === $jumlahKriteria;
            });

        $dataAlternatif = [];
        foreach ($users as $user) {
            $dataAlternatif[$user->id] = $user->alternatifs;
        }

        // fungsi konversi
        $konversi = $this->konversiNilai($dataAlternatif, $kriterias);

        // fungsi normalisasi
        $normalisasi = $this->normalisasi($konversi, $kriterias);

        // hasil akhir
         $skorAkhir = $this->hitungSkorAkhir($normalisasi, $kriterias);

        return view('shared.SAW.index', compact('kriterias', 'users', 'konversi', 'normalisasi', 'skorAkhir'));
    }

    // konversi nilai
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

    // normalisasi
    private function normalisasi($konversi, $kriterias)
    {
        $normalisasi = [];

        foreach ($kriterias as $krit) {
            $kolom = array_column($konversi, $krit->id);
            $max = max($kolom);
            $min = min($kolom);

            foreach ($konversi as $userId => $nilai) {
                $val = $nilai[$krit->id] ?? 0;
                $normalisasi[$userId][$krit->id] = $krit->tipe == 'benefit' ? $val / ($max ?: 1) : $min / ($val ?: 1);
            }
        }

        return $normalisasi;
    }

    // hasil akhir
    private function hitungSkorAkhir($normalisasi, $kriterias)
    {
        $skorAkhir = [];

        foreach ($normalisasi as $userId => $nilaiNormal) {
            $total = 0;
            foreach ($kriterias as $krit) {
                $total += ($nilaiNormal[$krit->id] ?? 0) * $krit->bobot;
            }

            $skorAkhir[] = [
                'user_id' => $userId,
                'nilai_akhir' => $total,
            ];
        }

        usort($skorAkhir, fn($a, $b) => $b['nilai_akhir'] <=> $a['nilai_akhir']);

         // Simpan ke database
        foreach ($skorAkhir as $data) {
        Score::updateOrCreate(
            ['user_id' => $data['user_id']],
            ['nilai_akhir' => $data['nilai_akhir']]
        );
    }
        return $skorAkhir;
    }
}

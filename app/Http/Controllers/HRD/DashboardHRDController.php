<?php

namespace App\Http\Controllers\HRD;

use App\Models\User;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardHRDController extends Controller
{
    public function index()
    {
        $totalPelamar = User::where('role', 'pelamar')->count();

        $pelamarTidakDiterima = User::where('role', 'pelamar')
            ->whereHas('hasilSeleksi', function ($query) {
                $query->where('status', 'tidak diterima');
            })
            ->count();

        $pelamarDiterima = User::where('role', 'pelamar')
            ->whereHas('hasilSeleksi', function ($query) {
                $query->where('status', 'diterima');
            })
            ->count();

        $pelamarBelumDiproses = User::where('role', 'pelamar')->whereDoesntHave('scores')->get();

        $kriterias = Kriteria::all();
        return view('HRD.dashboard.dashboard', compact('pelamarTidakDiterima', 'pelamarDiterima', 'kriterias', 'totalPelamar', 'pelamarBelumDiproses'));
    }
}

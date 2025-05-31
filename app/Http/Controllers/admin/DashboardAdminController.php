<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kriteria;

class DashboardAdminController extends Controller
{

    public function index()
    {
        $jumlahUser =User::all()->count();
        $totalPelamar = User::where('role', 'pelamar')->count();
        $totaladmin = User::where('role', 'admin')->count();
        $totalhrd = User::where('role', 'hrd')->count();

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

        $kriterias = Kriteria::all();

        return view('admin.dashboard.dashboard', compact('totalPelamar', 'pelamarTidakDiterima', 'pelamarDiterima', 'jumlahUser', 'kriterias', 'totaladmin', 'totalhrd'));
    }

}

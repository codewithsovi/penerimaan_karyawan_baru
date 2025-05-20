<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\User;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index(){
        $users = User::where('role', 'pelamar')->get();
        $kriterias = Kriteria::all();
        return view('shared.alternatif.index', compact('kriterias', 'users'));
    }
}

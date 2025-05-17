<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index(){
        $kriteria = Kriteria::all();
        return view('shared.alternatif.index', compact('kriteria'));
    }
}

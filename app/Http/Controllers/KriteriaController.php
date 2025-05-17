<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function kriteria(){
    $kriteria =kriteria::all();
    return view('shared.kriteria.index', compact('kriteria'));
 }
}

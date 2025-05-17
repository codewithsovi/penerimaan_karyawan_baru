<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class SubKriteriaController extends Controller
{
    public function subkriteria(Request $request, $id){
        $kriteria = Kriteria::findOrFail($id);
        $subkriteria = SubKriteria::where('kriteria_id', $id)->get();
        return view('shared.subkriteria.index', compact('kriteria', 'subkriteria'));
    }
}

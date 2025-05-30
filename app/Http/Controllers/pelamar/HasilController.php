<?php

namespace App\Http\Controllers\pelamar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index(){
        return view('pelamar.hasil.index');
    }
}

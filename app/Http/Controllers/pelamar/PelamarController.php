<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        return view('Pelamar.beranda.index');
    }
}

<?php

namespace App\Http\Controllers\pelamar;

use App\Models\HasilSeleksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HasilController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $hasilSeleksi = HasilSeleksi::with('user')->where('user_id', Auth::id())->first();
    return view('pelamar.hasil.index',  compact('hasilSeleksi'));
    }
}

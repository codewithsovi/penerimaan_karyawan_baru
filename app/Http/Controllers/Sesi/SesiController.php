<?php

namespace App\Http\Controllers\Sesi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function toLogin(){
        return view('auth.login');
    }

    public function prosesLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $infoLogin = $request->only('email', 'password');

        if (Auth::attempt($infoLogin)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('dashboard_admin');
            } elseif ($user->role === 'hrd') {
                return redirect()->route('dashboard_HRD');
            } elseif ($user->role === 'pelamar') {
                return redirect()->route('beranda.pelamar');
            }
        }

        return back()->with('error', 'Email atau password salah.');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}

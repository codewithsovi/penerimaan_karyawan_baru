<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class sudahLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()) {
            $role = Auth::user()->role;
            // Redirect to the home page if the user is already logged in
            if ($role == 'admin') {
                return redirect()->back()->with('error', 'Anda sudah login sebagai admin');
            } elseif ($role == 'pelamar') {
                return redirect()->back();
            } elseif ($role == 'hrd') {
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        }

        return $next($request);
    }
}

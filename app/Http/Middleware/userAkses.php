<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class userAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if(Auth::user()->role == $role) {
            // If the user has the specified role, allow the request to proceed
            return $next($request);
        } else {
            // If the user does not have the specified role, redirect them back with an error message
            return redirect()->back();

        }

    }
}

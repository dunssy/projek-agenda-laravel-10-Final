<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $level): Response
    {
        // Cek apakah user memiliki peran tertentu
        if (Auth()->user()->level != $level) {
            return redirect('home'); // Jika peran tidak sesuai, arahkan ke halaman home
        }
        return $next($request); // Jika sesuai, lanjutkan request
        
    }
}

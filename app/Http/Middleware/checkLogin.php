<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;


class CheckLogin
{
    public function handle($request, Closure $next)
    {
        // cek login di guard web (teknisi/manager) atau karyawan
        if (Auth::guard('web')->check() || Auth::guard('karyawan')->check()) {
            return $next($request);

        }

        // kalau belum login, lempar balik ke halaman login utama
        return redirect()->route('login')->with('error', 'Anda belum melakukan login');
    }
}

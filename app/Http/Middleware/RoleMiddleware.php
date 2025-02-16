<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next, $role)
{
    if (!Auth::check()) {
        abort(403, 'Anda tidak memiliki akses.');
    }

    // Admin bisa mengakses semua
    if (Auth::user()->role === 'admin') {
        return $next($request);
    }

    // Jika bukan admin, cek apakah role sesuai
    if (Auth::user()->role !== $role) {
        abort(403, 'Anda tidak memiliki akses ke halaman ini.');
    }

    return $next($request);
}
}

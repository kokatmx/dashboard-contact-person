<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('home');
        }

        // Ambil user yang telah login
        $user = Auth::user();

        // Cek apakah user memiliki role yang sesuai menggunakan konstanta
        if ($user->role === User::ROLE_STORE || $user->role === User::ROLE_OFFICE || $user->role === User::ROLE_WAREHOUSE) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}

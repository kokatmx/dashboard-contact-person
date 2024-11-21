<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // Ambil division dan department user
        $userDivision = $user->division->division_code ?? null; // Ambil kode divisi
        $userDept = $user->department->department_code ?? null;   // Ambil kode departemen
        $userArea = $user->department->division->area_id ?? null; // Ambil kode area

        // Warehouse
        if ($userDivision === 'O2222' && $userDept === 'O1900' && $userArea === 'WRH') {
            // return redirect()->route('warehouse.dashboard');
            return $next($request);
        }

        // Store
        if ($userDivision === 'O0000' && in_array($userDept, ['O1100', 'O1200', 'O9400']) && $userArea === 'STO') {
            // return redirect()->route('store.dashboard');
            return $next($request);
        }

        // Office
        if (
            in_array($userDivision, ['C0000', 'F0000', 'G0000', 'H0000', 'K0000', 'M0000', 'R0000', 'YY000']) &&
            in_array($userDept, ['C3100', 'F1500', 'F5100', 'G1600', 'H1800', 'H2600', 'K1300', 'M3200', 'R4300', 'R5800', 'YY002', 'YY004']) &&
            $userArea === 'OFF'
        ) {
            // return redirect()->route('office.dashboard');
            return $next($request);
        }
        return $next($request);
    }
}
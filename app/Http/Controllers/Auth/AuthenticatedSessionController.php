<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $user = Auth::user();

        // Ambil division dan department user
        $userDivision = $user->division->division_code ?? null; // Ambil kode divisi
        $userDept = $user->department->department_code ?? null;   // Ambil kode departemen
<<<<<<< HEAD
        $userPosition = $user->position->position_code ?? null;

        // Warehouse
        if ($userDivision === 'O2222' && $userDept === 'O1900') {
=======
        $userArea = $user->department->division->area_id ?? null; // Ambil kode area

        // Warehouse
        if ($userDivision === 'O2222' && $userDept === 'O1900' && $userArea === 'WRH') {
>>>>>>> dev
            return redirect()->route('warehouse.dashboard');
        }

        // Store
<<<<<<< HEAD
        if ($userDivision === 'O0000' && in_array($userDept, ['O1100', 'O1200', 'O9400'])) {
=======
        if ($userDivision === 'O0000' && in_array($userDept, ['O1100', 'O1200', 'O9400']) && $userArea === 'STO') {
>>>>>>> dev
            return redirect()->route('store.dashboard');
        }

        // Office
        if (
            in_array($userDivision, ['C0000', 'F0000', 'G0000', 'H0000', 'K0000', 'M0000', 'R0000', 'YY000']) &&
<<<<<<< HEAD
            in_array($userDept, ['C3100', 'F1500', 'F5100', 'G1600', 'H1800', 'H2600', 'K1300', 'M3200', 'R4300', 'R5800', 'YY002', 'YY004'])
=======
            in_array($userDept, ['C3100', 'F1500', 'F5100', 'G1600', 'H1800', 'H2600', 'K1300', 'M3200', 'R4300', 'R5800', 'YY002', 'YY004']) && $userArea === 'OFF'
>>>>>>> dev
        ) {
            return redirect()->route('office.dashboard');
        }
        return redirect()->route('home');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

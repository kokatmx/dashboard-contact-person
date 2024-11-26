<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Department;
use App\Models\Division;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Cek autentikasi
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Dapatkan user yang sedang login
        $user = Auth::user();

        $userDivision = $user->division?->division_code;
        $userDept = $user->department?->department_code;

        // Definisikan akses berdasarkan konfigurasi
        $accessConfig = [
            'WRH' => [
                'divisions' => ['O2222'],
                'departments' => ['O1900']
            ],
            'STO' => [
                'divisions' => ['O0000'],
                'departments' => ['O1100', 'O1200', 'O9400']
            ],
            'OFF' => [
                'divisions' => ['C0000', 'F0000', 'G0000', 'H0000', 'K0000', 'M0000', 'R0000', 'YY000'],
                'departments' => ['C3100', 'F1500', 'F5100', 'G1600', 'H1800', 'H2600', 'K1300', 'M3200', 'R4300', 'R5800', 'YY002', 'YY004']
            ]
        ];

        // Fungsi untuk memeriksa akses
        $hasAccess = function ($config) use ($userDivision, $userDept) {
            return in_array($userDivision, $config['divisions']) &&
                in_array($userDept, $config['departments']);
        };

        // Cek akses berdasarkan konfigurasi
        $accessGranted = false;
        foreach ($accessConfig as $areaCode => $config) {
            if ($hasAccess($config)) {
                $accessGranted = true;
                break;
            }
        }

        // Jika tidak punya akses, redirect
        if (!$accessGranted) {
            return redirect()->route('home');
        }

        // Ambil data dashboard
        $dashboardData = $this->getDashboardData();

        return view('dashboard', $dashboardData);
    }

    /**
     * Metode untuk mengambil data dashboard
     *
     * @return array
     */
    protected function getDashboardData(): array
    {
        return [
            'areas' => Area::all(),
            // 'warehouseArea' => Area::where('area_code', 'WRH')->first(),
            // 'storeArea' => Area::where('area_code', 'STO')->first(),
            // 'officeArea' => Area::where('area_code', 'OFF')->first(),
            'department' => Department::all(),
        ];
    }
}

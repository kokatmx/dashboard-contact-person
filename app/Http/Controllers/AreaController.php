<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Department;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    public function showAreaDetails($areaCode, Request $request)
    {
        // Ambil area berdasarkan kode
        $area = Area::where('area_code', $areaCode)->firstOrFail();

        // Query untuk divisi di area ini
        $divisionsQuery = Division::where('area_code', $area->id);

        // Query untuk departemen di area ini
        $departmentsQuery = Department::whereHas('division', function ($query) use ($area) {
            $query->where('area_code', $area->id);
        });

        // Filter berdasarkan input pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $divisionsQuery->where('division_name', 'like', "%{$search}%");
            $departmentsQuery->where('department_name', 'like', "%{$search}%");
        }

        // Ambil divisi dan departemen
        $divisions = $divisionsQuery->paginate(10);
        $departments = $departmentsQuery->paginate(10);

        return view('areas.details', [
            'area' => $area,
            'divisions' => $divisions,
            'departments' => $departments,
            'searchQuery' => $request->input('search', '')
        ]);
    }

    public function showArea(Request $request)
    {
        // Ambil user login
        $user = Auth::user();
        // Ambil area-area yang tersedia
        $areas = Area::all(); // Ambil semua area dari database.
        // Ambil area_id dari request
        $areaName = $request->area_name;
        // Ambil data area berdasarkan area_name
        $area = Area::where('area_name', $areaName)->firstOrFail();
        $userDivisionId = Auth::user()->division_id;
        $usersPerDepartment = Department::withCount('users')->where('division_id', $userDivisionId)->get();
        // Mengambil data area dengan kriteria yang diinginkan
        $userArea = $user->department->division->area_id;
        // Ambil semua departemen yang berhubungan dengan area yang dipilih
        $departmentsInArea = $area->departments;
        // Kirim data ke view, termasuk data area dan status area user
        return view('area.detail', [
            'areas' => $areas,
            'area' => $area,
            'userArea' => $userArea,
            'departmentsInArea' => $departmentsInArea, // Departemen dalam area ini
            'usersPerDepartment' => $usersPerDepartment,
        ]);
    }
}

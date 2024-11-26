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

    public function showAreaDetail(Request $request)
    {
        // Ambil user login//-
        // Get the authenticated user//+
        $user = Auth::user();
        //+
        // Fetch all areas from the database//+
        $areas = Area::all(); //+
        //+
        // Get the area name from the request//+
        $areaName = $request->area_name;
        //+
        // Find the area by name or throw a 404 error//+
        $area = Area::where('area_name', $areaName)->firstOrFail();

        // Get the user's division ID//+
        $userDivisionId = $user->division_id; //+
        //+
        // Count users per department in the user's division//+
        $usersPerDepartment = Department::withCount('users') //+
            ->where('division_id', $userDivisionId) //+
            ->get()
            //+
            ->keyBy('id');
        //+
        // Get the user's area ID//+
        $userArea = $user->department->division->area_id;
        // Ambil semua departemen yang berhubungan dengan area yang dipilih//-
        //+
        // Get all departments related to the selected area//+
        $departmentsInArea = $area->departments;
        // Ambil semua departemen dengan count jumlah user di setiap departemen

        // Kirim data ke view, termasuk data area dan status area user//-
        //+
        // Return the view with all necessary data//+
        return view('area.detail', [
            'areas' => $areas,
            'area' => $area,
            'userArea' => $userArea,
            'departmentsInArea' => $departmentsInArea, //+
            'usersPerDepartment' => $usersPerDepartment,
        ]);
    }
}

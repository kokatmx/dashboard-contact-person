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

    public function showArea(Request $request, $area_code)
    {
        // Ambil user login
        $user = Auth::user();


        // Ambil area-area yang tersedia
        $areas = Area::all(); // Ambil semua area dari database.

        $areaCode = $request->area_id;
        // Cari area berdasarkan area_code
        $area = Area::where('area_id', $areaCode)->first();

        // Mengambil data area dengan kriteria yang diinginkan
        $userArea = $user->department->division->area_id;

        // Ambil semua departemen yang berhubungan dengan area yang dipilih
        $departmentsInArea = Department::where('area_id', $request->area_id)->get();


        // Kirim data ke view, termasuk data area dan status area user
        return view('area.detail', [
            'areas' => $areas,
            'area' => $area,
            'userArea' => $userArea,
            'departmentsInArea' => $departmentsInArea, // Departemen dalam area ini
        ]);
    }
}

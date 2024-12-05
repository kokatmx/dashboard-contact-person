<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;

class DeptAreaController extends Controller
{
    // public function showAreaDepartment($uuid)
    // {
    //     // Ambil department area berdasarkan UUID
    //     $department = Department::where('uuid', $uuid)->firstOrFail();

    //     // Ambil posisi AM (Area Manager) di departemen ini
    //     $positionsAM = $department->positions()->where('position_code', 'LIKE', 'AM%')->get();
    //     return view('department.area.index', compact('department', 'positionsAM'));
    // }

    // public function showAreaCoordinator(Request $request, $positionName)
    // {
    //     // Ambil posisi AM berdasarkan nama
    //     // $positionAM = $request->position_name;
    //     $department = Department::where('uuid', $request->uuid)->firstOrFail();
    //     $positionAM = Position::where('position_name', $positionName)->firstOrFail();

    //     // Ambil posisi AC yang terkait dengan AM ini dengan nama position
    //     $positionsAC = Position::where('parent_position_id', $positionAM->position_id)
    //         ->where('position_code', 'LIKE', 'AC%')
    //         ->get();


    //     return view('department.area.sub_position', compact('department', 'positionAM', 'positionsAC'));
    // }

    public function showStores($uuid)
    {
        $department = Department::with('positions')->where('uuid', $uuid)->firstOrFail();
        $stores = Toko::all();
        // $positionsAM = $department->users->positions->filter(function ($position) {
        //     return str_contains($position->position_name, 'Area Manager');
        // });

        // $positionsAM = $department->users;
        return view('department.area.store.index', compact('stores', 'department'));
    }

    public function searchStores()
    {
        $search = request('search');
        $stores = Toko::where('toko_code', 'LIKE', '%' . $search . '%')
            ->where('toko_name', 'LIKE', '%' . $search . '%')
            ->paginate(10);
        return view('department.area.store.index', compact('stores', 'search'));
    }
}
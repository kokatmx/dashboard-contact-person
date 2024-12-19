<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DepartmentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userDivisionId = $user->division_id;
        $departments = Department::all();
        // Ambil total user per departemen
        $usersPerDepartment = Department::withCount('users')->get();

        // Ambil departemen yang berada di divisi user
        $departmentsInDivision = Department::where('division_id', $userDivisionId)
            ->withCount('users')->get();

        // Ambil departemen dari divisi lain
        $departmentsOutsideDivision = Department::where('division_id', '!=', $userDivisionId)
            ->withCount('users')->get();

        return view('department.index', compact('departmentsInDivision', 'departmentsOutsideDivision', 'departments', 'usersPerDepartment'));
    }

    public function showEmployees($uuid, Request $request)
    {
        // Temukan department berdasarkan uuid, bukan ID
        $department = Department::with('area')->where('uuid', $uuid)->firstOrFail();
        $departments = Department::all();
        $area = Area::where('area_id', Auth::user()->area_id)->firstOrFail();

        $currentUser = Auth::user();

        // Mengambil semua user yang ada di department tersebut dengan pagination
        $users = $department->users()->paginate(10);

        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user),
            ];
        });

        return view('department.show-employees',  compact('area', 'usersWithUpdateStatus',  'users', 'department', 'departments'))->with('success', 'Data user berhasil di perbarui');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $departmentsInDivision = Department::where('division_id', Auth::user()->division_id)
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('department_name', 'like', '%' . $query . '%');
            })
            ->withCount('users')
            ->get();

        $departmentsOutsideDivision = Department::where('division_id', '!=', Auth::user()->division_id)
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('department_name', 'like', '%' . $query . '%');
            })
            ->withCount('users')
            ->get();

        // Periksa apakah hasil pencarian kosong
        if ($departmentsInDivision->isEmpty() && $departmentsOutsideDivision->isEmpty()) {
            return redirect()->route('department.index')->with('error', 'Department tidak ditemukan.');
        }

        return view('department.index', compact('departmentsInDivision', 'departmentsOutsideDivision', 'query'));
    }

    public function deptAreaShow()
    {
        return view('department.area.index', compact('area', 'departmentsInDivision', 'departmentsOutsideDivision', 'departments', 'usersPerDepartment'));
    }
}

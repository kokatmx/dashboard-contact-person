<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Area;
>>>>>>> dev
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
<<<<<<< HEAD

        return view('department.index', compact('departmentsInDivision', 'departmentsOutsideDivision', 'departments', 'usersPerDepartment'));
    }

    public function showEmployees($uuid)
=======
        if ($departments->department_name === 'Area') {
            return view('department.area', compact('departmentsInDivision', 'departmentsOutsideDivision', 'departments', 'usersPerDepartment'));
        } else {
            return view('department.index', compact('departmentsInDivision', 'departmentsOutsideDivision', 'departments', 'usersPerDepartment'));
        }
    }

    public function showEmployees($uuid, Request $request)
>>>>>>> dev
    {
        // Temukan department berdasarkan uuid, bukan ID
        $department = Department::where('uuid', $uuid)->firstOrFail();
        $departments = Department::all();
<<<<<<< HEAD
=======
        $area = Area::where('area_id', Auth::user()->area_id)->firstOrFail();
        // Simpan slug area di session
>>>>>>> dev

        $currentUser = Auth::user();
        $currentDivisionId = $currentUser->division_id;

        // Mengambil semua user yang ada di department tersebut dengan pagination
        $users = $department->users()->paginate(10);

        // Menentukan apakah user yang login bisa melakukan update pada user lain dalam department
        $canUpdate = $users->contains(function ($user) use ($currentUser, $currentDivisionId) {
            return $currentDivisionId == $user->division_id && $currentUser->canUpdateUsers($user);
        });
<<<<<<< HEAD
        return view('department.show', compact('users', 'department', 'canUpdate', 'departments'))->with('success', 'Data user berhasil di perbarui');
    }
=======
        return view('department.show-user', compact('area', 'users', 'department', 'canUpdate', 'departments'))->with('success', 'Data user berhasil di perbarui');
    }

>>>>>>> dev
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
}

<?php

namespace App\Http\Controllers;

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

        return view('department.index', compact('departmentsInDivision', 'departmentsOutsideDivision', 'departments', 'usersPerDepartment'));
    }

    public function showEmployees($uuid)
    {
        // Temukan department berdasarkan uuid, bukan ID
        $department = Department::where('uuid', $uuid)->firstOrFail();
        $departments = Department::all();

        $currentUser = Auth::user();
        $currentDivisionId = $currentUser->division_id;

        // Mengambil semua user yang ada di department tersebut dengan pagination
        $users = $department->users()->paginate(10);

        // Menentukan apakah user yang login bisa melakukan update pada user lain dalam department
        $canUpdate = $users->contains(function ($user) use ($currentUser, $currentDivisionId) {
            return $currentDivisionId == $user->division_id && $currentUser->canUpdateUsers($user);
        });
        return view('department.show-user', compact('users', 'department', 'canUpdate', 'departments'))->with('success', 'Data user berhasil di perbarui');
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
}

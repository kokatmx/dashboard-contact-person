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
        $department = Department::where('uuid', $uuid)->firstOrFail();
        $departments = Department::all();
        $area = Area::where('area_id', Auth::user()->area_id)->firstOrFail();

        $currentUser = Auth::user();
        $currentDivisionId = $currentUser->division_id;

        // Mengambil semua user yang ada di department tersebut dengan pagination
        $users = $department->users()->paginate(10);

        // Menentukan apakah user yang login bisa melakukan update pada user lain dalam department
        // $canUpdate = $users->contains(function ($user) use ($currentUser, $currentDivisionId) {
        //     if (!$currentUser->isBranchManager()) {
        //         return $currentDivisionId == $user->division_id && $currentUser->canUpdateUsers($user);
        //     }
        //     return true;
        // });

        // $canUpdate = $users->contains(function ($user) use ($currentUser, $currentDivisionId) {
        //     // Jika Branch Manager, langsung izinkan untuk update semua user
        //     if ($currentUser->isBranchManager()) {
        //         return 'bisa update semua user';
        //     }
        //     // Cek apakah user yang login bisa mengupdate user yang ada di department
        //     return $currentDivisionId == $user->division_id && $currentUser->canUpdateUsers($user);
        // });


        // Mengirimkan informasi apakah user bisa diupdate

        // $isBM = $currentUser->isBranchManager();
        // $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser, $currentDivisionId, $isBM) {
        //     // Jika user adalah BM, selalu bisa update
        //     if ($isBM) {
        //         return [
        //             'user' => true,
        //             'canUpdate' => true,
        //         ];
        //     } else {
        //         // Jika bukan BM, cek apakah grade saat ini lebih tinggi dan berada di divisi yang sama
        //         $canUpdate =  ($currentDivisionId == $user->division_id && $currentUser->canUpdateUsers($user));
        //         return [
        //             'user' => $user,
        //             'canUpdate' => $canUpdate,
        //         ];
        //     }
        // });

        // khusus dept area ke view tersendiri
        if ($department->department_code === 'O1200') {
            return view('department.area.index', compact('area', 'users', 'department', 'departments'))->with('success', 'Data user berhasil di perbarui');
        }

        return view('department.show-employees', compact('area', 'users', 'department', 'departments'))->with('success', 'Data user berhasil di perbarui');
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
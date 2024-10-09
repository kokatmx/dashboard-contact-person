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
    public function show($id, Request $request)
    {

        $department = Department::find($id); // Ganti $departments menjadi $department
        if (!$department) {
            return redirect()->back()->with('error', 'Department tidak ditemukan.');
        }
        // Mengambil query pencarian dari request
        $query = $request->input('query');

        // Menggunakan query builder untuk mengambil users dan melakukan pagination
        $users = $department->users()->when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'like', '%' . $query . '%');
        })->paginate(10)->withPath(' '); // Memanggil method users() untuk mendapatkan query builder
        // Inisialisasi canUpdate menjadi false secara default
        $canUpdate = false;
        // Ambil divisi pengguna yang sedang login
        $currentUser = Auth::user();
        $currentDivisionId = $currentUser->division_id; // Misalkan Anda memiliki `division_id` di model User

        // Cek apakah ada pengguna yang diambil
        if ($users->isNotEmpty()) {
            // Iterasi melalui semua pengguna untuk menentukan jika pengguna yang sedang login bisa memperbarui salah satu dari mereka
            foreach ($users as $user) {
                // Cek apakah divisi pengguna sama dan grade pengguna yang login lebih tinggi dari user yang akan diperbarui
                if ($currentDivisionId === $user->division_id && $currentUser->canUpdateUsers($user)) {
                    $canUpdate = true;
                    break; // Hentikan loop jika satu user dapat di-update
                }
            }
        }

        return view('department.show', ['department' => $department, 'users' => $users, 'canUpdate' => $canUpdate]);
    }
    public function search(Request $request)
    {
        $department = Department::all();
        $query = $request->input('query');
        $departmentId = $request->input('department_id');

        // $departments = Department::when($query, function ($queryBuilder) use ($query) {
        //     return $queryBuilder->where('department_name', 'like', '%' . $query . '%');
        // })->get()
        //     ->appends(['query' => $query]); // Keeps the query in pagination links
        $departments = Department::where('department_name', 'like', '%' . $query . '%')->first();
        if ($departments->count() == 0) {
            return view('department.index', [
                'departments' => $departments,
                'error' => 'Data department tidak ditemukan.'
            ]);
        }
        return view('department.index', compact('departments', 'department'));
    }
}

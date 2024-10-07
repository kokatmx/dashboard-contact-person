<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userDivisionId = $user->division_id;

        // Ambil departemen yang berada di divisi user
        $departmentsInDivision = Department::where('division_id', $userDivisionId)->get();

        // Ambil departemen dari divisi lain
        $departmentsOutsideDivision = Department::where('division_id', '!=', $userDivisionId)->get();

        return view('department.index', compact('departmentsInDivision', 'departmentsOutsideDivision'));
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
        })->paginate(10);; // Memanggil method users() untuk mendapatkan query builder
        // Inisialisasi canUpdate menjadi false secara default
        $canUpdate = false;
        // Ambil divisi pengguna yang sedang login
        $currentUser = Auth::user();
        $currentDivisionId = $currentUser->division_id; // Misalkan Anda memiliki `division_id` di model User

        // Cek apakah ada pengguna yang diambil
        if ($users->isNotEmpty()) {
            // Iterasi melalui semua pengguna untuk menentukan jika pengguna yang sedang login bisa memperbarui salah satu dari mereka
            foreach ($users as $user) {
                // Periksa apakah divisi pengguna yang sedang login sama dengan divisi pengguna lain
                if ($currentDivisionId === $user->division_id) {
                    // Jika divisi sama, cek apakah pengguna yang sedang login bisa memperbarui pengguna tersebut
                    if ($currentUser->canUpdateUsers($user)) {
                        $canUpdate = true;
                        break; // Jika bisa update, tidak perlu cek lebih lanjut
                    }
                }
            }
        }

        return view('department.show', ['department' => $department, 'users' => $users, 'canUpdate' => $canUpdate]);
    }

    public function search(Request $request)
    {
        // Mencari department dengan nama yang sesuai, tanpa case sensitivity
        $query = $request->input('query');
        $departments = Department::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($query) . '%'])->orWhere('department_code', 'LIKE', '%' . $query . '%')
            ->paginate(10);;

        if ($departments->isEmpty()) {
            return redirect()->back()->with('error', 'Data department tidak ditemukan.');
        }

        // Kirim hasil pencarian ke view index
        return view('department.index', compact('departments'));
    }
}

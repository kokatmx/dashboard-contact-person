<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit($uuid, Department $department)
    {
        // Cari user berdasarkan id
        $user = User::where('uuid', $uuid)->firstOrFail();
        $departments = Department::all();
        $department = Department::find($user->department_id);

        // Ambil user yang sedang login
        $currentUser = Auth::user();

        // Cek apakah user yang sedang login memiliki akses untuk mengedit
        // if (!$currentUser->canUpdateUsers($user)) {
        //     return redirect()->back()->with('error', 'Anda tidak memiliki akses untuk mengedit user ini.');
        // }

        // Kirim data user ke view edit
        return view('user.edit',  compact('user', 'departments', 'department'));
    }

    public function update(Request $request, $uuid)
    {
        // Validasi input
        $request->validate([
            'name' => 'nullable',
            'no_hp' => 'required|string|max:255',
        ]);

        // Cari user berdasarkan ID
        $user = User::where('uuid', $uuid)->firstOrFail();

        // Ambil user yang sedang login
        $currentUser = Auth::user();

        // // Cek apakah user yang sedang login memiliki akses untuk mengupdate
        // if (!$currentUser->canUpdateUsers($user)) {
        //     return redirect()->back()->with('error', 'Anda tidak memiliki akses untuk mengupdate user ini.');
        // }

        // Update data user
        $user->update([
            // 'name' => $request->name,
            'no_hp' => $request->no_hp,
        ]);
        $departmentUuid = optional($user->department)->uuid; // Menggunakan optional untuk mencegah error jika department null
        return redirect()->route('department.employees', ['uuid' => $departmentUuid])
            ->with('success', 'Data user berhasil diperbarui.');
    }

    public function search(Request $request, $uuid)
    {
        $query = $request->input('query');
        $department = Department::where('uuid', $uuid)->firstOrFail(); // Cari data departemen berdasarkan UUID
        $departmentId = $department->department_id;

        // Query untuk mencari users dalam departemen tertentu
        $users = User::where('department_id', $departmentId)
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('name', 'like', '%' . $query . '%');
            })
            ->paginate(10);

        // Ambil data user yang sedang login
        $currentUser = Auth::user();
        $canUpdate = false;
        $currentDivisionId = $currentUser->division_id; // Ambil divisi dari user yang login

        // Cek hak akses berdasarkan grade dan divisi
        if ($users->isNotEmpty()) {
            foreach ($users as $user) {
                if ($currentDivisionId === $user->division_id && $currentUser->canUpdateUsers($user)) {
                    $canUpdate = true;
                    break;
                }
            }
        }

        if ($users->isEmpty()) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        // Return hasil pencarian ke view list users per department
        return view('department.show', compact('department', 'users', 'currentUser', 'canUpdate'));
    }
}

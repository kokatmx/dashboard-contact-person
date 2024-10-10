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
        if (!$currentUser->canUpdateUsers($user)) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses untuk mengedit user ini.');
        }

        // Kirim data user ke view edit
        return view('user.edit',  compact('user', 'departments', 'department'));
    }

    public function update(Request $request, $uuid)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Cari user berdasarkan ID
        $user = User::where('uuid', $uuid)->firstOrFail();

        // Ambil user yang sedang login
        $currentUser = Auth::user();

        // Cek apakah user yang sedang login memiliki akses untuk mengupdate
        if (!$currentUser->canUpdateUsers($user)) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses untuk mengupdate user ini.');
        }

        // Update data user
        $user->update([
            'name' => $request->name,
        ]);
        $departmentUuid = optional($user->department)->uuid; // Menggunakan optional untuk mencegah error jika department null
        return redirect()->route('department.employees', ['uuid' => $departmentUuid])
            ->with('success', 'Data user berhasil diperbarui.');
    }

    public function search(Request $request, $uuid)
    {
        $query = $request->input('query');
        $departmentId = $request->input('department_id');

        // Query untuk mencari pengguna
        $users = User::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'like', '%' . $query . '%');
        })
            ->when($departmentId, function ($queryBuilder) use ($departmentId) {
                return $queryBuilder->where('department_id', $departmentId);
            })
            ->paginate(10);
        // Ambil data departemen untuk ditampilkan di view show
        $department = Department::findOrFail($uuid);
        $user = Auth::user();
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
        if ($users->isEmpty()) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }
        // Return hasil pencarian ke view show department
        return view('department.show', compact('department', 'users', 'user', 'canUpdate'));
    }
}

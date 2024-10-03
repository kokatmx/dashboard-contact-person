<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit($id, Department $department)
    {
        $departments = Department::find($id);

        // Cari user berdasarkan id
        $user = User::findOrFail($id);

        // Ambil user yang sedang login
        $currentUser = Auth::user();

        // Cek apakah user yang sedang login memiliki akses untuk mengedit
        if (!$this->canUpdate($currentUser, $user)) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses untuk mengedit user ini.');
        }

        // Kirim data user ke view edit
        return view('user.edit',  compact('user', 'departments'));
    }

    /**
     * Update user yang dipilih.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Cari user berdasarkan id
        $user = User::findOrFail($id);

        // Ambil user yang sedang login
        $currentUser = Auth::user();

        // Cek apakah user yang sedang login memiliki akses untuk mengupdate
        if (!$this->canUpdate($currentUser, $user)) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses untuk mengupdate user ini.');
        }

        // Update data user
        $user->update([
            'name' => $request->name,
        ]);

        // Redirect dengan pesan sukses
        if ($user->department) {
            return redirect()->route('department.show', ['id' => $user->department_id])
                ->with('success', 'Data user berhasil diperbarui.');
        }

        // Jika user tidak memiliki department, arahkan ke halaman lain
        return redirect()->route('department.index')->with('success', 'Data user berhasil diperbarui, tetapi user tidak terkait dengan department manapun.');
    }

    /**
     * Mengecek apakah user memiliki akses untuk mengupdate.
     */
    private function canUpdate($currentUser, $user)
    {
        // Cek jika grade user yang sedang login lebih tinggi dari user yang akan diupdate
        return $currentUser->grade >= $user->grade;
    }
    // UserController.php
    public function search(Request $request)
    {
        $query = $request->input('query');
        $departmentId = $request->input('department_id');

        // Cari user berdasarkan nama dan department_id
        $users = User::where('department_id', $departmentId)
            ->where('name', 'LIKE', "%{$query}%")
            ->get();

        // Ambil data departemen untuk ditampilkan di view show
        $department = Department::findOrFail($departmentId);
        $user = Auth::user();
        $canUpdate = $user->canUpdateUsers();

        if ($users->isEmpty()) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }
        // Return hasil pencarian ke view show department
        return view('department.show', compact('department', 'users', 'user', 'canUpdate'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit($departmentUuid, $userUuid)
    {
        $user = User::where('uuid', $userUuid)->firstOrFail();
        $department = $user->department; // Ambil department langsung dari relasi user


        return view('user.edit', compact('user', 'department'));
    }
    public function update(Request $request, $departmentUuid, $userUuid)
    {
        // Validasi input
        $request->validate([
            'no_hp' => 'required|string|max:255',
        ]);

        $department = Department::where('uuid', $departmentUuid)->firstOrFail();

        // Cari user berdasarkan UUID
        $user = User::where('uuid', $userUuid)->firstOrFail();

        // Update data user
        $user->update([
            'no_hp' => $request->no_hp,
        ]);

        // Redirect berdasarkan konteks
        return redirect()->route('department.employees', ['departmentUuid' => $department->uuid])
            ->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function search(Request $request, $uuid)
    {
        $query = $request->input('query');
        $department = Department::where('uuid', $uuid)->firstOrFail(); // Cari data departemen berdasarkan UUID
        $departmentId = $department->department_id;
        $area = $department->area;

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

        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user),
            ];
        });

        if ($users->isEmpty()) {
            return redirect()->back()->with('error', 'Data Karyawan tidak ditemukan.');
        }

        // Return hasil pencarian ke view list users per department
        return view('department.show-employees', compact('area', 'usersWithUpdateStatus', 'department', 'users', 'currentUser', 'canUpdate'));
    }
}

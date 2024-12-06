<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use App\Models\StoreUser;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function searchStores(Request $request, $uuid)
    {
        // Cari department berdasarkan UUID
        $department = Department::where('uuid', $uuid)->firstOrFail();

        // Ambil ID department
        $departmentId = $department->department_id;

        // Ambil input pencarian
        $search = $request->input('search');

        // Cari toko berdasarkan relasi melalui users
        $stores = Toko::whereHas('users', function ($query) use ($departmentId) {
            $query->where('department_id', $departmentId);
        })
            ->where(function ($query) use ($search) {
                $query->where('toko_code', 'LIKE', '%' . $search . '%')
                    ->orWhere('toko_name', 'LIKE', '%' . $search . '%');
            })
            ->paginate(10);

        // Jika data tidak ditemukan
        if ($stores->total() === 0) {
            return redirect()->back()->with('error', 'Toko tidak ditemukan.');
        }

        // Kirim data ke view
        return view('department.area.store.index', compact('stores', 'search', 'department'));
    }


    public function showPositionUser($tokoId, $userName)
    {
        $store = Toko::findOrFail($tokoId);

        // $users = $store->users()->whereHas('position', function ($query) use ($userName) {
        //     $query->where('position_name', 'LIKE', "%{$userName}%");
        // })->get();
        $users = $store->users()->where('name', 'LIKE', "%{$userName}%")->get();

        $currentUser = Auth::user();
        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user)
            ];
        });

        return view('department.area.store.position.user', compact('store', 'users', 'usersWithUpdateStatus'));
    }

    public function editStore($uuid, $tokoId)
    {
        $department = Department::where('uuid', $uuid)->firstOrFail(); // Validasi UUID
        $store = Toko::findOrFail($tokoId); // Validasi Toko
        return view('department.area.store.edit', compact('store', 'department'));
    }

    public function updateStore(Request $request, $uuid, $tokoId)
    {
        $department = Department::where('uuid', $uuid)->firstOrFail();
        $store = Toko::findOrFail($tokoId);

        $request->validate([
            'no_hp' => 'required|string|max:15|regex:/^[0-9]+$/ ',
        ], [
            'no_hp.max' => 'Nomor HP tidak boleh lebih dari :max karakter',
            'no_hp.regex' => 'Nomor HP hanya boleh berisi angka.',
        ]);

        $store->update([
            'no_hp' => $request->input('no_hp'),
        ]);

        return redirect()->route('department.stores', ['uuid' => $department->uuid])
            ->with('success', 'Toko berhasil diperbarui.');
    }

    public function showUsersStore($tokoId)
    {
        $store = Toko::with('users')->findOrFail($tokoId);
        // $department = $store->users->department;
        $users = $store->users()->paginate(10);
        $currentUser = Auth::user();
        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user)
            ];
        });

        return view('department.area.store.user.index', compact('store', 'users', 'usersWithUpdateStatus'));
    }

    public function searchUsersStore(Request $request, $tokoId)
    {
        $search = $request->input('search');
        $store = Toko::with('users')->findOrFail($tokoId);
        $users = $store->users()->where('name', 'LIKE', '%' . $search . '%')->paginate(10);

        $currentUser = Auth::user();

        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user),
            ];
        });

        // Jika data tidak ditemukan
        if ($users->total() === 0) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        return view('department.area.store.user.index', compact('users', 'usersWithUpdateStatus', 'store'));
    }
}

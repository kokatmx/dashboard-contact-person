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

    public function showPositionUser($departmentUuid, $tokoId, $userName)
    {
        $store = Toko::findOrFail($tokoId);
        $department = Department::where('uuid', $departmentUuid)->firstOrFail();

        $users = $store->users()->where('name', 'LIKE', "%{$userName}%")->get();

        $currentUser = Auth::user();
        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user)
            ];
        });

        return view('department.area.store.user.position.position', compact('department', 'store', 'users', 'usersWithUpdateStatus'));
    }

    public function userPositionEdit($departmentUuid, $tokoId, $userName)
    {
        $store = Toko::where('toko_id', $tokoId)->firstOrFail();
        $user = User::where('name', 'LIKE', "%{$userName}%")->firstOrFail();
        $department = $user->department; // Ambil department langsung dari relasi user

        return view('department.area.store.user.position.edit', compact('user', 'department', 'store'));
    }

    public function userPositionUpdate(Request $request, $departmentUuid, $tokoId, $userName)
    {
        // Validasi input
        $request->validate([
            'no_hp' => 'required|string|max:255',
        ]);

        $department = Department::where('uuid', $departmentUuid)->firstOrFail();
        $store = Toko::where('toko_id', $tokoId)->firstOrFail();
        // Cari user berdasarkan Name
        $user = User::where('name', 'LIKE', "%{$userName}%")->firstOrFail();

        // Update data user
        $user->update([
            'no_hp' => $request->no_hp,
        ]);
        $store = Toko::where('toko_id', $tokoId)->firstOrFail();

        return redirect()->route('department.area.stores.users.position', ['tokoId' => $store->toko_id, 'departmentUuid' => $department->uuid, 'userName' => $user->name])->with('success', 'Data karyawan berhasil diperbarui.');
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

        return redirect()->route('department.area.stores.index', ['departmentUuid' => $department->uuid])
            ->with('success', 'Toko berhasil diperbarui.');
    }

    public function showUsersStore($departmentUuid, $tokoId)
    {
        $store = Toko::with('users')->findOrFail($tokoId);
        $department = Department::where('uuid', $departmentUuid)->firstOrFail();
        $users = $store->users()->paginate(10);
        // $user = User::where('uuid', $userUuid)->firstOrFail();
        $currentUser = Auth::user();
        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user)
            ];
        });

        return view('department.area.store.user.index', compact('department', 'store', 'users', 'usersWithUpdateStatus',));
    }

    public function userStoreEdit($departmentUuid, $tokoId, $userUuid)
    {
        $user = User::where('uuid', $userUuid)->firstOrFail();
        $department = $user->department; // Ambil department langsung dari relasi user
        $store = Toko::where('toko_id', $tokoId)->firstOrFail();

        return view('department.area.store.user.edit', compact('user', 'department', 'store'));
    }

    public function userStoreUpdate(Request $request, $departmentUuid, $tokoId, $userUuid)
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
        $store = Toko::where('toko_id', $tokoId)->firstOrFail();

        return redirect()->route('department.area.stores.users.index', ['tokoId' => $store->toko_id, 'departmentUuid' => $department->uuid])->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function searchUsersStore(Request $request, $departmentUuid, $tokoId)
    {
        $search = $request->input('search');
        $store = Toko::with('users')->findOrFail($tokoId);
        $users = $store->users()->where('name', 'LIKE', '%' . $search . '%')->paginate(10);
        $department = Department::where('uuid', $departmentUuid)->firstOrFail();
        $currentUser = Auth::user();

        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user),
            ];
        });

        // Jika data tidak ditemukan
        if ($users->total() === 0) {
            return redirect()->back()->with('error', 'Data karyawan tidak ditemukan.');
        }

        return view('department.area.store.user.index', compact('users', 'usersWithUpdateStatus', 'store', 'department'));
    }
}

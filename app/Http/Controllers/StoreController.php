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
    public function index(Request $request, $uuid)
    {
        $department = Department::with('positions')->where('uuid', $uuid)->firstOrFail();
        $stores = Toko::with('users.position')->paginate(10);
        $currentUser = Auth::user();
        $storesWithUpdateStatus = $stores->map(function ($store) use ($currentUser) {
            $areaManager = $store->getAreaManager(); // Asumsikan method ini mengembalikan user dengan posisi AM
            $areaCoordinator = $store->getAreaCoordinator(); // Asumsikan method ini mengembalikan user dengan posisi AC

            $canUpdate = false;
            if ($areaManager && $areaManager->id === $currentUser->id) {
                $canUpdate = $currentUser->position->position_name === 'Area Manager';
            } elseif ($areaCoordinator && $areaCoordinator->id === $currentUser->id) {
                $canUpdate = $currentUser->position->position_name === 'Area Coordinator';
            }

            return [
                'store' => $store,
                'canUpdate' => $canUpdate,
            ];
        });
        return view('department.area.store.index', compact('stores', 'department', 'storesWithUpdateStatus'));
    }

    public function search(Request $request, $uuid)
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

    public function edit($uuid, $tokoCode)
    {
        $department = Department::where('uuid', $uuid)->firstOrFail(); // Validasi UUID
        $store = Toko::where('toko_code', $tokoCode)->firstOrFail(); // Validasi Toko
        return view('department.area.store.edit', compact('store', 'department'));
    }

    public function update(Request $request, $uuid, $tokoCode)
    {
        $department = Department::where('uuid', $uuid)->firstOrFail();
        $store = Toko::where('toko_code', $tokoCode)->firstOrFail();

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


    public function showPositionUser($departmentUuid, $tokoCode, $userName)
    {
        $store = Toko::where('toko_code', $tokoCode)->firstOrFail();
        $department = Department::where('uuid', $departmentUuid)->firstOrFail();

        $users = $store->users()->where('name', 'LIKE', "%{$userName}%")->get();

        $currentUser = Auth::user();
        $usersWithUpdateStatus = $users->map(function ($user) use ($currentUser) {
            return [
                'user' => $user,
                'canUpdate' => $currentUser->canUpdateUsers($user)
            ];
        });

        return view('department.area.store.user.position.show-user', compact('department', 'store', 'users', 'usersWithUpdateStatus'));
    }

    public function userPositionEdit($departmentUuid, $tokoCode, $userName, $userUuid)
    {
        $store = Toko::where('toko_code', $tokoCode)->firstOrFail();
        $user = User::where('uuid',  $userUuid)->firstOrFail();
        $department = $user->department; // Ambil department langsung dari relasi user

        return view('department.area.store.user.position.edit', compact('user', 'department', 'store'));
    }

    public function userPositionUpdate(Request $request, $departmentUuid, $tokoCode, $userName)
    {
        // Validasi input
        $request->validate([
            'no_hp' => 'required|string|max:255',
        ]);

        $department = Department::where('uuid', $departmentUuid)->firstOrFail();
        $store = Toko::where('toko_code', $tokoCode)->firstOrFail();
        // Cari user berdasarkan Name
        $user = User::where('name', 'LIKE', "%{$userName}%")->firstOrFail();

        // Update data user
        $user->update([
            'no_hp' => $request->no_hp,
        ]);
        $store = Toko::where('toko_code', $tokoCode)->firstOrFail();

        return redirect()->route('department.area.stores.employees.position.index', ['tokoCode' => $store->toko_code, 'departmentUuid' => $department->uuid, 'userName' => $user->name])->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function showUsersStore($departmentUuid, $tokoCode)
    {
        $store = Toko::with('users')->where('toko_code', $tokoCode)->firstOrFail();
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

    public function userStoreEdit($departmentUuid, $tokoCode, $userUuid)
    {
        $user = User::where('uuid', $userUuid)->firstOrFail();
        $department = $user->department; // Ambil department langsung dari relasi user
        $store = Toko::where('toko_code', $tokoCode)->firstOrFail();

        return view('department.area.store.user.edit', compact('user', 'department', 'store'));
    }

    public function userStoreUpdate(Request $request, $departmentUuid, $tokoCode, $userUuid)
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
        $store = Toko::where('toko_code', $tokoCode)->firstOrFail();

        return redirect()->route('department.area.stores.employees.index', ['tokoCode' => $store->toko_code, 'departmentUuid' => $department->uuid])->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function searchUsersStore(Request $request, $departmentUuid, $tokoCode)
    {
        $search = $request->input('search');
        $store = Toko::with('users')->where('toko_code', $tokoCode)->firstOrFail();
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

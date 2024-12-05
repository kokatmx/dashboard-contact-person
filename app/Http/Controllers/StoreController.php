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

    // /**
    //  * Memeriksa apakah user dapat mengupdate user lain berdasarkan kode toko.
    //  */
    // public function updateUser(Request $request, $userId)
    // {
    //     // Ambil user yang sedang login
    //     $currentUser = Auth::user();

    //     // Ambil user yang ingin diupdate berdasarkan ID
    //     $otherUser = User::findOrFail($userId);

    //     // Panggil fungsi canUpdateUsers() untuk memeriksa apakah user dapat mengupdate
    //     if ($currentUser->canUpdateUsers($otherUser)) {
    //         // Lakukan proses update user sesuai dengan kebutuhan
    //         // Misalnya, mengupdate data user
    //         $otherUser->update([
    //             'no_hp' => $request->input('no_hp'),
    //             // Tambahkan field yang ingin diupdate
    //         ]);

    //         return redirect()->route('users.index')->with('success', 'User berhasil diupdate!');
    //     } else {
    //         // Jika user tidak memiliki izin untuk mengupdate
    //         return redirect()->route('users.index')->with('error', 'Anda tidak memiliki izin untuk mengupdate user ini.');
    //     }
    // }



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

    public function showUsersStore($tokoId)
    {
        $store = Toko::with('users')->findOrFail($tokoId);
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

    public function editStore($tokoId, $uuid)
    {
        $department = Department::where('uuid', $uuid)->firstOrFail();
        $store = Toko::findOrFail($tokoId);
        return view('department.area.store.edit', compact('store', 'department'));
    }
    public function updateStore(Request $request, $tokoId, $uuid)
    {
        $store = Toko::findOrFail($tokoId);

        $request->validate([
            'no_hp' => 'required|string|max:12',
        ]);

        $store->update([
            'no_hp' => $request->input('no_hp'),
        ]);

        return redirect()->route('department.area.store.index')->with('success', 'Toko berhasil diupdate!');
    }
}

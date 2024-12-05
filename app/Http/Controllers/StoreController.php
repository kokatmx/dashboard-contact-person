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

    public function showUsersStore($tokoId)
    {
        $store = Toko::with('users')->findOrFail($tokoId);
        $users = $store->users()->paginate(10);
        return view('department.area.store.user.index', compact('store', 'users'));
    }

    // public function showPositionUser($tokoId, $positionName)
    // {
    //     $store = Toko::findOrFail($tokoId);

    //     $users = User::where('toko_id', $tokoId)->whereHas('position', function ($query) use ($positionName) {
    //         $query->where('position_name', $positionName);
    //     })->get();

    //     return view();
    // }


    public function editStore($tokoId, $uuid)
    {
        $store = Toko::findOrFail($tokoId);
        $department = Department::where('uuid', $uuid)->firstOrFail();
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

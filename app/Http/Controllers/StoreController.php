<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\StoreUser;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function showStores(Request $request, $positionName)
    {
        $positionAC = Position::where(
            'position_name',
            $positionName
        )->firstOrFail();
        $stores = $positionAC->stores;
        return view('department.area.store.index', compact('stores', 'positionAC'));
    }

    public function storeUserShow($tokoId)
    {
        // Ambil toko berdasarkan ID
        $store = Toko::with('users')->findOrFail($tokoId);

        // Ambil semua user yang terkait dengan toko ini melalui tabel pivot
        $users = $store->users;

        return view('department.area.store.user.index', compact('users', 'store'));
    }

    /**
     * Memeriksa apakah user dapat mengupdate user lain berdasarkan kode toko.
     */
    public function updateUser(Request $request, $userId)
    {
        // Ambil user yang sedang login
        $currentUser = Auth::user();

        // Ambil user yang ingin diupdate berdasarkan ID
        $otherUser = User::findOrFail($userId);

        // Panggil fungsi canUpdateUsers() untuk memeriksa apakah user dapat mengupdate
        if ($currentUser->canUpdateUsers($otherUser)) {
            // Lakukan proses update user sesuai dengan kebutuhan
            // Misalnya, mengupdate data user
            $otherUser->update([
                'no_hp' => $request->input('no_hp'),
                // Tambahkan field yang ingin diupdate
            ]);

            return redirect()->route('users.index')->with('success', 'User berhasil diupdate!');
        } else {
            // Jika user tidak memiliki izin untuk mengupdate
            return redirect()->route('users.index')->with('error', 'Anda tidak memiliki izin untuk mengupdate user ini.');
        }
    }
}

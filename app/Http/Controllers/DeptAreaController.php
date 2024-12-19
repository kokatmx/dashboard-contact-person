<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;

class DeptAreaController extends Controller
{

    public function showStores(Request $request, $uuid)
    {
        $department = Department::with('positions')->where('uuid', $uuid)->firstOrFail();
        $stores = Toko::with('users')->paginate(10);
        // if ($tokoId) {
        //     // jika didalam toko
        //     $store = Toko::findOrFail($tokoId);
        //     $redirectRoute = route('stores.users', $store->id);
        // } else {
        //     $department = Department::where('uuid', $contextUuid)->firstOrFail();
        //     $redirectRoute = route('departments.employees', $contextUuid);
        // }

        return view('department.area.store.index', compact('stores', 'department'));
    }
}

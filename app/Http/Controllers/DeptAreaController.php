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

        return view('department.area.store.index', compact('stores', 'department'));
    }
}

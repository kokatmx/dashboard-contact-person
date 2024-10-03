<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $department = Department::all();
        if (Auth::user()->role === User::ROLE_STORE) {
            return view('store.dashboard', compact('department'));
        } elseif (Auth::user()->role === User::ROLE_OFFICE) {
            return view('office.dashboard', compact('department'));
        } elseif (Auth::user()->role === User::ROLE_WAREHOUSE) {
            return view('warehouse.dashboard', compact('department'));
        }
    }
}

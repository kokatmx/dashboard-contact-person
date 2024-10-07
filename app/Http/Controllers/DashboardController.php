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
        $user = User::all();
        $department = Department::all();
        // if (Auth::user()->role === User::ROLE_STORE) {
        //     return view('dashboard', compact('department', 'user'));
        // } elseif (Auth::user()->role === User::ROLE_OFFICE) {
        //     return view('dashboard', compact('department', 'user'));
        // } elseif (Auth::user()->role === User::ROLE_WAREHOUSE) {
        //     return view('dashboard', compact('department', 'user'));
        // }
        return view('dashboard', compact('department', 'user'));
    }
}

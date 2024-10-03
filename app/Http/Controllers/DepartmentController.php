<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function index()
    {
        $user =  User::all();
        $departments = Department::all();
        return view('department.index', compact('departments', 'user'));
    }
    public function show($id)
    {
        $department = Department::find($id); // Ganti $departments menjadi $department
        if (!$department) {
            return redirect()->back()->with('error', 'Department tidak ditemukan.');
        }

        // Menggunakan query builder untuk mengambil users dan melakukan pagination
        $users = $department->users()->paginate(10); // Memanggil method users() untuk mendapatkan query builder

        $canUpdate = Auth::user()->canUpdateUsers();
        return view('department.show', ['department' => $department, 'users' => $users, 'canUpdate' => $canUpdate]);
    }

    public function search(Request $request)
    {
        // Mencari department dengan nama yang sesuai, tanpa case sensitivity
        $query = $request->input('query');
        $departments = Department::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($query) . '%'])->get();

        if ($departments->isEmpty()) {
            return redirect()->back()->with('error', 'Data department tidak ditemukan.');
        }

        // Kirim hasil pencarian ke view index
        return view('department.index', compact('departments'));
    }
}
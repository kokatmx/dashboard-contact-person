<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleMiddleware;
use App\Models\Department;
use App\Models\Division;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil jumlah departemen unik
        $totalDepartments = Department::count();
        // Ambil total user
        $totalUsers = User::count();
        // Ambil total divisi
        $totalDivisions = Division::count();
        $department = Department::all();
        return view('dashboard', compact('department', 'totalDepartments', 'totalUsers', 'totalDivisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        //
    }
}

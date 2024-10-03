<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckRoleMiddleware;
use App\Models\Department;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::all();
        return view('store.dashboard', compact('department'));
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

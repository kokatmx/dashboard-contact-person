<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Http\Request;

class DeptAreaController extends Controller
{
    public function deptAreaShow()
    {

        return view('department.area.index',);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Http\Request;

class DeptAreController extends Controller
{
    public function deptAreaShow($areaId)
    {


        return view('department.area.index',);
    }
}

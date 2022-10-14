<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dept;

class DeptViewController extends Controller
{
    public function show()
    {
    $data = Dept::all();
        return view('home.department')->with('dept',$data);
    }
}

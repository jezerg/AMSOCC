<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Build;

class ReportController extends Controller
{
    public function index()
    {
        $build = Build::all();
        return view('home.reports')->with('build',$build);
    }

}

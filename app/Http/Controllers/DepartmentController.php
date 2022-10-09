<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dept;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('home.department');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'dept_name' => 'required',
            'details' => 'required',
        ]);

        $dept = new Dept;

        $dept->dept_name = $request->input('dept_name');
        $dept->details = $request->input('details');

        $dept->save();

        return redirect('/deprtment')->with('success', 'Department Saved');
    }

}

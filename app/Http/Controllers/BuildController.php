<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Build;

class BuildController extends Controller
{
    public function index()
    {
        return view('home.build');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'build_name' => 'required',
            'serial' => 'required',
            'details' => 'required',
            'status_id' => 'required',
            'dept_id' => 'required'
        ]);

        $build = new Build;

        $build->name = $request->input('name');
        $build->serial = $request->input('serial');
        $build->details = $request->input('details');
        $build->status_id = $request->input('status_id');
        $build->dept_id = $request->input('dept_id');

        $build->save();

        return redirect('/build')->with('success', 'Build Saved');
    }

}

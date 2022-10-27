<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Build;

class BuildController extends Controller
{
    public function index()
    {
        $build = Build::all();
        return view('home.build')->with('build',$build);
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

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'build_name' => 'required',
            'serial' => 'required',
            'details' => 'required',
            'status_id' => 'required',
            'dept_id' => 'required'
            // 'updated_at' => 'required'
        ]);

        $build = build::find($id);

        $build->build_name = $request->input('build_name');
        $build->serial = $request->input('serial');
        $build->details = $request->input('details');
        $build->status_id = $request->input('status_id');
        $build->dept_id = $request->input('dept_id');

        $build->save();
        $fetchedBuild = Build::find($build->id);
        var_dump($fetchedBuild);

        return redirect('/build')->with('success', 'Build Updated');
    }

    public function show($id)
    {
        //
    }


    public function destroy($id)
    {

        $build = build::find($id);
        $build->delete();

        return redirect('/build')->with('success','Data deleted');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dept;

class DepartmentController extends Controller
{
    public function index()
    {
        $data = Dept::all();
        return view('home.department')->with('dept',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'dept_name' => 'required',
            'details' => 'required'
        ]);

        $dept = new Dept;

        $dept->dept_name = $request->input('dept_name');
        $dept->details = $request->input('details');

        $dept->save();

        return redirect('/deprtment')->with('success', 'Department Saved');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'dept_name' => 'required',
            'details' => 'required',
            'updated_at' => 'required'
        ]);

        $dept = Dept::find($id);

        $dept->dept_name = $request->input('dept_name');
        $dept->details = $request->input('details');

        $dept->save();

        return redirect('/deprtment')->with('success', 'Department Saved');
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {

        $dept = Dept::find($id);
        $dept->delete();

        return redirect('/department')->with('success','Data deleted');
    }
}

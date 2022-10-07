<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assets;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'details' => 'required',
            'serial' => 'required',
            'category_id' => 'required',
            'status_id' => 'required',
            'quantity' => 'required',
            'build_id' => 'required',
            'dept_id' => 'required'
        ]);

        $asset = new Assets;

        $asset->name = $request->input('name');
        $asset->details = $request->input('details');
        $asset->serial = $request->input('serial');
        $asset->category_id = $request->input('category_id');
        $asset->status_id = $request->input('status_id');
        $asset->quantity = $request->input('quantity');
        $asset->build_id = $request->input('build_id');
        $asset->dept_id = $request->input('dept_id');

        $asset->save();

        return redirect('/')->with('success', 'Asset Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

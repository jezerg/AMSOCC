<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_build_list;

class BuildViewController extends Controller
{
    public function show()
    {
        // $data = AssetView::all();
        // return view('index',['assetData'=>$data]);
        $data = view_build_list::all();
        return view('home.build')->with('build',$data);
    }
}

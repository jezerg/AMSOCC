<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_asset_list;

class AssetViewController extends Controller
{
    public function show()
    {
        // $data = AssetView::all();
        // return view('index',['assetData'=>$data]);
        // $data = view_asset_list::all();
        // return view('home.index')->with('vasset',$data);
    }
}

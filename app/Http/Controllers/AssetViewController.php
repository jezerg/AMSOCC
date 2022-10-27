<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_asset_list;

class AssetViewController extends Controller
{
    public function index()
    {
        $assetview = view_asset_list::all();


        return view('home.build')->with('assetview',$assetview);
    }
}

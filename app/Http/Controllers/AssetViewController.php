<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetView;

class AssetViewController extends Controller
{
    public function show()
    {
        $data = AssetView::all();
        return view('index',['assetData'=>$data]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assets;
use Illuminate\Support\Facades\Validator;

class AssetDelController extends Controller
{
    public function showArticle(Request $request)
    {

        $asset = Assets::all();
        return view('home.asset', ['asset' => $asset]);
    }

    function deleteArticle(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => "required",
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        Assets::find($request->id)->delete();
        return back()
            ->with('success', 'Asset deleted successfully');
    }




}

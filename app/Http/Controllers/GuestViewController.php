<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestView;

class GuestViewController extends Controller
{
    public function show()
    {
        $data = GuestView::all();
        return view('home.index',['guestasset'=>$data]);
    }
}


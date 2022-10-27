<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_asset_list;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *\
     * @return \Illuminate\Http\Response
    */
    public function __construct()
    {
        ini_set('max_execution_time', 300);
    }

    public function generatePDF()
    {
        $asset = view_asset_list::get();

        $data = [
            'title' => 'Asset List',
            'date' => date('m/d/Y'),
            'assets' => $asset
        ];

        $pdf = PDF::loadView('report', $data)->setPaper('a4', 'landscape');

        return $pdf->download('assets.pdf');
    }
}

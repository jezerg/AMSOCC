<?php

namespace App\Exports;

use App\Models\view_asset_list;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class AssetsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return view_asset_list::all();
    }

    public function headings(): array
    {
        return [
          'ID','Name','Details','Serial','Category','Status','Quantity',
          'Build','Department','Created'
        ];
    }
}

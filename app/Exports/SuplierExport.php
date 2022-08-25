<?php

namespace App\Exports;
use App\suplier;

use Maatwebsite\Excel\Concerns\FromCollection;

class SuplierExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return suplier::all();
    }
}

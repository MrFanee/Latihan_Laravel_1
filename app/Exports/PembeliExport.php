<?php

namespace App\Exports;
use App\pembeli;

use Maatwebsite\Excel\Concerns\FromCollection;

class PembeliExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pembeli::all();
    }
}

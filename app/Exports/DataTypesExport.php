<?php

namespace App\Exports;

use App\Models\DataType;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataTypesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataType::all();
    }
}

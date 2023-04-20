<?php

namespace App\Exports;

use App\Models\MenuItem;
use Maatwebsite\Excel\Concerns\FromCollection;

class MenuItemsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MenuItem::all();
    }
}

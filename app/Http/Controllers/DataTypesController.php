<?php

namespace App\Http\Controllers;

use App\Exports\DataTypesExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class DataTypesController extends Controller
{
    public function export() 
    {
        return Excel::download(new DataTypesExport, 'data_types.xlsx');
    }
}

<?php

namespace App\Http\Controllers;

use App\Exports\CategoriesExport;
use Maatwebsite\Excel\Facades\Excel;

// use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function export() 
    {
        return Excel::download(new CategoriesExport, 'categories.xlsx');
    }
}

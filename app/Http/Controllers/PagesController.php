<?php

namespace App\Http\Controllers;

use App\Imports\PagesImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function import() 
    {
        Excel::import(new PagesImport, 'pages.xlsx');
        
    }
}

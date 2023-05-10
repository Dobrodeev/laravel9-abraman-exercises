<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\WheelsImport;

class WheelController extends Controller
{
    public function import() 
    {
        Excel::import(new WheelsImport, 'alcar.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }
}

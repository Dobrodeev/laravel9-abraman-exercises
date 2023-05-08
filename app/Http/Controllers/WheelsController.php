<?php

namespace App\Http\Controllers;

use App\Imports\WheelsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WheelsController extends Controller
{
    public function import() 
    {
        Excel::import(new WheelsImport, 'alcarinua.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }
}

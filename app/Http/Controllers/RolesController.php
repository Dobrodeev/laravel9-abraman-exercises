<?php

namespace App\Http\Controllers;

use App\Imports\RolesImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function import() 
    {
        Excel::import(new RolesImport, 'roles.xlsx');
        
    }
}

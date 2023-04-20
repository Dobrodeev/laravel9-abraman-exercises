<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MenuItemsExport;

class MenuItemsController extends Controller
{
    public function export() 
    {
        return Excel::download(new MenuItemsExport, 'menu-items.xlsx');
    }   
}

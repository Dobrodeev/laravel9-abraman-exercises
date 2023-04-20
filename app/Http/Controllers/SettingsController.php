<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SettingsExport;

class SettingsController extends Controller
{
    public function export() 
    {
        return Excel::download(new SettingsExport, 'settings.xlsx');
    }}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LoadExcelFileController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(): View
    {
        return view('loadfiles.load-excel');
    }
}

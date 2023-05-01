<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        // echo 'show() from UserController.';
        // return view('user.input-excel-file');
        return view('excel.excel-table');
    }
}

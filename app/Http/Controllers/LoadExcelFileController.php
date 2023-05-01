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
        // echo 'show() from UserController.';
        // return view('user.input-excel-file');
        return view('excel.excel-table');
    }
    public function senfForm(Request $request)
    {
        $file = $request->file('image');
        // $file = $request->file('image')->store('images');
        // $file = $request->file('image')->store('images', 'public');
        dump($file->path());
    }
}

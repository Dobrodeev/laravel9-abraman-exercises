<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use App\Imports\PostsImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function export() 
    {
        return Excel::download(new PostsExport, 'posts.xlsx');
    }
    public function import() 
    {
        Excel::import(new PostsImport, 'post5.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function export() 
    {
        return Excel::download(new PostsExport, 'posts.xlsx');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticlesController extends Controller
{
        /**
     * Show the profile for a given user.
     */
    public function article(): View
    {
        return view('article');
    }

    public function store(Request $request)
    {
        $authorID = $request->input('authorID');
        $title = $request->input('title');
        $content = $request->input('content');
        echo 'authorID: '.$authorID.'<br>';
        echo 'title: '.$title.'<br>';
        echo 'content: '.$content.'<br>';
        // Store the user...
 
        // return redirect('/users');
        // dd($request->all());
        // return $content;
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Article;


class ArticlesController extends Controller
{
        /**
     * Show the profile for a given user.
     */
    public function article(): View
    {
        return view('article');
    }

    // public function store(Request $request)
    // {
    //     $authorID = $request->input('authorID');
    //     $title = $request->input('title');
    //     $content = $request->input('content');
    //     echo 'authorID: '.$authorID.'<br>';
    //     echo 'title: '.$title.'<br>';
    //     echo 'content: '.$content.'<br>';
    //     // Store the user...
 
    //     // return redirect('/users');
    //     // dd($request->all());
    //     // return $content;
    // }

    /**
     * Store a new flight in the database.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
 
        $article = new Article;
 
        $article->author_id = $request->input('author_id');
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        echo $article;
 
        // $article->save();
 
        // return redirect('article');
    }
    
}

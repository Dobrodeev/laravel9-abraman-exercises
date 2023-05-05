<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(): View
    {
        return view('photo.index'/*, ['photo' => $photo]*/);
    }

    public function upload(Request $request)
    {        
        $path = $request->photo->store('photos');
        
        return redirect('/')->with('success', 'All good!');
    }

}

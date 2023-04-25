<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function index(Request $request) //: View
    {
        return view('gift-response');
    }
    public function show() //: View
    {
        return view('gift-form');
    }
}

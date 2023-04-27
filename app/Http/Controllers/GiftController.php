<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function index(Request $request)
    {
        return view('gift-response');
    }
    public function show()
    {
        return view('gift-form');
    }
}

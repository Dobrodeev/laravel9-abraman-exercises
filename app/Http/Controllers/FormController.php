<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormOverview;

class FormController extends Controller
{
    public function show()
    {
        return view('form');
    }
    
    public function store(Request $request)
    {
        $name = $request->input('name1');
        $email = $request->input('exampleInputEmail1');
        $password = $request->input('exampleInputPassword1');
        $check = $request->input('exampleCheck1', 'off');
        
        FormOverview::insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'check' => $check,
        ]);
        
        echo 'Name: '.$name; echo '<br/>';
        echo 'Email: '.$email; echo '<br/>';
        echo 'Password: '.$password; echo '<br/>';
        echo 'Check: '.$check; echo '<br/>';
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function import() 
    {
        Excel::import(new UsersImport, 'users.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function returnFunc()
    {
        return 1;
    }
    
    public function returnID($id) 
    {
        return $id;
    }

    public function noID() 
    {
        echo 'Користувач не зареєстрований';
    }

    public function form() 
    {
        return view('article');
    }

    public function formConfirm() 
    {
        echo 'Форму прийнято';
    }
}

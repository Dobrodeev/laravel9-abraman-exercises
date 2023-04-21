<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(): View
    {
        $tasks = DB::table('tasks')->get();
        // dump($tasks);
        return view('task.index', ['tasks' => $tasks]);
    }
}

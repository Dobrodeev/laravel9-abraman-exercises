<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(): View
    {
        $task = Task::all();
        
        return view('task.index', ['tasks' => $task]);
    }
}

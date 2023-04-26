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
        // $tasks = DB::table('tasks')->get();
        // dump($tasks);
        // foreach (Task::all() as $task) {
        //     echo $task->name. ': '. $task->counter. '<br>';
        // }
        $task = Task::all();
        
        return view('task.index', ['tasks' => $task]);
    }
}

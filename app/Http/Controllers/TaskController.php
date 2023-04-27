<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Log;

class TaskController extends Controller
{
    public function update(int $id)
    {
        $task = Task::where('id', $id)->first();
        ++$task->counter;
        $task->save();
        
        Log::create(['task_id' => $id, 'status' => 0]);
        
        return redirect('/tasks');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TaskLog;

class TaskLogController extends Controller
{
    // бере перший запис зі status = 0 і встановлює status = 1
    public function update()
    {
        $task_log = TaskLog::where('status', 0)->first();
        $task_log->status = 1;
        $task_log->save();
        
        return 'Оновлено запис за id = '.$task_log->id;
    }
}

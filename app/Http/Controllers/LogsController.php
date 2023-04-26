<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Log;

use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index(): View
    {
        $tasks_done = Log::where('status', 'done')->get();
        $tasks_queued = Log::where('status', 'queued')->get();

        return view('log.index', ['tasks_done' => $tasks_done, 'tasks_queued' => $tasks_queued]);
    }

}

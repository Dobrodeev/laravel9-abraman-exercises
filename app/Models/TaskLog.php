<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskLog extends Model
{
    use HasFactory;
    
    protected $fillable = ['task_id', 'status'];
    
    public function getQueuedRecords()
    {
        return TaskLog::where('status', 0);
    }
    
    public function getDoneRecords()
    {
        return TaskLog::where('status', 1);
    }
}

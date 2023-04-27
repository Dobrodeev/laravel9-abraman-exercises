<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskLog extends Model
{
    use HasFactory;
    
    protected $fillable = ['task_id', 'status'];
    // У таблиці немає поля updated_at, тож воно неоновлюватиметься
    const UPDATED_AT = null;
}

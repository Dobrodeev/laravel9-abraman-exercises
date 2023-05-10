<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wheel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'article',
        'brand',
        'design',
        'url',
        
        'b',
        'd',
        'z',
        'pcd',
        'et',
        'dia',
        
        'price_whole',
        'price',
        'quntity',
        'origin',
        'color',
        'weight'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'id',
        'author_id',
        // 'category_id',
        'title',
        // 'seo_title',
        'exerpt',
        'body',
        'image',
        'slug',
    ];

}

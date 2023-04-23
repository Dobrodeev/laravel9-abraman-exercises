<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;

class PostsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Post([
            // 'id'     => $row[0],
            'author_id' => $row[1],
            // 'category_id'    => $row[2], 
            'title' => $row[3],
            // 'seo_title'    => $row[4], 
            'excerpt' => $row[5],
            'body' => $row[6],
            'image' => $row[7],
            'slug' => $row[8],
        ]);
    }
}
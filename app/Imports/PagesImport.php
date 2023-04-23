<?php

namespace App\Imports;

use App\Models\Page;
use Maatwebsite\Excel\Concerns\ToModel;

class PagesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Page([
            'author_id' => $row[1],
            'title' => $row[2],
            'excerpt' => $row[3],
            'body' => $row[4],
            'image' => $row[5],
            'slug' => $row[6],
            'meta_description' => $row[7],
        ]);
    }
}
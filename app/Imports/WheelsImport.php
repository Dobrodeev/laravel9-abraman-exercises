<?php

namespace App\Imports;

use App\Models\Wheel;
use Maatwebsite\Excel\Concerns\ToModel;

class WheelsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Wheel([
            'article' => $row[0] !== null? $row[0] : 'none',
            'brand' => $row[1] !== null? $row[1] : 'none',
            'design' => $row[2] !== null? $row[2] : 'none',
            'url' => $row[3] !== null? $row[3] : 'none',
            
            'b' => $row[4] !== null? $row[4] : 'none',
            'd' => $row[5] !== null? (float)$row[5] : (float)-1.0,
            'z' => $row[6] !== null? (float)$row[6] : (float)-1.0,
            'pcd' => $row[7] !== null? (float)$row[7] : (float)-1.0,
            'et' => $row[8] !== null? (float)$row[8] : (float)-1.0,
            'dia' => $row[9] !== null? (float)$row[9] : (float)-1.0,
            
            'price_whole' => $row[10] !== null? (integer)$row[10] : -1,
            'price' => $row[11] !== null? (integer)$row[11] : -1,
            'quntity' => $row[12] !== null? $row[12] : 'none',
            'origin' => $row[13] !== null? $row[13] : 'none',
            'color' => $row[14] !== null? $row[14] : 'none',
            'weight' => $row[15] !== null? $row[15] : 'none'
        ]);
    }
}

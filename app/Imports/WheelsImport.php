<?php

namespace App\Imports;

use App\Models\Wheel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class WheelsImport implements ToModel, WithMultipleSheets
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function sheets(): array
    {
        return [
            'steelWheels' => new FirstSheetImport(),
            // 'cargoWheels' => new SecondSheetImport(),
            // 'alloyWheels' => new ThirdSheetImport(),
            // 'kits' => new FourthSheetImport(),
        ];
    }
    public function model(array $row)
    {
        return new Wheel([
            'mark'     => $row[0],
            'model'    => $row[1], 
            'size_J'    => $row[2], 
            'size_x'    => $row[3], 
            'size_num'    => $row[4], 
            'mounting_holes'    => $row[5], 
            'PCD'    => $row[6], 
            'DIA'    => $row[7], 
            'ET/HM'    => $row[8], 
            'colour'    => $row[9], 
            'weight'    => $row[10], 
            'origin'    => $row[11], 
            'code'    => $row[12], 
            'price'    => $row[13], 
            'price_plus10'    => $row[14], 
            'price_plus100'    => $row[15], 
            'availability'    => $row[16], 
            'newness'    => $row[18], 
        ]);
    }
}

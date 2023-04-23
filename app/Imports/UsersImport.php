<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
// use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new User([
           'role_id'     => $row[1],
           'name'    => $row[2], 
           'email' => $row[3],
           'avatar' => $row[4],
           'password'=> $row[5],
        ]);
    }
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
}

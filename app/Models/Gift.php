<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model {
    protected $fillable = [
        'full_name',
        'birth_date',
        'person_sex',
        'is_will_greet',
        'is_go_to_cinema',
        'is_go_to_cafe',
        'is_go_to_coffeehouse',
        'is_go_to_pizzeria',
        'is_go_to_flat',
        'is_go_to_cottage',
        'is_go_at_picnic',
        'is_go_at_hunting',
        'is_go_at_fishcatch'
    ];
}
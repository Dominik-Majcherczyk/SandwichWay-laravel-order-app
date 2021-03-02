<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sandwich extends Model
{
    protected $table = 'sandwiches';
    protected $casts = [
        'toppings' => 'array'
    ];
}

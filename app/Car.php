<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'producer', 'number_of_doors'
    ];

    public static function getCars() 
    {
        return self::all();
    }

}

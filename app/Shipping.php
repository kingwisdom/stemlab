<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public static function findByState($state){
        return self::where('state', $state)->first();
    }

}

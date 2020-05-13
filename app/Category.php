<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'st_categories';

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}

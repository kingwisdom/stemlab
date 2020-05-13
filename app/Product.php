<?php

namespace App;

use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use SearchableTrait;

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 5,
            'products.details' => 5,
        ],
        'joins' => [
            'categories' => ['categories.id','products.category_id'],
        ],
    ];


    public function formatAmount(){
        return money_format("%i", $this->price / 100);
    }

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable = [ 'guardian_name','phone','email','child_name','age','learning_period', 'address' ];
}

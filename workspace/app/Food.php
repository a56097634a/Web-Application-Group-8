<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    public $primaryKey  = 'foodId';
    protected $hidden = ['foodId', 'created_at', 'updated_at'];
}

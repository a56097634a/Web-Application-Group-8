<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    //
    public $primaryKey  = 'goalId';
    protected $hidden = ['goalId', 'created_at', 'updated_at'];
    public function plan(){
        return $this->belongsTo('App\Plan', 'goalId', 'goalId');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DietProgram extends Model
{
    //
    public $primaryKey  = 'DPId';
    protected $hidden = ['DPId', 'trainerId', 'created_at', 'updated_at'];
    public function plan(){
        return $this->belongsTo('App\Plan', 'DPId', 'DPId');
    }
    
    public function trainer(){
        return $this->belongsTo('App\Trainer', 'trainerId', 'trainerId');
    }
}

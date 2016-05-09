<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    //
    public $primaryKey  = 'gymId';
    protected $hidden = ['gymId', 'created_at', 'updated_at'];
    public function trainers(){
        return $this->hasMany('App\Trainers', 'gymId', 'gymId');
    }
    
    public function workoutPrograms(){
        return $this->hasMany('App\Trainers', 'gymId', 'gymId');
    }
}

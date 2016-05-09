<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //
    public $primaryKey  = 'trainerId';
    protected $hidden = ['trainerId', 'gymId','created_at', 'updated_at'];
    protected $fillable = array('trainerId');
    
    public function user(){
        return $this->belongsTo('App\User', 'userId', 'trainerId');
    }
    
    public function trainees(){
        return $this->hasMany('App\TraineeDetail', 'trainerId', 'trainerId');
    }
    
    public function gyms(){
        return $this->belongsTo('App\Gym', 'gymId', 'gymId');
    }
    
    public function plans(){
        return $this->hasMany('App\Plan', 'trainerId', 'trainerId');
    }
    
    public function workoutPrograms(){
        return $this->hasMany('App\WorkoutProgram', 'trainerId', 'trainerId');
    }
    
    public function dietPrograms(){
        return $this->hasMany('App\DietProgram', 'trainerId', 'trainerId');
    }
}

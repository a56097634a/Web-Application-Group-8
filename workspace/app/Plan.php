<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    public $primaryKey  = 'planId';
    protected $hidden = ['planId','traineeId', 'lastName','trainerId', 'created_at', 'updated_at'];
    public function trainee(){
        return $this->belongsTo('App\TraineeDetail', 'traineeId', 'traineeId');
    }
    
    public function trainer(){
        return $this->belongsTo('App\Trainer', 'trainerId', 'trainerId');
    }
    
    public function workoutProgram(){
        return $this->hasOne('App\WorkoutProgram', 'WPId', 'WPId');
    }
    
    public function dietProgram(){
        return $this->hasOne('App\DietProgram', 'DPId', 'DPId');
    }
    
    public function goal(){
        return $this->hasOne('App\Goal', 'goalId', 'goalId');
    }
}

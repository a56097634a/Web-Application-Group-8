<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkoutProgram extends Model
{
    //
    public $primaryKey  = 'WPId';
    protected $hidden = ['WPId', 'trainerId','created_at', 'updated_at'];
    public function plan(){
        return $this->belongsTo('App\Plan', 'WPId', 'WPId');
    }
    
    public function workouts(){
        return $this->belongsToMany('App\Workout', 'programs_workouts', 'WPId', 'workoutId');
    }
    
    public function trainer(){
        return $this->belongsTo('App\Trainer', 'trainerId', 'trainerId');
    }
}

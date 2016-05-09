<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    //
    public $primaryKey  = 'workoutId';
    protected $hidden = ['workoutId','created_at', 'updated_at'];
    // public function workoutPrograms(){
    //     return $this->belongsToMany('App\WorkoutProgram', 'programs_workouts', 'WPId', 'workoutId');
    // }
    
}

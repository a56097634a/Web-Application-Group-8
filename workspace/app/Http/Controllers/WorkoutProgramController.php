<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\WorkoutProgram;
use App\Workout;
use Auth;
use Redirect;

class WorkoutProgramController extends Controller
{
    //
    public function workoutProgramList(){
        $id = Auth::id();
        $WPs = WorkoutProgram::where('trainerId', $id)->get();
        return view('workoutProgram.list', ['WPs' => $WPs]);
    }
    public function showWorkoutProgram($WPId){
        $WP = WorkoutProgram::where('WPId', $WPId)->first();
        $workouts = $WP->workouts()->get();
        return view('workoutProgram.display', ['WP' => $WP, 'workouts' => $workouts]);
    }
    
    public function modifyWorkoutProgram($WPId){
        $options = Workout::all();
        if($WPId != -1){
            $WP = WorkoutProgram::where('WPId', $WPId)->first();
            $workouts = $WP->workouts()->get();
        }
        else{
            $workouts = array();
            $WP = null;
        }
         return view('workoutProgram.modify', ['WP' => $WP, 'workouts' => $workouts, 'options' => $options]);  
    }
    
    public function storeWorkoutProgram(Request $request, $redirect){
        $WPId = $request->input('WPId');
        if($WPId == -1){
            $WP = new WorkoutProgram;
        }
        else{
            $WP = WorkoutProgram::where('WPId', $WPId)->first();
        }
        
        $WP->WPName = $request->input('WPName');
        $WP->WPImpact = $request->input('WPImpact');
        $WP->WPDescritption = $request->input('WPDescription');
        $WP->trainerId = Auth::id();
        
        $WP->save();
        $workouts = $request->input('workouts');
        $WP->workouts()->sync($workouts);
        
        $WP->save();
        
        if($redirect=="plan"){
            return Redirect::back()->withMessage('New workout Program Added');
        }
        else{
            return Redirect::to('/workoutProgram/list')->withMessage('New workout Program Added');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TraineeDetail;
use App\Plan;
use App\WorkoutProgram;
use App\DietProgram;
use App\Trainer;
use Auth;
use App\Food;
use App\Workout;
use App\User;
use Redirect;
use App\Goal;
use App\Gym;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $traineeDetails = TraineeDetail::where('traineeId', $id)->first();
        
        if($traineeDetails->hasPlan){
            $plan = Plan::where('traineeId', $id)->first();
            $trainer = Trainer::where('trainerId' , $traineeDetails->trainerId)->first();
            $trainer1 = User::where('id', $traineeDetails->trainerId)->first();
            $dietProgram = DietProgram::where('DPId', $plan->DPId)->first();
            $workoutProgram = WorkoutProgram::where('WPId', $plan->WPId)->first();
            $goal = Goal::where('goalId', $plan->goalId)->first();
            $gym = Gym::where('gymId', $trainer->gymId)->first();
        }
        else if($traineeDetails->hasTrainer){
            $plan = NULL;
            $trainer = Trainer::where('trainerId' , $traineeDetails->trainerId)->first();
            $trainer1 = User::where('id', $traineeDetails->trainerId)->first();
            $dietProgram = NULL;
            $workoutProgram = NULL;
            $goal = NULL;
            $gym = NULL;
        }
        else{
            $plan = NULL;
            $trainer = NULL;
            $trainer1 = NULL;
            $dietProgram = NULL;
            $workoutProgram = NULL;
            $goal = NULL;
            $gym = NULL;
        }
        //pick the random in js
        $foods=Food::all();
        $workouts = Workout::all();
        $result = array(
         "traineeDetails" => $traineeDetails,
         "user" => $user,
         "plan" => $plan,
         "trainer" => $trainer,
         "trainer1" => $trainer1,
         "dietProgram" => $dietProgram,
         "workoutProgram" => $workoutProgram,
         "foods" => $foods,
         "workouts" => $workouts,
         "goal" => $goal,
         "gym" => $gym,
        );
        return view('dashboard.display', $result);
    }
    
    public function chooseTrainer(){
        $id = Auth::id();
        $trainers = Trainer::all();
        $users = User::where('isTrainer', True)->get();
        $trainee = TraineeDetail::where('traineeId', $id)->first();
        return view('dashboard.list', ['trainers' => $trainers, 'trainee' => $trainee, 'users' => $users]);
    }
    
    public function TalkWithTrainer()
    {
        //$id = Auth::id();
        return view('dashboard.chatWithTrainer');
        //, ['trainer' => Trainer::where('trainerId', $trainerId)->first(), 'trainee' => TraineeDetail::where('traineeId', $id)->first()]);
    }
    
    public function selectTrainer($trainerId){
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $trainee = TraineeDetail::where('traineeId', $id)->first();
        $trainee->trainerId = $trainerId;
        $trainee->hasTrainer = True;
        $trainee->save();
        
        return Redirect::to('/dashboard');
    }
}

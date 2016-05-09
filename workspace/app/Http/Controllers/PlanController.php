<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Plan;
use App\Trainer;
use App\DietProgram;
use App\WorkoutProgram;
use App\Goal;
use App\Gym;
use App\TraineeDetail;
use Auth;
use DB;
use App\User;
use App\Workout;
use Redirect;

class PlanController extends Controller
{
    //
    
    // public function showPlan($planId){
    //     $plan = Plan::findOrFail($planId);
    //     $workoutProgram = WorkoutProgram::where('WPId', $plan->WPId);
    //     $dietProgram = DietProgram::where('DPId', $plan->DPId);
    //     $trainer = Trainer::where('trainerId', $plan->trainerId);
    //     $goal = Goal::where('goalId', $plan->goalId);
    //     $result = array(
    //      "plan" => $plan,
    //      "trainer" => $trainer,
    //      "dietProgram" =>$dietProgram,
    //      "workoutProgram" => $workoutProgram,
    //      "gym" => $gym,
    //      "goal" => $goal,
    //     );
    //     return view('plan', ['plan' => result])
    // }
    
    public function modifyPlan($traineeId){
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $trainee = TraineeDetail::where('traineeId', $traineeId)->first();
        $user1 = User::where('id', $traineeId)->first();
        if($user->isTrainer){
            $trainer = Trainer::where('trainerId', $id)->first();
            $gym = Gym::where('gymId', $trainer->gymId)->first();
            $options = array(
                    "dietPrograms" => DietProgram::where('trainerId', $id)->get(),
                    "workoutPrograms" => WorkoutProgram::where('trainerId', $id)->get(),
                    "workouts" => Workout::all(),
                    //goal is not pickable, it should be modified directly
            );
            
            if($trainee->hasPlan){
                $plan = Plan::where('traineeId', $trainee->traineeId)->first();
                $workoutProgram = WorkoutProgram::where('WPId', $plan->WPId)->first();
                $dietProgram = DietProgram::where('DPId', $plan->DPId)->first();
                $goal = Goal::where('goalId', $plan->goalId)->first();
                
                
            }
            else{
                $plan = new Plan;
                $plan->trainerId = $trainer->trainerId;
                $plan->traineeId = $trainee->traineeId;
                
                $dietProgram=NULL;
                $workoutProgram=NULL;
                $goal=NULL;
            }
            $result = array(
                    "plan" => $plan,
                    "dietProgram" =>$dietProgram,
                    "workoutProgram" => $workoutProgram,
                    "gym" => $gym,
                    "goal" => $goal,
                    'options' => $options, 'user' =>$user, 'user1' => $user1, 'trainer' => $trainer,'trainee' => $trainee
            );
            return view('plan.modify', $result);
        }
        else{
            //error, trainee actually can not get to this page
        }
    }
    
    public function storePlan(Request $request){
        //store the goal first
        
        $trainee = TraineeDetail::where('traineeId', $request->input('traineeId'))->first();
        $trainee->hasPlan = True;
        
        $plan = Plan::where('planId', $request->input('planId'))->first();
        if(!$plan){
            $plan = new Plan;
        }
        $plan->trainerId = $request->input('trainerId');
        $plan->traineeId = $request->input('traineeId');
        
        $goal = new Goal;
        $goal->goalName = $request->input('goalName');
        $goal->goalImpact = $request->input('goalImpact');
        $goal->goalDescritption = $request->input('goalDescription');
        $goal->goalProgress = $request->input('goalProgress');
        $goal->goalLength = $request->input('goalLength');
        
        $goal->save();
        
        $plan->goalId = $goal->goalId;
        $plan->planName = $request->input('planName');
        $plan->planImpact = $request->input('planImpact');
        $plan->planDescritption = $request->input('planDescription');
        $plan->DPId = $request->input('DPId');
        $plan->WPId = $request->input('WPId');
        
        $plan->save();
        $trainee->save();
        return Redirect::to('/trainer/traineeList');
    }

}

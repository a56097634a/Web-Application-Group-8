<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Trainer;
use App\Gym;
use App\TraineeDetail;
use App\User;
use Auth;
use Redirect;
use DB;

class TrainerController extends Controller
{
    //
    public function showProfile(){
        $trainerId = Auth::id();
        $trainer = Trainer::where('trainerId', $trainerId)->first();
        $user = User::where('id', $trainerId)->first();
        $gym = Gym::where('gymId', $trainer->gymId)->first();
        return view('trainer.profile', ['trainer' => $trainer, 'user' => $user, 'gym' => $gym]);
    }
    
    public function modifyProfile(){
        $trainerId = Auth::id();
        $trainer = Trainer::where('trainerId', $trainerId)->first();
        $user = User::where('id', $trainerId)->first();
        $gym = Gym::where('gymId', $trainer->gymId)->first();
        $gyms = Gym::all();
        return view('trainer.modify', ['trainer' => $trainer, 'user' => $user,'gym' => $gym, 'gyms' => $gyms]);
    }

    public function traineeList(){
        $trainerId = Auth::id();
        $trainer = Trainer::where('trainerId', $trainerId)->first();
        $trainees = TraineeDetail::where('trainerId', $trainerId)->get();
        $users = User::where('isTrainer', False)->get();
        return view('trainer.traineeList', ['trainer' => $trainer, 'trainees' => $trainees, 'users' => $users]);
    }    

    public function store(Request $request){
        $trainerId = Auth::id();
        $trainer = Trainer::where('trainerId', $trainerId)->first();
        $user = User::where('id', $trainerId)->first();
        $user->contactNumber = $request->input('contactNumber');
        $user->save();
        
        $trainer->gender = $request->input('gender');
        $trainer->specialty = $request->input('speciality');
        $trainer->gymId = $request->input('gymId');
        $trainer->price= $request->input('price');
        $trainer->save();
        
        return Redirect::to('/trainer/profile');
    }
    
    public function TalkWithTrainee()
    {
        //$id = Auth::id();
        return view('trainer.chatWithTrainee');
        //, ['trainer' => Trainer::where('trainerId', $trainerId)->first(), 'trainee' => TraineeDetail::where('traineeId', $id)->first()]);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TraineeDetail;
use App\User;
use Auth;
use Redirect;
class TraineeDetailsController extends Controller
{

    public function modifyProfile()
    {
        $id = Auth::id();
        return view('trainee.modify', ['trainee' => TraineeDetail::where('traineeId', $id)->first(), 'user' => User::where('id', $id)->first()]);
    }
    
    public function store(Request $request){
        $user = User::where('id', Auth::id())->first();
        $trainee = TraineeDetail::where('traineeId', Auth::id())->first();
        $user->contactNumber = $request->input('contactNumber');
        $user->save();
        
        $trainee->DOB = $request->input('dob');
        $trainee->gender = $request->input('gender');
        $trainee->bmd = $request->input('bmd');
        $trainee->chestMeasure = $request->input('chestMeasure');
        $trainee->weistMeasure = $request->input('waistMeasure');
        $trainee->hipMeasure = $request->input('hipMeasure');
        $trainee->bodyFatPercent = $request->input('bodyFatPercent');
        $trainee->bodyMusclePercent = $request->input('bodyMusclePercent');
        $trainee->injuryDetail = $request->input('injuryDetail');
        $trainee->disabilityDetail = $request->input('disabilityDetail');
        $trainee->save(['traineeId' => Auth::id()]);
        
        return Redirect::to('/dashboard');
    }
}

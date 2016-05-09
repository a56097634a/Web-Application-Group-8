<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DietProgram;
use Auth;
use Redirect;
class DietProgramController extends Controller
{
    //
    public function dietProgramList(){
        $id = Auth::id();
        $DPs = DietProgram::where('trainerId', $id)->get();
        return view('dietProgram.list', ['DPs' => $DPs]);
    }
    public function showDietProgram($DPId){
        $DP = DietProgram::where('DPId', $DPId)->first();
        return view('dietProgram.display', ['DP' => $DP]);
    }
    
    public function modifyDietProgram($DPId){
        if($DPId != -1){
            $DP = DietProgram::where('DPId', $DPId)->first();
        }
        else{
            $DP = null;
        }
        return view('dietProgram.modify', ['DP' => $DP]);
           
    }
    
    public function store(Request $request, $redirect){
        $DPId = $request->input('DPId');
        if($DPId == -1){
            $DP = new DietProgram;
        }
        else{
            $DP = DietProgram::where('DPId', $DPId)->first();
        }
        
        $DP->DPName = $request->input('DPName');
        $DP->DPImpact = $request->input('DPImpact');
        $DP->DPDescritption = $request->input('DPDescription');
        $DP->DPCalAvg = $request->input('DPCalAvg');
        $DP->DPFiberAvg = $request->input('DPFiberAvg');
        $DP->DPProteinAvg = $request->input('DPProteinAvg');
        $DP->trainerId = Auth::id();
        
        $DP->save();
        if($redirect=="plan"){
            return Redirect::back()->withMessage('New Diet Program Added');
        }
        else{
            return Redirect::to('/dietProgram/list')->withMessage('New Diet Program Added');
        }
    }
}

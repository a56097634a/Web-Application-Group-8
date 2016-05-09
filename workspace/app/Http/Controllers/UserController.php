<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    //
    public function showUser($id){
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    
    public function modifyUser($id){
        return view('user.modify', ['user' => User::findOrFail($id)]);
    }
    
    public function storeUser(Request $request){
        
    }
}

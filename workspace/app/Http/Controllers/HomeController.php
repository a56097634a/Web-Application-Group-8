<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function home()
    {
        if(Auth::guest())
        {
            return view('welcome');
        }
        else{
            $user = User::where('id', Auth::id())->first();
            if($user->isTrainer){
                return Redirect::to('/trainer/profile');
            }
            else{
                return Redirect::to('/dashboard');
            }
        }
    }
}

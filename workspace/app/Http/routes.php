<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::auth();

Route::get('/trainer/profile', 'TrainerController@showProfile');
Route::get('/trainer/modify', 'TrainerController@modifyProfile');
Route::post('/trainer/store', 'TrainerController@store');
Route::get('/trainer/talkWithTrainee', 'TrainerController@talkWithTrainee');

Route::get('/dashboard', 'DashboardController@showDashboard');
Route::get('/dashboard/chooseTrainer', 'DashboardController@chooseTrainer');
Route::get('/dashboard/talkWithTrainer/', 'DashboardController@talkWithTrainer');
Route::get('/dashboard/selectTrainer/{trainerId}', 'DashboardController@selectTrainer');

Route::get('/plan/modify/{traineeId}', 'PlanController@modifyPlan');
Route::post('/plan/store', 'PlanController@storePlan');

Route::get('/dietProgram/list', 'DietProgramController@dietProgramList');
Route::get('/dietProgram/display/{DPId}', 'DietProgramController@showDietProgram');
Route::get('/dietProgram/modify/{DPId}', 'DietProgramController@modifyDietProgram');
Route::post('/dietProgram/store/{redirect}', 'DietProgramController@store');

Route::get('/workoutProgram/list', 'WorkoutProgramController@workoutProgramList');
Route::get('/workoutProgram/display/{WPId}', 'WorkoutProgramController@showWorkoutProgram');
Route::get('/workoutProgram/modify/{WPId?}', 'WorkoutProgramController@modifyWorkoutProgram');
Route::post('/workoutProgram/store/{redirect}', 'WorkoutProgramController@storeWorkoutProgram');

Route::get('/trainee/modify', 'TraineeDetailsController@modifyProfile');
Route::get('/trainer/traineeList', 'TrainerController@traineeList');
Route::post('/trainee/store', 'TraineeDetailsController@store');

Route::get('/chat', 'DashboardController@chat');

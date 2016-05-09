@extends('layouts.app')

@section('content')

<div data-ix="workoutinteraction" class="modal-wrapper-diet">
    <div class="workoutprogramwrapper">
      <h2>Diet Program</h2>
      <div class="w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="POST" action="/dietProgram/store/plan">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <input type="hidden" name="DPId" value="{{-1}}">
          <label for="dietProgramName" class="field-label">Name:</label>
          <input id="dietProgramName" type="text" placeholder="Enter diet program name" name="DPName" required="required" data-name="dietProgramName" class="w-input text-field">
          <label for="dietProgramImpact" class="field-label">Impact:</label>
          <input id="dietProgramImpact" type="text" placeholder="Enter diet program impact" name="DPImpact" required="required" data-name="DPImpact" class="w-input text-field">
          <label for="dietProgramDescription" class="field-label">Description:</label>
          <input id="dietProgramDescription" type="text" placeholder="Enter diet program description" name="DPDescription" data-name="DPDescription" class="w-input text-field">
          <label for="dietProgramLength" class="field-label">Diet Program Length:</label>
          <input id="dietProgramLength" type="text" placeholder="Enter diet program length" name="DPLength" required="required" data-name="DPLength" class="w-input text-field">
          <label for="avgCal" class="field-label">Average Calories:</label>
          <input id="avgCal" type="text" placeholder="Enter average calories" name="DPCalAvg" data-name="DPCalAvg" class="w-input text-field">
          <label for="avgProtein" class="field-label">Average Protein Content:</label>
          <input id="avgProtein" type="text" placeholder="Enter average protein content" name="DPProteinAvg" data-name="DPProteinAvg" class="w-input text-field">
          <label for="avgFiber" class="field-label">Average Fiber Content:</label>
          <input id="avgFiber" type="text" placeholder="Enter average fiber content" name="DPFiberAvg" data-name="DPFiberAvg" class="w-input text-field">
          <input type="submit" value="Submit" data-wait="Please wait..." class="w-button submit-button">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div><a href="#" data-ix="close-diet-interaction" class="link-close">Close X</a>
    </div>
  </div>
  <div data-ix="workoutinteraction" class="modal-wrapper">
    <div class="workoutprogramwrapper">
      <h2>Workout Program</h2>
      <div class="w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="POST" action="/workoutProgram/store/plan">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <input type="hidden" name="WPId" value="{{-1}}">
          <label for="WorkoutProgramName" class="field-label">Workout Program Name:</label>
          <input id="WorkoutProgramName" type="text" placeholder="Enter Program Name" name="WPName" data-name="WPName" required="required" class="w-input text-field">
          <label for="Impact" class="field-label">Impact:</label>
          <input id="Impact" type="text" placeholder="Enter workout program impact" name="WPImpact" data-name="WPImpact" required="required" class="w-input text-field">
          <label for="WPDescription" class="field-label">Description:</label>
          <input id="WPDescription" type="text" placeholder="Enter workout program description" name="WPDescription" data-name="WPDescription" class="w-input text-field">
          <label for="Workouts" class="field-label">Select Workouts:</label>
          <div class="w-container containerscroll">
            @foreach($options['workouts'] as $workout)
            <div class="w-checkbox checkbox-field">
              <input id="checkbox" type="checkbox" value="{{$workout->workoutId}}" name="workouts[]" data-name="workouts[]" class="w-checkbox-input">
              <label for="checkbox" class="w-form-label">{{$workout->workoutName}}</label>
            </div>
            @endforeach
          </div>
          <input type="submit" value="Submit" data-wait="Please wait..." class="w-button submit-button">
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div><a href="#" data-ix="closeworkout" class="link-close">Close X</a>
    </div>
  </div>

<div class="w-container container">
    <h1>UPDATE PLAN</h1>
  </div>
  <div class="w-container">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" class="form" method="POST" action="/plan/store">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <input type="hidden" name="planId" @if($plan) value="{{$plan->planId}}" @endif>
        <input type="hidden" name="traineeId" value="{{$trainee->traineeId}}">
        <input type="hidden" name="trainerId" value="{{$trainer->trainerId}}">
        <label for="field-2" class="field-label">Gym</label>
        <label for="field-2" class="fieldinsideform" name="gym" value="{{$gym->gymId}}">{{$gym->gymName}}</label>
        <label for="field-2" class="field-label">Trainer</label>
        <label for="field-2" class="fieldinsideform" name="trainer1" value="{{$trainer->trainerId}}">{{$user->firstName}} {{$user->lastName}}</label>
        <label for="field-2" class="field-label">Trianee</label>
        <label for="field-2" class="fieldinsideform" name="trainee1" value="{{$trainee->traineeId}}">{{$user1->firstName}} {{$user1->lastName}}</label>
        <label for="planName" class="field-label">Plan name</label>
        <input id="planName" type="text" placeholder="Enter your plan" name="planName" data-name="planName" required="required" value="{{$plan->planName}}" class="w-input text-field">
        <label for="PlanImpact" class="field-label">Plan Impact</label>
        <input id="PlanImpact" type="text" placeholder="Enter plan impact" name="planImpact" data-name="planImpact" required="required" value="{{$plan->planImpact}}" class="w-input text-field">
        <label for="planDescription" class="field-label">Plan Description</label>
        <input id="planDescription" type="text" placeholder="Enter plan description" name="planDescription" data-name="planDescription" value="{{$plan->planDescritption}}" class="w-input text-field">
        <label for="goal" class="field-label">Goal</label>
        <input id="goal" type="text" placeholder="Enter goal" name="goalName" data-name="goalName" required="required" @if($goal) value="{{$goal->goalName}}" @endif class="w-input text-field">
        <label for="GoalImpact" class="field-label">Goal Impact</label>
        <input id="GoalImpact" type="text" placeholder="Enter goal impact" name="goalImpact" data-name="goalImpact" required="required" @if($goal) value="{{$goal->goalImpact}}" @endif class="w-input text-field">
        <label for="GoalProgress" class="field-label">Goal Progress</label>
        <input id="GoalProgress" type="text" placeholder="Enter goal progress" name="goalProgress" data-name="goalProgress" required="required" @if($goal) value="{{$goal->goalProgress}}" @endif class="w-input text-field">
        <label for="GoalDescription" class="field-label">Goal Description</label>
        <input id="GoalDescription" type="text" placeholder="Enter goal description" name="goalDescription" data-name="goalDescription" @if($goal) value="{{$goal->goalDescritption}}" @endif required="required" class="w-input text-field">
        <label for="GoalLength" class="field-label">Goal Length</label>
        <input id="GoalLength" type="text" placeholder="Enter goal length" name="goalLength" data-name="goalLength" required="required" @if($goal) value="{{$goal->goalLength}}" @endif class="w-input text-field">
        <label for="workoutProgram" class="field-label">Workout Program</label>
        <select id="workoutProgram" name="WPId" class="w-select select-field" required="required"  @if($workoutProgram) value="{{$workoutProgram->WPId}}" @endif>
          @foreach($options['workoutPrograms'] as $WP)
          <option value="{{$WP->WPId}}" @if($workoutProgram && $workoutProgram->WPId == $WP->WPId) selected @endif>{{$WP->WPName}}</option>
          @endforeach
        </select>
        <a href="#" data-ix="new-interaction" class="text-link">Add Workout program</a>
        <label for="dietProgram" class="field-label">Diet Program</label>
        <select id="dietProgram" name="DPId" data-name="dietProgram" class="w-select select-field" required="required">
          @foreach($options['dietPrograms'] as $DP)
          <option value="{{$DP->DPId}}"  @if($dietProgram && $dietProgram->DPId == $DP->DPId) selected @endif>{{$DP->DPName}}</option>
          @endforeach
        </select>
        <a href="#" data-ix="adddietinteraction" class="text-link">Add Diet Program</a>
        <input type="submit" value="Submit" data-wait="Please wait..." class="w-button link">
      </form>
      <div class="w-form-done">
        <p>Thank you! Your submission has been received!</p>
      </div>
      <div class="w-form-fail">
        <p>Oops! Something went wrong while submitting the form</p>
      </div>
    </div>
  </div>

@endsection
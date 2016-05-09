@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>WORKOUT PROGRAM</h1>
<div class="w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="POST" action="/workoutProgram/store/origin">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <input type="hidden" name="WPId" @if($WP) value="{{$WP->WPId}}" @else value="{{-1}}" @endif>
          <label for="WorkoutProgramName" class="field-label">Workout Program Name:</label>
          <input id="WorkoutProgramName" type="text" placeholder="Enter Program Name" name="WPName" data-name="WPName" required="required" @if($WP) value="{{$WP->WPName}}" @endif class="w-input text-field">
          <label for="Impact" class="field-label">Impact:</label>
          <input id="Impact" type="text" placeholder="Enter workout program impact" name="WPImpact" data-name="WPImpact" required="required" @if($WP) value="{{$WP->WPImpact}}" @endif class="w-input text-field">
          <label for="WPDescription" class="field-label">Description:</label>
          <input id="WPDescription" type="text" placeholder="Enter workout program description" name="WPDescription" data-name="WPDescription" @if($WP) value="{{$WP->WPDescription}}" @endif class="w-input text-field">
          <label for="Workouts" class="field-label">Select Workouts:</label>
          <div class="w-container containerscroll">
            @foreach($options as $workout)
            <?php $flag = False; foreach($workouts as $w) {if($w->workoutId == $workout->workoutId) {$flag = True;}}?>
            <div class="w-checkbox checkbox-field">
              <input id="checkbox" type="checkbox" value="{{$workout->workoutId}}" name="workouts[]" data-name="workouts[]" @if($flag) checked @endif class="w-checkbox-input">
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
    </div>
</div>

@endsection
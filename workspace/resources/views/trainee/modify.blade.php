@extends('layouts.app')

@section('content')

  <div class="w-container container">
    <h1>TRAINEE PROFILE</h1>
  </div>
  <div class="w-container"><img width="298" src={{URL :: to('src/images/profilePicture.jpg')}} class="imageprofile">
  </div>
  <div class="w-container">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" class="form", method="POST", action="/trainee/store">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <label for="contactNumber" class="field-label">Contact Number</label>
        <input id="contactNumber" type="text" placeholder="Enter your contact number" name="contactNumber" data-name="contactNumber" required="required" value="{{$user->contactNumber}}" class="w-input text-field">
        <label for="dob" class="field-label">Date Of Birth</label>
        <input id="dob" type="text" placeholder="Enter your date of birth (mm/dd/yyyy)" name="dob" data-name="dob" required="required" value="{{$trainee->DOB}}" class="w-input text-field">
        <label for="gender" class="field-label">Gender</label>
        <select id="gender" name="gender" class="w-select select-field" value="{{$trainee->gender}}">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <label for="bmd" class="field-label">Bone Mass Density</label>
        <input id="bmd" type="text" placeholder="Enter bone mass density" name="bmd" data-name="bmd" required="required" value="{{$trainee->BMD}}"   class="w-input text-field">
        <label for="chestMeasure" class="field-label">Chest Measure</label>
        <input id="chestMeasure" type="text" placeholder="Enter chest mesure" name="chestMeasure" data-name="chestMeasure" required="required" value="{{$trainee->chestMeasure}}" class="w-input text-field">
        <label for="waistMeasure" class="field-label">Waist Measure</label>
        <input id="waistMeasure" type="text" placeholder="Enter waist measure" name="waistMeasure" data-name="waistMeasure" required="required" value="{{$trainee->weistMeasure}}" class="w-input text-field">
        <label for="hipMeasure" class="field-label">Hip Measure</label>
        <input id="hipMeasure" type="text" placeholder="Enter hip measure" name="hipMeasure" data-name="hipMeasure" required="required" value="{{$trainee->hipMeasure}}" class="w-input text-field">
        <label for="bodyFatPercent" class="field-label">Body Fat Percentage</label>
        <input id="bodyFatPercent" type="text" placeholder="Enter body fat percentage" name="bodyFatPercent" data-name="bodyFatPercent" required="required" value="{{$trainee->bodyFatPercent}}" class="w-input text-field">
        <label for="bodyMusclePercentage" class="field-label">Body Muscle Percentage</label>
        <input id="bodyMusclePercentage" type="text" placeholder="Enter body muscle percentage" name="bodyMusclePercent" data-name="bodyMusclePercent" required="required" value="{{$trainee->bodyMusclePercent}}" class="w-input text-field">
        <label for="injuryDetail" class="field-label">Injury Details ( If any )</label>
        <input id="injuryDetail" type="text" placeholder="Enter injury details" name="injuryDetail" data-name="injuryDetail" value="{{$trainee->injuryDetail}}"  class="w-input text-field">
        <label for="disabilityDetail" class="field-label">Disability Details( If any )</label>
        <input id="disabilityDetail" type="text" placeholder="Enter disability detail" name="disabilityDetail" data-name="disabilityDetail" value="{{$trainee->disabilityDetail}}" class="w-input text-field">
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
@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>TRAINER PROFILE</h1>
  </div>
  <div class="w-container"><img width="298" src={{URL :: to('src/images/profilePicture.jpg')}} class="imageprofile">
  </div>
  <div class="w-container">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" class="form" method="POST" action="/trainer/store">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <label for="contactNumber" class="field-label">Contact Number</label>
        <input id="contactNumber" type="text" placeholder="Enter your contact number" name="contactNumber" data-name="contactNumber" required="required" value="{{$user->contactNumber}}" class="w-input text-field">
        <label for="gender" class="field-label">Gender</label>
        <select id="gender" name="gender" class="w-select select-field" value="{{$trainer->gender}}">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <label for="speciality" class="field-label">Speciality</label>
        <input id="speciality" type="text" placeholder="Enter your speciality" name="speciality" data-name="speciality" required="required" value="{{$trainer->specialty}}" class="w-input text-field">
        <label for="price" class="field-label">Charge Per Month</label>
        <input id="price" type="text" placeholder="Enter charge per month" name="price" data-name="price" required="required" value="{{$trainer->price}}" class="w-input text-field">
        <label for="gym" class="field-label">Select Gym</label>
        <select id="gym" name="gymId" data-name="gymId" class="w-select select-field" required="required">
          @foreach($gyms as $g)
          <option value="{{$g->gymId}}" @if($gym && $gym->gymId == $g->gymId) selected @endif>{{$g->gymName}}</option>
          @endforeach
        </select>
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
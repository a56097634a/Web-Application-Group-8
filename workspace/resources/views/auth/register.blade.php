@extends('layouts.app')

@section('content')
<div class="w-container">
    <h1>Register</h1>
  </div>
  <div class="w-container container">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" method="POST" action="{{ url('/register') }}">
          {!! csrf_field() !!}
        <label for="firstName" class="field-label">First Name:</label>
        <input id="firstName" type="text" placeholder="Enter your first name" name="firstName" data-name="firstName" required="required" autofocus="autofocus" class="w-input text-field">
        <label for="lastName" class="field-label">Last Name:</label>
        <input id="lastName" type="text" placeholder="Enter your last name" name="lastName" data-name="lastName" required="required" autofocus="autofocus" class="w-input text-field">
        <label for="email-2" class="field-label">Email Address:</label>
        <input id="email-2" type="email" placeholder="Enter your email address" name="email" data-name="email" class="w-input text-field">
        <label for="password" class="field-label">Password:</label>
        <input id="password" type="password" placeholder="Enter your password" name="password" data-name="password" required="required" class="w-input text-field">
        <label for="passwordAgain" class="field-label">Confirm Password:</label>
        <input id="passwordAgain" type="password" placeholder="Enter your password again" name="password_confirmation" data-name="password_confirmation" required="required" class="w-input text-field">
        <div class="w-checkbox checkbox-field">
          <input id="isTrainer" type="checkbox" name="isTrainer" data-name="isTrainer" class="w-checkbox-input" value="trainer">
          <label for="isTrainer" class="w-form-label">I am a trainer</label>
        </div>
        <input type="submit" value="Register" data-wait="Please wait..."  class="w-button link">
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

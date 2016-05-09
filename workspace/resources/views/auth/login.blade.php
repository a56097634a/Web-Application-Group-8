@extends('layouts.app')

@section('content')
<h1>Log in</h1>
  <div class="w-container container">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" method="POST" action="{{ url('/login') }}">
          {!! csrf_field() !!}
        <label for="email-2" class="field-label">Email Address:</label>
        <input id="email-2" type="text" placeholder="Enter your email address" name="email" data-name="email" required="required" class="w-input text-field">
        <label for="password" class="field-label">Password:</label>
        <input id="password" type="password" placeholder="Enter your password" name="password" data-name="password" required="required" class="w-input text-field">
        <div class="w-checkbox checkbox-field">
          <input id="Remember-me" type="checkbox" name="Remember-me" data-name="Remember me" class="w-checkbox-input">
          <label for="Remember-me" class="w-form-label">Remember me</label>
        </div>
        <input type="submit" value="Login" data-wait="Please wait..." class="w-button link">
        <a href="{{ url('/password/reset') }}" class="text-link">Forgot your password?</a>
        <a href="{{ url('/register') }}" class="w-button link">REGISTER NOW</a>
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

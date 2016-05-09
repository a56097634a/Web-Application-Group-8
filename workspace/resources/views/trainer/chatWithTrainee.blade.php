@extends('layouts.app')

@section('content')

<h1>Chat with trainee</h1>
  <div class="w-container container">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" method="GET" action="{{ url('/')}}">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <label for="subject" class="field-label">Subject:</label>
        <input id="subject" type="text" placeholder="Enter subject" name="subject" data-name="subject" required="required" class="w-input text-field">
        <label for="Message-2" class="field-label">Message:</label>
        <textarea id="Message-2" placeholder="Enter your message" name="Message" data-name="Message" required="required" class="w-input text-field block"></textarea>
        <input type="submit" value="Send" data-wait="Please wait..." class="w-button link">
      </form>
      <div class="w-form-done">
        <p>Thank you! Your submission has been received!</p>
      </div>
      <div class="w-form-fail">
        <p>Oops! Something went wrong while submitting the form</p>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

@endsection
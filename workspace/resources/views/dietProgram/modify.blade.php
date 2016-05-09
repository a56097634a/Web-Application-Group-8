@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>DIET PROGRAM</h1>
    <div class="w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="POST" action="/dietProgram/store/origin">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <input type="hidden" name="DPId" @if($DP) value="{{$DP->DPId}}" @else value="{{-1}}" @endif>
          <label for="dietProgramName" class="field-label">Name:</label>
          <input id="dietProgramName" type="text" placeholder="Enter diet program name" name="DPName" required="required" data-name="dietProgramName" @if($DP) value="{{$DP->DPName}}" @endif class="w-input text-field">
          <label for="dietProgramImpact" class="field-label">Impact:</label>
          <input id="dietProgramImpact" type="text" placeholder="Enter diet program impact" name="DPImpact" required="required" data-name="DPImpact" @if($DP) value="{{$DP->DPImpact}}" @endif class="w-input text-field">
          <label for="dietProgramDescription" class="field-label">Description:</label>
          <input id="dietProgramDescription" type="text" placeholder="Enter diet program description" name="DPDescription" data-name="DPDescription" @if($DP) value="{{$DP->DPDescritption}}" @endif class="w-input text-field">
          <label for="dietProgramLength" class="field-label">Diet Program Length:</label>
          <input id="dietProgramLength" type="text" placeholder="Enter diet program length" name="DPLength" required="required" data-name="DPLength" @if($DP) value="{{$DP->DPLength}}" @endif class="w-input text-field">
          <label for="avgCal" class="field-label">Average Calories:</label>
          <input id="avgCal" type="text" placeholder="Enter average calories" name="DPCalAvg" data-name="DPCalAvg" @if($DP) value="{{$DP->DPCalAvg}}" @endif class="w-input text-field">
          <label for="avgProtein" class="field-label">Average Protein Content:</label>
          <input id="avgProtein" type="text" placeholder="Enter average protein content" name="DPProteinAvg" data-name="DPProteinAvg" @if($DP) value="{{$DP->DPProteinAvg}}" @endif class="w-input text-field">
          <label for="avgFiber" class="field-label">Average Fiber Content:</label>
          <input id="avgFiber" type="text" placeholder="Enter average fiber content" name="DPFiberAvg" data-name="DPFiberAvg" @if($DP) value="{{$DP->DPFiberAvg}}" @endif class="w-input text-field">
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
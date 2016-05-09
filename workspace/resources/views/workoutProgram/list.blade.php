@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>WORKOUT PROGRAM LIST</h1>
  </div>
  <div class="w-container">
    <ul class="unordered-list">
        @foreach($WPs as $WP)
      <li class="list-item">
        <div class="w-row row">
          <div class="w-col w-col-3">
            <div class="text-block textinsidelist">Program Name: {{$WP->WPName}}</div>
          </div>
          <div class="w-col w-col-3">
            <div class="text-block textinsidelist">Program Impact: {{$WP->WPImpact}}</div>
          </div>
          <div class="w-col w-col-3"><a href="/workoutProgram/display/{{$WP->WPId}}" class="w-button button_dashboard">See workout program</a>
          </div>
          <div class="w-col w-col-3"><a href="/workoutProgram/modify/{{$WP->WPId}}" class="w-button button_dashboard">Modify workout program</a>
          </div>
        </div>
      </li>
      @endforeach
      <li class="list-item">
        <a href="{{url('/workoutProgram/modify/-1')}}" class="w-button link">Add new program</a>
        </li>
    </ul>
  </div>

@endsection
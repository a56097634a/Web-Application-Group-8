@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>DIET PROGRAM</h1>
  </div>
  <div class="w-container">
    <ul class="unordered-list">
        <?php $json = $WP->toJson(); $array = json_decode( $json, true );?>
        @foreach ($array as $key => $value)
            <li class="list-item">
                <div class="w-row row">
                    <div class="w-col w-col-6">
                        <div class="text-block">{{$key}}</div>    
                    </div>
                    <div class="w-col w-col-6">
                        <div class="text-block">{{$value}}</div>    
                    </div>
                </div>
            </li>
        @endforeach
        @if($workouts)
            <li class="list-item">
                <div class="w-row row">
                    <div class="w-col w-col-6">
                    <div class="text-block">Workouts</div>
                      </div>
                     <div class="w-col w-col-6">
                        <ul class="unordered-list">
                        @foreach($workouts as $workout)
                        <li>
                            <div class="text-block">{{$workout->workoutName}}</div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </li>
        @endif
        <li class="list-item">
            <div class="w-row row">
                    <div class="w-col w-col-6">
                            <div class="text-block">Click button to modify this workout program</div>    
                    </div>
                    <div class="w-col w-col-6">
                            <div class="w-col w-col-6"><a href="/workoutProgram/modify/{{$WP->WPId}}" class="w-button button_dashboard">Modify this workout Program</a>
                            </div>    
                    </div>
            </div>
        </li>
  </div>

@endsection
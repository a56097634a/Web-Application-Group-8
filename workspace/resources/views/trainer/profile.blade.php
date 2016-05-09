@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>TRAINER PROFILE</h1>
  </div>
  <div class="w-container"><img width="298" src={{URL :: to('src/images/profilePicture.jpg')}} class="imageprofile">
  </div>
  <div class="w-container">
    <ul class="unordered-list">
        <?php $json = $user->toJson(); $array = json_decode( $json, true );?>
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
        @if($trainer->gender)
        <?php $json = $trainer->toJson(); $array = json_decode( $json, true );?>
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
        @endif
        <li class="list-item">
            <div class="w-row row">
                    <div class="w-col w-col-6">
                            <div class="text-block">Click button to modify your trainer profile</div>    
                    </div>
                    <div class="w-col w-col-6">
                            <div class="w-col w-col-6"><a href="{{ url('/trainer/modify') }}" class="w-button button_dashboard">Modify Profile</a>
                            </div>    
                    </div>
            </div>
        </li>
        <li class="list-item">
            <div class="w-row row">
                    <div class="w-col w-col-6">
                            <div class="text-block">Click button to see your trainees</div>    
                    </div>
                    <div class="w-col w-col-6">
                            <div class="w-col w-col-6"><a href="{{ url('/trainer/traineeList') }}" class="w-button button_dashboard">See Trainees</a>
                            </div>    
                    </div>
            </div>
        </li>
        <li class="list-item">
            <div class="w-row row">
                    <div class="w-col w-col-6">
                            <div class="text-block">Click button to see your workout programs</div>    
                    </div>
                    <div class="w-col w-col-6">
                            <div class="w-col w-col-6"><a href="{{ url('/workoutProgram/list') }}" class="w-button button_dashboard">See workout programs</a>
                            </div>    
                    </div>
            </div>
        </li>
        <li class="list-item">
            <div class="w-row row">
                    <div class="w-col w-col-6">
                            <div class="text-block">Click button to see your diet programs</div>    
                    </div>
                    <div class="w-col w-col-6">
                            <div class="w-col w-col-6"><a href="{{ url('/dietProgram/list') }}" class="w-button button_dashboard">See diet programs</a>
                            </div>    
                    </div>
            </div>
        </li>
    </ul>
  </div>

@endsection
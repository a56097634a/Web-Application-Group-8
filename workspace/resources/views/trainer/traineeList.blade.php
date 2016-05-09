@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>TRAINEE LIST</h1>
  </div>
  <div class="w-container">
    <ul class="unordered-list">
        @foreach($trainees as $trainee)
        <?php $user = NULL; 
            foreach ($users as $u) {
                if($u->id == $trainee->traineeId){
                    $user = $u;
                }
            }?>
        @if($user)
      <li class="list-item">
        <div class="w-row row">
          <div class="w-col w-col-2">
            <div class="text-block textinsidelist">{{$user->firstName}} {{$user->lastName}}</div>
          </div>
          <div class="w-col w-col-2">
            <div class="text-block textinsidelist">{{$trainee->gender}}</div>
          </div>
          <div class="w-col w-col-2">
            <div class="text-block textinsidelist">DOB: {{$trainee->DOB}}</div>
          </div>
          <div class="w-col w-col-2">
            <div class="text-block textinsidelist">Contact No.: {{$user->contactNumber}}</div>
          </div>
          <div class="w-col w-col-2">
            <div class="text-block textinsidelist"><a href="{{ url('/trainer/talkWithTrainee') }}" class="w-button button_dashboard">Chat</a></div>
          </div>
          <div class="w-col w-col-2"><a href="/plan/modify/{{$trainee->traineeId}}" class="w-button button_dashboard">Modify plan</a>
          </div>
        </div>
      </li>
      @endif
      @endforeach
    </ul>
  </div>

@endsection
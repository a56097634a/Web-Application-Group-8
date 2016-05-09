@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>TRAINER LIST</h1>
  </div>
  <div class="w-container">
    <ul class="unordered-list">
        @foreach($trainers as $trainer)
        <?php $user = NULL; 
            foreach ($users as $u) {
                if($u->id == $trainer->trainerId){
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
            <div class="text-block textinsidelist">{{$trainer->gender}}</div>
          </div>
          <div class="w-col w-col-2">
            <div class="text-block textinsidelist">Good at: {{$trainer->specialty}}</div>
          </div>
          <div class="w-col w-col-2">
            <div class="text-block textinsidelist">Fee: {{$trainer->price}}</div>
          </div>
          <div class="w-col w-col-2">
            <div class="text-block textinsidelist">Review: {{$trainer->review}}/5.0</div>
          </div>
          <div class="w-col w-col-2"><a href="/dashboard/selectTrainer/{{$trainer->trainerId}}" class="w-button button_dashboard">Select</a>
          </div>
        </div>
      </li>
      @endif
      @endforeach
    </ul>
  </div>

@endsection
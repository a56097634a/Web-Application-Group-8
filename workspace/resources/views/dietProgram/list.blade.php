@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>DIET PROGRAM LIST</h1>
  </div>
  <div class="w-container">
    <ul class="unordered-list">
        @foreach($DPs as $DP)
      <li class="list-item">
        <div class="w-row row">
          <div class="w-col w-col-3">
            <div class="text-block textinsidelist">Program Name: {{$DP->DPName}}</div>
          </div>
          <div class="w-col w-col-3">
            <div class="text-block textinsidelist">Program Impact: {{$DP->DPImpact}}</div>
          </div>
          <div class="w-col w-col-3"><a href="/dietProgram/display/{{$DP->DPId}}" class="w-button button_dashboard">See diet program</a>
          </div>
          <div class="w-col w-col-3"><a href="/dietProgram/modify/{{$DP->DPId}}" class="w-button button_dashboard">Modify diet program</a>
          </div>
        </div>
      </li>
      @endforeach
      <li class="list-item">
        <a href="{{url('/dietProgram/modify/-1')}}" class="w-button link">Add new program</a>
        </li>
    </ul>
  </div>

@endsection
@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>DIET PROGRAM</h1>
  </div>
  <div class="w-container">
    <ul class="unordered-list">
        <?php $json = $DP->toJson(); $array = json_decode( $json, true );?>
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
        <li class="list-item">
            <div class="w-row row">
                    <div class="w-col w-col-6">
                            <div class="text-block">Click button to modify this diet program</div>    
                    </div>
                    <div class="w-col w-col-6">
                            <div class="w-col w-col-6"><a href="/dietProgram/modify/{{$DP->DPId}}" class="w-button button_dashboard">Modify Diet Program</a>
                            </div>    
                    </div>
            </div>
        </li>
  </div>

@endsection
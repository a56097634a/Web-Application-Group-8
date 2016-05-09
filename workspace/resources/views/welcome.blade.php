@extends('layouts.app')

@section('content')
<div class="w-container container">
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form"><a href="{{ url('/login') }}" class="w-button link">LOGIN</a><a href="{{ url('/register') }}" class="w-button link">REGISTER</a>
      </form>
    </div>
</div>
@endsection

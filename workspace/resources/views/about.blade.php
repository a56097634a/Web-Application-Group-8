@extends('layouts.app')

@section('content')

<div class="w-container container">
    <h1>About Us</h1>
  </div>
  <div class="w-container"><img src={{URL :: to('src/images/about.PNG')}} class="about-image">
  </div>

@endsection
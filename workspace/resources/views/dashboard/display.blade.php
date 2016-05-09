@extends('layouts.app')

@section('content')

<div data-duration-in="300" data-duration-out="100" class="w-tabs"></div>
    <div class="w-container">
        <h1>Trainee Dashboard</h1>
    </div>
</div>
    <div class="w-container container">
    <div data-duration-in="300" data-duration-out="100" class="w-tabs tabs">
        <div class="w-tab-menu">
            <a data-w-tab="Tab 1" class="w-tab-link w-inline-block tab-link">
              <div>About me</div>
            </a>
            <a data-w-tab="Tab 2" class="w-tab-link w-inline-block tab-link">
              <div>My plan</div>
            </a>
            <a data-w-tab="Tab 3" class="w-tab-link w-inline-block tab-link">
              <div>Trainer</div>
            </a>
            <a data-w-tab="Tab 4" class="w-tab-link w--current w-inline-block tab-link">
              <div>Featured Fact</div>
            </a>
        </div>
        <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="w-tab-pane">
                <div>
                    <ul class="unordered-list">
                        <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">Your Photo</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="w-col w-col-6"><img src={{URL :: to('src/images/trainee.jpg')}} class="image">
                                      </div>    
                                </div>
                            </div>
                        </li>
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
                        @if($traineeDetails->gender)
                        <?php $json = $traineeDetails->toJson(); $array = json_decode( $json, true );?>
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
                                    <div class="text-block">Click button to modify your fitness details</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="w-col w-col-6"><a href="{{ url('/trainee/modify') }}" class="w-button button_dashboard">Modify details</a>
                                    </div>    
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div data-w-tab="Tab 2" class="w-tab-pane">
                <div>
                    <ul class="unordered-list">
                        @if($plan == NULL)
                        @if($trainer == NULL)
                        <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">Click button to choose a trainer</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="w-col w-col-6"><a href="{{ url('/dashboard/chooseTrainer') }}" class="w-button button_dashboard">Choose a trainer</a>
                                    </div>    
                                </div>
                            </div>
                        </li>
                        @else
                        <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">Click button to talk to trainer to get a plan</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="w-col w-col-6"><a href="{{ url('/dashboard/talkWithTrainer') }}" class="w-button button_dashboard">Talk to trainer</a>
                                    </div>    
                                </div>
                            </div>
                        </li>
                        @endif
                        @else
                        <?php $json = $plan->toJson(); $array = json_decode( $json, true );?>
                        @foreach ($array as $key => $value)
                        <li class="list-item">
                            @if ($key == "WPId")
                            
                            <li class="list-item">
                              <div class="text-block">Workout Program Detail</div>
                            </li>    
                            
                            <?php $json = $workoutProgram->toJson(); $array = json_decode( $json, true );?>
                            @foreach ($array as $key1 => $value1)
                            
                            <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$key1}}</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$value1}}</div>    
                                </div>
                            </div>
                            @endforeach
                            
                            
                            @elseif ($key == "DPId")
                            
                            <li class="list-item">
                              <div class="text-block">Diet Program Detail</div>
                            </li>
                            
                            <?php $json = $dietProgram->toJson(); $array = json_decode( $json, true );?>
                            @foreach ($array as $key2 => $value2)
                            <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$key2}}</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$value2}}</div>    
                                </div>
                            </div>
                            @endforeach
                            
                            
                            @elseif ($key == "goalId")
                            
                            <li class="list-item">
                              <div class="text-block">Plan Goal</div>
                            </li>
                            
                            <?php $json = $goal->toJson(); $array = json_decode( $json, true );?>
                            @foreach ($array as $key3 => $value3)
                            <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$key3}}</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$value3}}</div>    
                                </div>
                            </div>
                            @endforeach
                            
                            
                            @elseif ($key == "gymId")
                            <!--Gym where this plan takes place -->
                            
                            <li class="list-item">
                              <div class="text-block">Gym Detail</div>
                            </li>
                        
                            <?php $json = $gym->toJson(); $array = json_decode( $json, true );?>
                            @foreach ($array as $key4 => $value4)
                            <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$key4}}</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$value4}}</div>    
                                </div>
                            </div>
                            @endforeach
                            
                            
                            @else
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$key}}</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="text-block">{{$value}}</div>    
                                </div>
                            </div>
                        </li>
                        @endif
                        @endforeach    
                        @endif
                    </ul>
                </div>
            </div>
            <div data-w-tab="Tab 3" class="w-tab-pane">
                <div>
                    <ul class="unordered-list">
                        @if($trainer)
                            <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">Trainer Photo</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="w-col w-col-6"><img src={{URL :: to('src/images/profilePicture.jpg')}} class="image">
                                      </div>    
                                </div>
                            </div>
                        </li>
                        <?php $json = $trainer1->toJson(); $array = json_decode( $json, true );?>
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
                        <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">Click button to talk to trainer</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="w-col w-col-6"><a href="{{ url('/dashboard/talkWithTrainer') }}" class="w-button button_dashboard">Talk to your trainer</a>
                                    </div>    
                                </div>
                            </div>
                        </li>
                        @else
                        <li class="list-item">
                            <div class="w-row row">
                                <div class="w-col w-col-6">
                                    <div class="text-block">Click button to choose a trainer</div>    
                                </div>
                                <div class="w-col w-col-6">
                                    <div class="w-col w-col-6"><a href="{{ url('/dashboard/chooseTrainer') }}" class="w-button button_dashboard">Choose a trainer</a>
                                    </div>    
                                </div>
                            </div>
                        </li>
                        @endif
                        
                    </ul>
                </div>
            </div>
            <div data-w-tab="Tab 4" class="w-tab-pane">
                <div>
                    <ul class="unordered-list">
                        <?php $random = $foods[rand(0, 9)]; $json = $random->toJson(); $array = json_decode( $json, true );?>
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
                    </ul>
                </div>
            </div>
        </div>    
    </div>
    </div>

@endsection
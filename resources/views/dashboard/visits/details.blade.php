
@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Reservations </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Reservations
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Reservations </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            
                                

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        
                                    
                                    <div class="col form-group">
                                        <label>Time</label>
                                        <p class="alert alert-info"
                                         style="background-color:rgb(26,60,119)">
                                         @if($visit->type == 'lab')
                                        {{ $visit->appointment->time}}
                                         @else
                                         {{ $visit->time }}
                                         @endif
                                        </p>
                                
                                    </div>

                                    <div class="col form-group">
                                        <label>Date</label>
                                        <p class="alert alert-info" 
                                        style="background-color:rgb(26,60,119)">
                                        @if($visit->type == 'lab')
                                        {{ $visit->appointment->date}}
                                         @else
                                         {{ $visit->date }}
                                         @endif
                                        </p>
                                    </div>
                                    @if($visit->type == 'lab')
                                    <div class="col form-group">
                                        <label>Day</label>
                                        <p class="alert alert-info" 
                                        style="background-color:rgb(26,60,119)">
                                        {{ $visit->appointment->day}}
                                        </p>
                                    </div>
                                    @endif
                                    
                                    <div class="col form-group">

                                        <label>Name </label>
                                        <p class="alert alert-info" 
                                        style="background-color:rgb(26,60,119)">{{ $visit->name }}</p>                                   
                                     </div>

                                    <div class="col form-group">
 
                                        <label>Phone </label>
                                        <p class="alert alert-info"
                                         style="background-color:rgb(26,60,119)">{{ $visit->phone }}</p>
                                
                                    </div>

                                    <div class="col form-group">
 
                                        <label>Type</label>
                                        <p class="alert alert-info" 
                                        style="background-color:rgb(26,60,119)">{{ $visit->choice  }}</p>
                                
                                    </div>
                                    <div class="col form-group">
 
                                        <label>location</label>
                                        <p class="alert alert-info" 
                                        style="background-color:rgb(26,60,119)">{{ $visit->type  }}</p>
                                
                                    </div>

                                    @if($visit->choice== 'test')
                                    <div class="col form-group">
                                        <label>Test </label>
                                        <p><a href="{{route('tests.show',$visit->test -> id)}}">
                                        {{ $visit->test->name  }}
                                        </a></p>
                                    </div>
                                    @else
                                    <div class="col form-group">
                                        <label>Offer </label>
                                        <p><a href="{{route('offers.show',$visit->offer -> id)}}">
                                        {{ $visit->offer->name  }}
                                        </a></p>
                                    </div>
                                    @endif
                                    @if($visit->type == "home")
                                    <div class="col form-group">
                                        <label>Address </label>
                                        <p  class="alert alert-info" 
                                        style="background-color:rgb(26,60,119)">
                                         {{ $visit->address->street  }}</p>
                                    </div>
                                    @endif

                                    <div class="col form-group">
 
                                        <label>Rate </label>
                                        <p  class="alert alert-info" 
                                        style="background-color:rgb(26,60,119)">{{$visit -> rate ? $visit -> rate ->rate : 'Not rated yest'}}</p>
                                    </div>
                                    <div class="col form-group">
 
                                        <label>Created at </label>
                                        <p  class="alert alert-info" 
                                        style="background-color:rgb(26,60,119)">
                                         {{ $visit->created_at }}</p>
                                    </div>

                                    <div class="col form-group">
 
                                        <label>User </label>
                                        <p >
                                        <a href="{{route('user.details',$visit->user->id)}}">
                                        {{  $visit->user->name  }}
                                        </a>
                                    </p>
                                
                                    </div>

                                    <div class="col form-group">
 
                                        <label>Photo</label>
                                        <p><img width="200px;height:200px"src="{{asset($visit->photo)}}"></p>
                                
                                    </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

@stop

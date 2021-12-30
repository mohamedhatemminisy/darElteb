
@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>Tests count </h4>
                                         </div>
                                        <div class="col-5 text-right">
                                            <h4>{{$tests}}</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>Offers count</h4>
                                         </div>
                                        <div class="col-5 text-right">
                                            <h4>{{$offers}}</h4>
                                         </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>visits Count </h4>
                                         </div>
                                        <div class="col-5 text-right">
                                            <h4>{{$visits}}</h4>
                                         </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- Candlestick Multi Level Control Chart -->
                
                <h2>Last offers </h2>
                <a href="{{route('offers.index')}}" class="btn btn-primary">Show All Offers</a>
                <br><br>
                <table class="table display nowrap table-striped table-bordered">
                    <thead class="">
                    <tr>
                        <th>#</th>
                        <th>{{trans('admin.name')}}</th>
                        <th>Type </th>
                        <th>Target</th>
                        <th>Value</th>
                            <th>{{trans('admin.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @isset($lastOffers )
                        @foreach($lastOffers as $key => $offer)
                            <tr>
                                <td>{{ $key +1}}</td>
                                <td>{{$offer ->translate('en')-> name}}</td>
                                <td>{{$offer -> type }}</td>
                                <td>{{$offer -> target}}</td>
                                <td>{{$offer -> value}}</td>
                
                                <td>
                                <div class="btn-group" role="group"
                                            aria-label="Basic example">
                                        
                                        <a href="{{route('offers.edit',$offer -> id)}}"
                                            class="btn btn-sm btn-clean
                                                btn-icon mr-2 " title="@lang('admin.edit')">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                            <a href="{{route('offers.show',$offer->id)}}"
                                            class="btn btn-sm btn-clean
                                                btn-icon mr-2 "  title="{{trans('admin.details')}}"><i class="fas fa-eye"></i></a>

                                        <a href="{{route('offers.delete',$offer -> id)}}"
                                            class="btn btn-sm btn-clean
                                                btn-icon mr-2 "  title="{{trans('admin.delete')}}"><i class="fas fa-trash-alt"></i></a>

                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    @endisset


                    </tbody>
                </table>

                <h2>Last Tests </h2>
                <a href="{{route('tests.index')}}" class="btn btn-primary">Show All Tests</a>
                <br><br>
                <table  class="table display nowrap table-striped table-bordered">
                <thead class="">
                <tr>
                    <th>#</th>
                    <th>{{trans('admin.name')}}</th>
                    <th>{{trans('admin.price')}}</th>
                    <th>{{trans('admin.duration')}}</th>
                        <th>{{trans('admin.action')}}</th>
                </tr>
                </thead>
                <tbody>

                @isset($lastTests )
                    @foreach($lastTests as $key => $test)
                        <tr>
                            <td>{{ $key +1}}</td>
                            <td>{{$test ->translate('en')-> name}}</td>
                            <td>{{$test -> price}}</td>
                            <td>{{$test -> duration}}</td>
            
                            <td>
                            <div class="btn-group" role="group"
                                        aria-label="Basic example">
                                    
                                    <a href="{{route('tests.edit',$test -> id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2 " title="@lang('admin.edit')">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                        <a href="{{route('tests.show',$test->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2 "  title="{{trans('admin.details')}}"><i class="fas fa-eye"></i></a>

                                    <a href="{{route('tests.delete',$test -> id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2 "  title="{{trans('admin.delete')}}"><i class="fas fa-trash-alt"></i></a>

                                </div>
                            </td>

                        </tr>
                    @endforeach
                @endisset


                </tbody>
            </table>


            <h2>Last Reservations </h2>
                <a href="{{route('reservations')}}" class="btn btn-primary">Show All Reservations</a>
                <br><br>
            <table class="table display nowrap table-striped table-bordered">
                <thead class="">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Type</th>
                    <th>location</th>
                    <th>Rate</th>
                    <th>{{trans('admin.action')}}</th>
                </tr>
                </thead>
                <tbody>

                @isset($lastVisit )
                    @foreach($lastVisit as $key => $visit)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{$visit -> name}}</td>
                            <td>{{$visit -> phone}}</td>
                            <td>{{$visit -> choice}}</td>
                            <td>{{$visit -> type}}</td>
                            <td>{{$visit -> rate ? $visit -> rate ->rate : 'Not rated yest'}}</td>
                            <td>
                            <div class="btn-group" role="group"
                                        aria-label="Basic example">
                                    
                                        <a href="{{route('visit.details',$visit->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2" title="{{trans('admin.details')}}">
                                            <i class="fas fa-eye"></i></a>
                                        @if($visit->accept == null)
                                        <a href="{{route('visit.confirm',$visit->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2" title="Confirm Reservation">
                                            <i class="fas fa-check-square"></i></a>
                                        @else
                                        <a href="{{route('visit.accept',$visit->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2" title="Show Acceptance">
                                            <i class="fas fa-check-square" style="color: red;"></i></a>
                                        @endif
                                            @php
                                            $result = App\Models\Result::where('visit_id',$visit->id)->first();
                                            @endphp
                                            @if(!$result)
                                        <a href="{{route('visit.result',$visit->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2" title="Upload Result">
                                            <i class="fas fa-upload"></i></a>
                                            @else
                                            <a href="{{route('show.result',$visit->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2" title="Upload Result">
                                            <i class="fas fa-upload" style="color: red;"></i></a>
                                            @endif
                                </div>
                            </td>

                        </tr>
                    @endforeach
                @endisset


                </tbody>
            </table>

            </div>
        </div>
    </div>

    @stop

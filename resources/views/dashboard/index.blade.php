
@extends('layouts.admin')
@section('style')
    
    <!-- BEGIN CHART CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!--// END CHART CSS -->
@stop

@section('content')
    
    
            <div class="content-body">
                <div  class="row" id="crypto-stats-3">
                    
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
<<<<<<< HEAD
                                <div class="card-body p-1">
                                    <div class="app-counter d-flex justify-content-between align-items-center">
                                             <div class="img-icon">
                                               <img  src="{{asset('assets/admin/images/icons/tests-icon.png')}}" class="brand-logo img-responsive lazyload" data-src="{{asset('assets/admin/images/icons/tests-icon.png')}}" alt="Logo">
                                             </div>

                                        <div class="title">
                                            <h4>Tests count </h4>
=======
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>@lang('admin.test_count') </h4>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                         </div>
                                       
                                    </div>
                                    
                                </div>
                                <div class="card-footer p-1 border-top-0">
                                <div class="app-num">
                                            <span>{{$tests}}</span>
                                        </div>
                                    <div class="app-chart">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
<<<<<<< HEAD
                                <div class="card-body p-1">
                                <div class="app-counter d-flex justify-content-between align-items-center">
                                        <div class="img-icon">
                                               <img  src="{{asset('assets/admin/images/icons/offers-icon.png')}}" class="brand-logo img-responsive lazyload" data-src="{{asset('assets/admin/images/icons/offers-icon.png')}}" alt="Logo">
                                        </div>                                     
                                         <div class="title">
                                            <h4>Offers count</h4>
=======
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>@lang('admin.offers_count')</h4>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                         </div>
                                      
                                    </div>
                                </div>
                                <div class="card-footer p-1 border-top-0">
                                   <div class="app-num">
                                            <span>{{$offers}}</span>
                                    </div> 
                                  <div class="app-chart">
                                      <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
<<<<<<< HEAD
                                <div class="card-body p-1">
                                <div class="app-counter d-flex justify-content-between align-items-center">
                                       
                                        <div class="img-icon">
                                               <img  src="{{asset('assets/admin/images/icons/visits-icon22.png')}}" class="brand-logo img-responsive lazyload" data-src="{{asset('assets/admin/images/icons/visits-icon.png')}}" alt="Logo">
                                        </div>        
                                        <div class="title">
                                            <h4>visits Count </h4>
=======
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>@lang('admin.reservations_count') </h4>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                         </div>
                                        
                                    </div>
                                </div>
                                <div class="card-footer p-1 border-top-0">
                                    <div class="app-num">
                                        <span>{{$visits}}</span>
                                    </div>
                                    <div class="app-chart">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
<<<<<<< HEAD
             
                <div class="row">
                   <div class="col-12">
                     <div class="card pull-up">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="card-title">
                              <h3>Last Offers</h3>
                            </div>
                            <div class="btn-group position-relative gradient">
                               <span class="wrap-text">Show All Offers</span>
                               <a href="{{route('offers.index')}}" class="btn btn-gradient">
                                   Show All Offers
                                </a>
                           </div> 
                         </div>
=======
                <!-- Candlestick Multi Level Control Chart -->
                
                <h2>@lang('admin.Last_offers')  </h2>
                <a href="{{route('offers.index')}}" class="btn btn-primary">@lang('admin.all_offers') </a>
                <br><br>
                <table class="table display nowrap table-striped table-bordered">
                    <thead class="">
                    <tr>
                        <th>#</th>
                        <th>{{trans('admin.name')}}</th>
                        <th>@lang('admin.type') </th>
                        <th>@lang('admin.target')</th>
                        <th>@lang('admin.value')</th>
                        <th>{{trans('admin.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2

                        <div class="card-body">
                          <div class="table-responsive">
                             <table class="table  table-striped table-hovered" aria-describedby="table">
                                <thead>
                                   <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">{{trans('admin.name')}}</th>
                                      <th scope="col">Type </th>
                                      <th scope="col">Target</th>
                                      <th scope="col">Value</th>
                                      <th scope="col">{{trans('admin.action')}}</th>
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
                                     <td class="col-2">
                                       <div class="d-flex justify-content-center align-items-center">
                                         <div class="btn-group position-relative info">
                                               <span class="wrap-text"><i class="las la-edit la-lg" aria-hidden="true"></i></span>
                                        
                                            <a href="{{route('offers.edit',$offer -> id)}}" class="btn btn-sm btn-icon btn-info"  
                                                 data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='info-tooltip'> @lang('admin.edit')</span>">
                                                <i class="las la-edit la-lg" aria-hidden="true"></i>
                                            </a>
                                           </div> 

                                          <div class="btn-group position-relative primary">
                                               <span class="wrap-text"> <i class="las la-eye la-lg" aria-hidden="true"></i></span>
                                            <a href="{{route('offers.show',$offer->id)}}"
<<<<<<< HEAD
                                               class="btn btn-sm btn-icon btn-primary" 
                                               data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='primary-tooltip'> @lang('admin.details')</span>">
                                                <i class="las la-eye la-lg" aria-hidden="true"></i>
=======
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

                <h2>@lang('admin.last_tests') </h2>
                <a href="{{route('tests.index')}}" class="btn btn-primary">@lang('admin.all_tests')</a>
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
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                            </a>
                                          </div>  
                                          
                                          <div class="btn-group position-relative danger">
                                               <span class="wrap-text"> <i class="las la-trash la-lag" aria-hidden="true"></i></span>
                                               <a href="{{route('offers.delete',$offer -> id)}}"
                                                 class="btn btn-sm btn-icon btn-danger" 
                                                 data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='danger-tooltip'> @lang('admin.delete')</span>" >
                                                 <i class="las la-trash la-lag" aria-hidden="true"></i>
                                               </a>
                                          </div>     

                                       </div>
                                       </div>
                                      </td>
                                   </tr>
                                   @endforeach
                                   @endisset


                                </tbody>
                              </table>
                           </div>
                        </div>

                        <div class="card-header d-flex justify-content-between align-items-center">
                           <div class="card-title">
                             <h3>Last Tests </h3>
                           </div>
                           <div class="btn-group position-relative gradient">
                               <span class="wrap-text">Show All Tests</span>
                               <a href="{{route('tests.index')}}" class="btn btn-gradient">Show All Tests</a>
                           </div>
                        </div>

                        <div class="card-body">
                           <div class="table-responsive">
                             <table  class="table table-striped table-hovered" aria-describedby="table">
                                <thead>
                                   <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">{{trans('admin.name')}}</th>
                                     <th scope="col">{{trans('admin.price')}}</th>
                                     <th scope="col">{{trans('admin.duration')}}</th>
                                     <th scope="col">{{trans('admin.action')}}</th>
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
                                       <td class="col-2">
                                       <div class="d-flex justify-content-center align-items-center"> 
                                          <div class="btn-group position-relative info">
                                            <span class="wrap-text"><i class="las la-edit la-lg" aria-hidden="true"></i></span>                                    
                                            <a href="{{route('tests.edit',$test -> id)}}" class="btn btn-sm btn-icon btn-info"  
                                               data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='primary-tooltip'> @lang('admin.edit')</span>">
                                                 <i class="las la-edit la-lg" aria-hidden="true"></i>
                                            </a>
                                          </div>
                                          
                                          <div class="btn-group position-relative primary">
                                            <span class="wrap-text"><i class="las la-eye la-lg" aria-hidden="true"></i></span>
                                              <a href="{{route('tests.show',$test->id)}}" class="btn btn-sm btn-icon btn-primary" 
                                               data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='info-tooltip'> @lang('admin.details')</span>">
                                                <i class="las la-eye la-lg" aria-hidden="true"></i>
                                              </a>
                                          </div>    
                                          <div class="btn-group position-relative danger">
                                            <span class="wrap-text"><i class="las la-trash la-lag" aria-hidden="true"></i></span>
                                              <a href="{{route('tests.delete',$test -> id)}}" class="btn btn-sm btn-icon btn-danger" 
                                               data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='danger-tooltip'> @lang('admin.delete')</span>" >
                                                <i class="las la-trash la-lag" aria-hidden="true"></i>
                                             </a>
                                          </div>   
                                        </div>
                                        </td>

                                      </tr>
                                  @endforeach
                               @endisset
                               </tbody>
            
                            </table>
                           </div>
                        </div>

                        <div class="card-header d-flex justify-content-between align-items-center">
                           <div class="card-title">
                              <h3>Last Reservations </h3>
                           </div>
                           <div class="btn-group position-relative gradient">
                               <span class="wrap-text">Show All Reservations</span>
                               <a href="{{route('reservations')}}" class="btn btn-gradient">Show All Reservations</a>
                            </div>
                          </div>
  

<<<<<<< HEAD
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-striped table-hovered" aria-describedby="table">
                                <thead>
                                   <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">Name</th>
                                     <th scope="col">Phone</th>
                                     <th scope="col">Type</th>
                                     <th scope="col">location</th>
                                     <th scope="col">Rate</th>
                                     <th scope="col">{{trans('admin.action')}}</th>
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
                                       <td class="col-2">

                                           <div class="d-flex justify-content-center align-items-center"> 
                                             <div class="btn-group position-relative info">
                                                <span class="wrap-text"><i class="las la-check-circle la-lg" aria-hidden="true"></i></span>                                    
                                                  <a href="{{route('visit.confirm',$visit->id)}}" class="btn btn-sm btn-icon btn-info"  
                                                    data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='info-tooltip'> @lang('admin.confirm')</span>">
                                                    <i class="las la-check-circle la-lg" aria-hidden="true"></i>
                                                  </a>
                                              </div>   
                                                @if($visit->accept == null)
                                                <div class="btn-group position-relative primary">
                                                   <span class="wrap-text"><i class="las la-eye la-lg" aria-hidden="true"></i></span> 
                                                   <a href="{{route('visit.details',$visit->id)}}" class="btn btn-sm btn-icon btn-primary" 
                                                    data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='primary-tooltip'> @lang('admin.details')</span>">
                                                    <i class="las la-eye la-lg" aria-hidden="true"></i>
                                                   </a>
                                                </div>   
                                                @else
                                                <div class="btn-group position-relative danger">
                                                   <span class="wrap-text"><i class="las la-trash la-lag" aria-hidden="true"></i></span> 
                                                   <a href="{{route('visit.accept',$visit->id)}}" class="btn btn-sm btn-icon btn-danger" 
                                                     data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='danger-tooltip'> @lang('admin.delete')</span>" >
                                                     <i class="las la-trash la-lag" aria-hidden="true"></i>
                                                   </a>
                                                </div>   
                                               @endif
                                              @php
                                              $result = App\Models\Result::where('visit_id',$visit->id)->first();
                                              @endphp
                                              @if(!$result)
                                              <div class="btn-group position-relative dark">
                                                   <span class="wrap-text"><i class="las la-cloud-upload-alt la-lg" aria-hidden="true"></i></span> 
                                                 <a href="{{route('visit.result',$visit->id)}}" class="btn btn-sm btn-icon btn-dark" 
                                                   data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='dark-tooltip'> @lang('admin.uploadresult')</span>" >
                                                    <i class="las la-cloud-upload-alt la-lg" aria-hidden="true"></i>
                                                 </a>
                                              </div> 
                                                @else
                                              <div class="btn-group position-relative dark">
                                                   <span class="wrap-text"><i class="las la-cloud-upload-alt la-lg" aria-hidden="true"></i></span>   
                                                   <a href="{{route('show.result',$visit->id)}}"
                                                    class="btn btn-sm btn-icon btn-dark" 
                                                    data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='dark-tooltip'> @lang('admin.uploadresult')</span>" >
                                                     <i class="las la-cloud-upload-alt la-lg" aria-hidden="true"></i>
                                                   </a>
                                              </div>     
                                             @endif
                                            </div>
                                      </td>
=======
            <h2>@lang('admin.Last_Reservations') </h2>
                <a href="{{route('reservations')}}" class="btn btn-primary">@lang('admin.all_Reservations')</a>
                <br><br>
            <table class="table display nowrap table-striped table-bordered">
                <thead class="">
                <tr>
                    <th>#</th>
                    <th>@lang('admin.name')</th>
                    <th>@lang('admin.phone')</th>
                    <th>@lang('admin.type')</th>
                    <th>@lang('admin.location')</th>
                    <th>@lang('admin.rate')</th>
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
                                            btn-icon mr-2" title="@lang('admin.ConfirmReservation')">
                                            <i class="fas fa-check-square"></i></a>
                                        @else
                                        <a href="{{route('visit.accept',$visit->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2" title="@lang('admin.ShowAcceptance')">
                                            <i class="fas fa-check-square" style="color: red;"></i></a>
                                        @endif
                                            @php
                                            $result = App\Models\Result::where('visit_id',$visit->id)->first();
                                            @endphp
                                            @if(!$result)
                                        <a href="{{route('visit.result',$visit->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2" title="@lang('admin.UploadResult')">
                                            <i class="fas fa-upload"></i></a>
                                            @else
                                            <a href="{{route('show.result',$visit->id)}}"
                                        class="btn btn-sm btn-clean
                                            btn-icon mr-2" title="@lang('admin.UploadResult')">
                                            <i class="fas fa-upload" style="color: red;"></i></a>
                                            @endif
                                </div>
                            </td>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2

                                      </tr>
                                     @endforeach
                                  @endisset
                                </tbody>
                              </table>
                            </div>
                        </div>

                     </div>
                  </div>
                </div>
                
            </div>
      
@stop

@section('script') 

    <!-- BEGIN CHART JS -->
    <script src="{{asset('assets/admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/vendors/js/charts/echarts/chart/line.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/vendors/js/charts/echarts/chart/scatter.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/vendors/js/charts/echarts/chart/k.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>
    <!--// END CHART CSS -->
    
@stop

   

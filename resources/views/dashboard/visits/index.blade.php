
@extends('layouts.admin')
@section('content')

<<<<<<< HEAD
   
            <div class="content-header px-1 mb-2">
                <div class="row">
                  <div class="col-12">
                    <div class="content-header-title">
                      <h2 class="text-white">  @lang('admin.reservations')</h2>
                    </div>  
                      <div class="breadcrumbs-top">
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">
                                         @lang('admin.home')
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a>
                                     @lang('admin.reservations')
                                    </a>
=======
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">@lang('admin.Reservations')</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">@lang('admin.home')</a>
                                </li>
                                <li class="breadcrumb-item active">@lang('admin.Reservations')
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                </li>
                            </ol>
                        </div>
                      </div>
                 </div> 
                </div>
            </div>
            <div class="content-body">
                    <div class="row">
                        <div class="col-12">
<<<<<<< HEAD
                            <div class="card pull-up">
                               <div class="card-header d-flex justify-content-between align-items-center">
                                 <div class="card-title">  
                                  <h3>  @lang('admin.reservations')</h3>
                                 </div> 
                                 <div class="btn-icons">
=======
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> @lang('admin.Reservations')</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                        <ul class="list-inline mb-0">
                                        <li>
                                              <a data-action="collapse">
                                                <i class="las la-minus la-lg" aria-hidden="true"></i>
                                              </a>
                                            </li>
                                            <li>
                                                <a data-action="reload">
                                                    <i class="las la-sync la-lg" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                               

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                    @include('dashboard.includes.alerts.success')
                                    @include('dashboard.includes.alerts.errors')
                                    <form action="{{route('reservation_filter')}}" method="get">
                                        @csrf
                                        <div class="table-filter d-flex justify-content-between align-items-center mb-2">
                                          
<<<<<<< HEAD
                                            <div class="form-group">
                                                <label class="form-label">User</label>
                                                <select class="js-example-placeholder-single"  id="user_id" name="user_id">
                                                   <option value=""></option>
=======
                                            <div class="col-md-4">
                                                <label>@lang('admin.users')</label>
                                                <select name="user_id" class="form-control" id="user_id">
                                                <option value="0">@lang('admin.select_user')</option>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                  @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
<<<<<<< HEAD
                                            <div class="form-group">
                                                <label class="form-label">Location</label>
                                                <select class="js-example-placeholder-single" name="location" >
                                                    <option value=""></option>
                                                    <option value="lab">lab</option>
                                                    <option value="home">home</option>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label class="form-label">Type</label>
                                                <select class="js-example-placeholder-single" name="type">
                                                    <option value=""></option>
                                                    <option value="offer">offer</option>
                                                    <option value="test">test</option>
                                                </select>
                                            </div>

                                            <div class="btn-group position-relative gradient mt-2">
                                                <span class="wrap-text">@lang('admin.filter')</span>
                                                <button type="submit" class="btn btn-gradient">@lang('admin.filter')</button>
=======
                                            <div class="col-md-4">
                                                <label>@lang('admin.location')</label>
                                                <select name="location" class="form-control">
                                                <option value="0">@lang('admin.select_location')</option>
                                                    <option value="lab">@lang('admin.lab')</option>
                                                    <option value="home">@lang('admin.house')</option>
                                                </select>
                                            </div>
                                           
                                            <div class="col-md-4">
                                                <label>@lang('admin.type')</label>
                                                <select name="type" class="form-control">
                                                <option value="0">@lang('admin.select_type')</option>
                                                    <option value="offer">@lang('admin.offer')</option>
                                                    <option value="test">@lang('admin.test')</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2 mt-2">
                                                <button type="submit" class="btn btn-success btn-sm">@lang('admin.Filtrer')</button>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                            </div>
                                     
                                        </div>
                                     </form>  

                                     <div class="table-responsive">
                                         <table class="table  table-striped table-hovered" aria-describedby="table">
                                            <thead>
                                            <tr>
<<<<<<< HEAD
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">location</th>
                                                <th scope="col">Rate</th>
                                                <th scope="col">{{trans('admin.action')}}</th>
=======
                                                <th>#</th>
                                                <th>@lang('admin.name')</th>
                                                <th>@lang('admin.phone')</th>
                                                <th>@lang('admin.type')</th>
                                                <th>@lang('admin.location')</th>
                                                <th>@lang('admin.rate')</th>
                                                <th>{{trans('admin.action')}}</th>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($visits )
                                                @foreach($visits as $key => $visit)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{$visit -> name}}</td>
                                                        <td>{{$visit -> phone}}</td>
                                                        <td>{{$visit -> choice}}</td>
                                                        <td>{{$visit -> type}}</td>
                                                        <td>{{$visit -> rate ? $visit -> rate ->rate : 'Not rated yest'}}</td>
                                                        <td class="col-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                          <div class="btn-group position-relative primary">
                                                               <span class="wrap-text"><i class="las la-eye la-lg" aria-hidden="true"></i></span> 
                                                                    <a href="{{route('visit.details',$visit->id)}}"
                                                                      class="btn btn-sm btn-icon btn-primary" 
                                                                      data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='info-tooltip'> @lang('admin.details')</span>">
                                                                      <i class="las la-eye la-lg" aria-hidden="true"></i>
                                                                    </a>
                                                           </div>             


                                                                    @if($visit->accept == null)
                                                             <div class="btn-group position-relative info">
                                                                   <span class="wrap-text"><i class="las la-check-circle la-lg" aria-hidden="true"></i></span>        
                                                                    <a href="{{route('visit.confirm',$visit->id)}}"
<<<<<<< HEAD
                                                                      class="btn btn-sm btn-icon btn-info" 
                                                                      data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='info-tooltip'> @lang('admin.confirmreservation')</span>">
                                                                      <i class="las la-check-circle la-lg" aria-hidden="true"></i>
                                                                   </a>
                                                             </div>            
=======
                                                                   class="btn btn-sm btn-clean
                                                                        btn-icon mr-2" title="@lang('admin.ConfirmReservation')">
                                                                        <i class="fas fa-check-square"></i></a>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                                    @else
                                                            <div class="btn-group position-relative danger">
                                                                <span class="wrap-text"><i class="las la-check-circle la-lg" aria-hidden="true"></i></span>        
                                                                    <a href="{{route('visit.accept',$visit->id)}}"
<<<<<<< HEAD
                                                                     class="btn btn-sm btn-icon btn-danger" 
                                                                      data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='danger-tooltip'> @lang('admin.showacceptance')</span>">
                                                                      <i class="las la-check-circle la-lg" aria-hidden="true"></i>
                                                                   </a>
                                                            </div>            
=======
                                                                   class="btn btn-sm btn-clean
                                                                        btn-icon mr-2" title="@lang('admin.ShowAcceptance')">
                                                                        <i class="fas fa-check-square" style="color: red;"></i></a>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                                 @endif
                                                                        @php
                                                                        $result = App\Models\Result::where('visit_id',$visit->id)->first();
                                                                        @endphp
                                                                        @if(!$result)
                                                            <div class="btn-group position-relative dark">
                                                                    <span class="wrap-text"><i class="las la-cloud-upload-alt la-lg" aria-hidden="true"></i></span>                    
                                                                    <a href="{{route('visit.result',$visit->id)}}"
<<<<<<< HEAD
                                                                      class="btn btn-sm btn-icon btn-dark" 
                                                                      data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='dark-tooltip'> @lang('admin.uploadresult')</span>" >
                                                                      <i class="las la-cloud-upload-alt la-lg" aria-hidden="true"></i>
                                                                   </a>
                                                            </div>            
=======
                                                                   class="btn btn-sm btn-clean
                                                                        btn-icon mr-2" title="@lang('admin.UploadResult')">
                                                                        <i class="fas fa-upload"></i></a>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                                        @else
                                                            <div class="btn-group position-relative danger">
                                                                      <span class="wrap-text"><i class="las la-cloud-upload-alt la-lg" aria-hidden="true"></i></span>               
                                                                        <a href="{{route('show.result',$visit->id)}}"
<<<<<<< HEAD
                                                                        class="btn btn-sm btn-icon btn-danger" 
                                                                         data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='dark-tooltip'> @lang('admin.uploadresult')</span>" >
                                                                         <i class="las la-cloud-upload-alt la-lg" aria-hidden="true"></i>
                                                                        </a>
=======
                                                                   class="btn btn-sm btn-clean
                                                                        btn-icon mr-2" title="@lang('admin.UploadResult')">
                                                                        <i class="fas fa-upload" style="color: red;"></i></a>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                                        @endif
                                                            </div>            
                                                            </div>
                                                        </td>
                        
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                      </div> 
                                      <div class="content-pagination d-flex justify-content-center align-items-center flex-wrap">
                                        {{ $visits->links('vendor.pagination.custom') }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    
    @stop


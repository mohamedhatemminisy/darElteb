
@extends('layouts.admin')
@section('content')

<<<<<<< HEAD
   
            <div class="content-header px-1 mb-2">
              <div class="row">
                <div class="col-12">
                   <div class="content-header-title">
                    <h2 class="text-white">Offers</h2>
                   </div>
                    <div class="breadcrumbs-top">
                        <div class="breadcrumb-wrapper">
=======
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">{{trans('admin.Offers')}}</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.dashboard')}}">
                                        {{trans('admin.home')}}
                                    </a>
                                </li>
<<<<<<< HEAD
                                <li class="breadcrumb-item active">
                                   <a> 
                                   {{trans('admin.offers')}}
                                   </a>
=======
                                <li class="breadcrumb-item active">{{trans('admin.Offers')}}
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
                                    <h3>  {{trans('admin.offers')}}</h3>
                                </div> 
                                <div class="btn-icons">
=======
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> {{trans('admin.Offers')}}</h4>
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
                                    <div class="table-responsive">
                                        <table class="table  table-striped table-hovered" aria-describedby="table">
                                            <thead>
                                            <tr>
<<<<<<< HEAD
                                                <th scope="col">#</th>
                                                <th scope="col">{{trans('admin.name')}}</th>
                                                <th scope="col">Type </th>
                                                <th scope="col">Target</th>
                                                <th scope="col">Value</th>
                                                <th scope="col">{{trans('admin.action')}}</th>
=======
                                                <th>#</th>
                                                <th>{{trans('admin.name')}}</th>
                                                <th>@lang('admin.type') </th>
                                                <th>@lang('admin.target')</th>
                                                <th>@lang('admin.value')</th>
                                                <th>{{trans('admin.action')}}</th>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($offers )
                                                @foreach($offers as $key => $offer)
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
                                                                 <a href="{{route('offers.edit',$offer -> id)}}"
                                                                   class="btn btn-sm btn-icon btn-info"  
                                                                   data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='info-tooltip'> @lang('admin.edit')</span>">
                                                                    <i class="las la-edit la-lg" aria-hidden="true"></i>
                                                                  </a>
                                                               </div> 

                                                               <div class="btn-group position-relative primary">
                                                                   <span class="wrap-text"> <i class="las la-eye la-lg" aria-hidden="true"></i></span>

                                                                   <a href="{{route('offers.show',$offer->id)}}"
                                                                    class="btn btn-sm btn-icon btn-primary" 
                                                                    data-toggle="tooltip" data-placement="top" data-trigger="hover" data-html="true" title="<span class='primary-tooltip'> @lang('admin.details')</span>">
                                                                    <i class="las la-eye la-lg" aria-hidden="true"></i></a>
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
                                                        </td>
                        
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                      </div>
                                      <div class="content-pagination d-flex justify-content-center align-items-center flex-wrap">
                                        {{ $offers->links('vendor.pagination.custom') }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
     
@stop

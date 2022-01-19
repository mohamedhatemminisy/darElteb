@extends('layouts.admin')
@section('content')

    
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
                                     {{trans('admin.home')}}
                                   </a>
                                </li>
<<<<<<< HEAD
                                <li class="breadcrumb-item">
                                    <a href="{{route('reservations')}}"> 
                                    @lang('admin.reservations')
                                   </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a>
                                    @lang('admin.create_acceptance')

                                    </a>
=======
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> 
                                    
                                @lang('admin.Reservations')  </a>
                                </li>
                                <li class="breadcrumb-item active">@lang('admin.ShowAcceptance')
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="content-body">
<<<<<<< HEAD
                    <div class="row">
                        <div class="col-12">
                            <div class="card pull-up">
                               <div class="card-header d-flex justify-content-between align-items-center">
                                   <div class="card-title"> 
                                       <h3> @lang('admin.create_acceptance') </h3>
                                     </div>  
                                     <div class="btn-icons">
=======
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> @lang('admin.ShowAcceptance') </h4>
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
                                        <form class="form"
                                              action="{{route('result.accept')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
<<<<<<< HEAD
                                            @csrf                     
                                            <div class="form-group">
                                                <label>Accept Reservation<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="{{ old('accept') }}" name="accept" placeholder="Accept Reservation" required>
                                                   @error("accept" )
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                           </div>
                                                  
                                            <input type="hidden" name="vist_id" value="{{$id}}">
=======
                                            @csrf


                                            <div class="card-body">
                                                <div class="tab-content">
             
                             
                                                <div class="row px-8">
                                                    <div class="col form-group">
                                                        <label> @lang('admin.message')<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" value="{{ old('accept') }}" name="accept" required>
                                                        @error("accept" )
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div> 
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2

                                            <div class="d-flex justify-content-center align-items-center">

                                            <div class="btn-group position-relative primary">
                                                <span class="wrap-text"> {{trans('admin.save')}}</span>
                                                <button type="submit" class="btn btn-primary">
                                                   {{trans('admin.save')}}
                                                </button>
                                             </div>   
                                              <div class="btn-group position-relative info">
                                               <span class="wrap-text"> {{trans('admin.back')}}</span> 
                                                <!-- <button type="button" class="btn btn-info"
                                                        onclick="history.back();">
                                                    {{trans('admin.back')}}
                                                </button> -->
                                                <a type="button" class="btn btn-info" href="{{route('reservations')}}">
                                                   {{trans('admin.back')}}
                                                </a>
                                              </div>  
                                              
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    
@stop

@section('script')
    <script>
        $('input:radio[name="type"]').change(
            function(){
                if (this.checked && this.value == '2') {  // 1 if main cat - 2 if sub cat
                    $('#cats_list').removeClass('hidden');

                }else{
                    $('#cats_list').addClass('hidden');
                }
            });
    </script>
    @stop

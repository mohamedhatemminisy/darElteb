@extends('layouts.admin')
@section('content')

   
            <div class="content-header px-1 mb-2">
                <div class="row">
                  <div class="col-12"> 
                  <div class="content-header-title">  
                      <h2 class="text-white">
                          @lang('admin.reservations')
                      </h2>
                    </div>   
                    <div class="breadcrumbs-top">
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                   <a href="{{route('admin.dashboard')}}">
                                    @lang('admin.home')
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
                                    @lang('admin.create_result')
                                    </a>
=======
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> 
                                    
                                {{trans('admin.tests')}} </a>
                                </li>
                                <li class="breadcrumb-item active">{{trans('admin.create_result')}}
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
                                    <h3> Create Result </h3>
                                  </div>
                                  <div class="btn-icons">
=======
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> {{trans('admin.create_result')}} </h4>
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
                                              action="{{route('result.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                                <div class="row">
                                                  <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <input type="hidden" name="visit_id" value="{{$id}}">
<<<<<<< HEAD
                                                        <label class="form-label">Time <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="type" value="{{ old('time') }}" name="time" placeholder="@lang('admin.time')"  onfocusin="(this.type='time')"  onfocusout="(this.type='text')">
=======
                                                        <label>{{trans('admin.time')}} <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="time" value="{{ old('time') }}" name="time">
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                        @error("time" )
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                     </div>
<<<<<<< HEAD
                                                   </div>

                                                  <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Date <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" value="{{ old('date') }}" name="date" placeholder="@lang('admin.date')" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
=======
                                                </div>
                                                <div class="row px-8">
                                                    <div class="col form-group">
                                                        <label>{{trans('admin.date')}} <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="date" value="{{ old('date') }}" name="date">
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                        @error("date" )
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                   </div> 

                                                <div class="col-lg-6 col-md-12">
                                                  <div class="form-group form-icon">
                                                    <label class="form-label">File <span class="text-danger">*</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customfile"  name="image" required>
                                                        <label class="custom-file-label  form-control" for="customfile">@lang('admin.upload_image_file')</label>
                                                    </div>

<<<<<<< HEAD
=======
                                                <div class="col form-group">
                                                    <label>{{trans('admin.file')}} <span class="text-danger">*</span></label>
                                                    <input type="file" name="file" 
                                                    placeholder="File" class="form-control">
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                    @error("file" )
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                  </div>
                                                </div>   
                                             </div>
                                                <div class="d-flex justify-content-center align-items-center">
                                                 <div class="btn-group position-relative primary">
                                                     <span class="wrap-text"> {{trans('admin.save')}}</span>  
                                                      <button type="submit" class="btn btn-primary">
                                                        {{trans('admin.save')}}
                                                      </button>
                                                  </div>    
                                                  <div class="btn-group position-relative info">
                                                     <span class="wrap-text"> {{trans('admin.back')}}</span> 
                                                     <!-- <button type="button" class="btn btn-info" onclick="history.back();">
                                                       {{trans('admin.reset')}}
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

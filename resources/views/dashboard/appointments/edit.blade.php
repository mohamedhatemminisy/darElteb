@extends('layouts.admin')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{trans('admin.home')}} </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('appointments.index')}}"> Appointment</a>
                                </li>
                                <li class="breadcrumb-item active"> {{trans('admin.edit')}} - {{$appointment -> name}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> 
                                        {{trans('admin.edit')}} {{trans('admin.countries')}} </h4>
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
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    <form action="{{Route('appointments.update',$appointment->id)}}"
                                     method="post" enctype="multipart/form-data">
                                     @method('put')
                                            @csrf

                                            <div class="card-body">
                                                <div class="row px-8">
                                                    <div class="col form-group">
                                                        <label>Day <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" value="{{old('day', $appointment->day)}}" name="day">
                                                        @error("day" )
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row px-8">
                                                    <div class="col form-group">
                                                        <label>Date <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="date" value="{{old('date', $appointment->date)}}" name="date">
                                                        @error("date" )
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div> 
                                                <div class="row px-8">
                                                    <div class="col form-group">
                                                        <label>Time <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="time" value="{{old('time', $appointment->time)}}" name="time">
                                                        @error("time" )
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> {{trans('admin.reset')}}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{trans('admin.update')}}
                                                </button>
                                            </div>
                                        </form>
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
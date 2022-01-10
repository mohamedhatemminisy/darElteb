
@extends('layouts.admin')
@section('content')

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
                                    <h4 class="card-title"> @lang('admin.Reservations')</h4>
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
                                    <div class="card-body card-dashboard">

                                    <form action="{{route('reservation_filter')}}" method="get">
                                        @csrf
                                        <div class="row mb-2">
                                          
                                            <div class="col-md-4">
                                                <label>@lang('admin.users')</label>
                                                <select name="user_id" class="form-control" id="user_id">
                                                <option value="0">@lang('admin.select_user')</option>
                                                  @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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
                                            </div>
                                     
                                        </div>
                                     </form>  

                                        <table
                                            class="table display nowrap table-striped table-bordered">
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

                                            @isset($visits )
                                                @foreach($visits as $key => $visit)
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
                        
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">
                                        {{ $visits->links('vendor.pagination.custom') }}

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

    @section('script')
    <script>
  $('#user_id').select2({
    width: '100%',
    placeholder: "Select an Option",
    allowClear: true
  });
@stop

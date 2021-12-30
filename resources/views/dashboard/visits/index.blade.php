
@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Reservations</h3>
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
                                    <h4 class="card-title"> Reservations</h4>
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
                                                <label>Users</label>
                                                <select name="user_id" class="form-control" id="user_id">
                                                <option value="0">select user</option>
                                                  @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>location</label>
                                                <select name="location" class="form-control">
                                                <option value="0">select location</option>
                                                    <option value="lab">lab</option>
                                                    <option value="home">home</option>
                                                </select>
                                            </div>
                                           
                                            <div class="col-md-4">
                                                <label>type</label>
                                                <select name="type" class="form-control">
                                                <option value="0">select type</option>
                                                    <option value="offer">offer</option>
                                                    <option value="test">test</option>
                                                </select>
                                            </div>

                                            <div class="col-md-2 mt-2">
                                                <button type="submit" class="btn btn-success btn-sm">Filtrer</button>
                                            </div>
                                     
                                        </div>
                                     </form>  

                                        <table
                                            class="table display nowrap table-striped table-bordered">
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

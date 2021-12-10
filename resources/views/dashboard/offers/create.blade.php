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
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> 
                                    
                                Offers</a>
                                </li>
                                <li class="breadcrumb-item active">Create Offer
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
                                    <h4 class="card-title" id="basic-layout-form"> Create Offer</h4>
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
                                        <form class="form"
                                              action="{{route('offers.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf


                                            <div class="card-body">
                                                <div class="tab-content">
                                                    @foreach (config('translatable.locales') as $key => $locale)
                                                        <div class="tab-pane fade show @if($key == 0) active @endif" id="{{$locale}}" role="tabpanel">
                                                            <div class="col form-group">
                                                                <label>@lang('admin.name') (@lang('admin.'.$locale))<span class="text-danger">*</span></label>
                                                                <input
                                                                    type="text"
                                                                    name="{{ $locale.'[name]' }}"
                                                                    id="{{ $locale . '[name]' }}"
                                                                    placeholder="@lang('admin.name')"
                                                                    class="form-control @error("$locale.name" ) is-invalid @enderror"
                                                                    value="{{ old($locale.'.name') }}">
                                                                    @error("$locale.name" )
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                            </div>

                                                            <div class="col form-group">
                                                                <label>@lang('admin.description')(@lang('admin.'.$locale))<span
                                                                        class="text-danger">*</span></label>
                                                                <textarea class="form-control @error($locale . '.description') is-invalid @enderror "
                                                                    type="text" name="{{ $locale . '[description]' }}" rows="4"
                                                                    id="{{ $locale }}.editor1">{{ old($locale . '.description') }}</textarea>
                                                                    @error("$locale.description" )
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                            </div>
                                                                <script>
                                                                    
                                                                    CKEDITOR.replace('{{ $locale }}.editor1', {
                                                                    extraPlugins: 'bidi',
                                                                    // Setting default language direction to right-to-left.
                                                                    contentsLangDirection: 'ltr',
                                                                    height: 270,
                                                                    scayt_customerId: '1:Eebp63-lWHbt2-ASpHy4-AYUpy2-fo3mk4-sKrza1-NsuXy4-I1XZC2-0u2F54-aqYWd1-l3Qf14-umd',
                                                                    scayt_sLang: 'auto',
                                                                    removeButtons: 'PasteFromWord'
                                                                    });
                                                                </script>
                                                         
                                                        </div>
                                                    @endforeach

                                                    <div class="col form-group">
                                                        <label>Type <span class="text-danger">*</span></label>
                                                            <select name="type" class="form-control">
                                                                <option value="laboratory">Laboratory</option>
                                                                <option value="individual">Individual</option>
                                                            </select>
                                                    </div>


                                                    <div class="col form-group">
                                                        <label>Tests <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="tests[]" id='tests' multiple>
                                                            @foreach ($tests as $test)
                                                                <option value="{{ $test->id }}" {{ old('tests') == $test->id ? 'selected' : '' }}>
                                                                    {{ $test->translate('en')->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error("tests" )
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror

                                                    <div class="col form-group">
                                                        <label>Offer Category <span class="text-danger">*</span></label>
                                                            <select name="target" class="form-control offer_type">
                                                                <option value="gender">gender</option>
                                                                <option value="age">age</option>
                                                            </select>
                                                    </div>
                                                    @error("target" )
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror

                                                    <div class="col form-group d-none" id="age">
                                                        <label>age<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="age">
                                                    </div>
                                                    @error("age" )
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                    <div class="col form-group d-none" id="gender">
                                                        <label>gender<span class="text-danger">*</span></label>
                                                        <select name="gender" class="form-control">
                                                                <option value="male">male</option>
                                                                <option value="female">female</option>
                                                            </select>
                                                        </div>
                                                   @error("gender" )
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                <div class="col form-group">
                                                    <label>@lang('admin.image') <span class="text-danger">*</span></label>
                                                    <input type="file" name="image" 
                                                    placeholder="@lang('admin.image')" class="form-control">
                                                    @error("image" )
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
                                                    <i class="la la-check-square-o"></i> {{trans('admin.save')}}
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@stop

@section('script')
    <script>
  $('#tests').select2({
    width: '100%',
    placeholder: "Select an Option",
    allowClear: true
  });
  
  $('.offer_type').on('change', function()
    {
        var form = $(this);
        var type = form.val();
        if(type == 'gender')
        {
            $('#gender').removeClass("d-none");
            $('#age').addClass("d-none");
        }
        if(type == 'age')
        {
            $('#age').removeClass("d-none");
            $('#gender').addClass("d-none");

        }
    });
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

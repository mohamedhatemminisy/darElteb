@extends('layouts.admin')

@section('content')

    
        <div class="content-header px-1 mb-2">
                <div class="row">
                    <div class="col-12">
                        <div class="content-header-title">  
                            <h2 class="text-white">{{trans('admin.offers')}} </h2>
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
                                    <a href="{{route('offers.index')}}">    
                                    {{trans('admin.offers')}} 
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a>
                                    {{trans('admin.create_offer')}}
                                   </a>
=======
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> 
                                    
                                {{trans('admin.Offers')}} </a>
                                </li>
                                <li class="breadcrumb-item active">{{trans('admin.Create_offer')}} 
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                </li>
                            </ol>
                        </div>
                    </div>
            </div>
<<<<<<< HEAD
            </div>
        </div>
        <div class="content-body">
              
                <div class="row">
                        <div class="col-12">
                            <div class="card pull-up">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                   <div class="card-title">  
                                     <h3>  {{trans('admin.create_offer')}}</h3>
                                   </div> 
                                    <div class="btn-icons">
=======
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">{{trans('admin.Create_offer')}} </h4>
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
                                              action="{{route('offers.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                               
                                                    @foreach (config('translatable.locales') as $key => $locale)
                                                        <div class="@if($key == 0) active @endif" id="{{$locale}}">
                                                            <div class="form-group">
                                                                <label class="form-label">@lang('admin.name') (@lang('admin.'.$locale))<span class="text-danger">*</span></label>
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

                                                            <div class="form-group">
                                                                <label class="form-label">@lang('admin.description')(@lang('admin.'.$locale))<span
                                                                        class="text-danger">*</span></label>
                                                                <textarea class="form-control @error($locale . '.description') is-invalid @enderror "
                                                                    type="text" name="{{ $locale . '[description]' }}" rows="4"
                                                                    id="{{ $locale }}.editor1" placeholder="@lang('admin.description')">{{ old($locale . '.description') }}</textarea>
                                                                    @error("$locale.description" )
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                            </div>
                                                            
                                                        </div>
                                                    @endforeach

<<<<<<< HEAD
                                                 <div class="row">
                                                  <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Type <span class="text-danger">*</span></label>
                                                            <select class="js-example-placeholder-single" name="type">
                                                                <option value=""></option>
                                                                <option value="laboratory">Laboratory</option>
                                                                <option value="individual">Individual</option>
=======
                                                    <div class="col form-group">
                                                        <label>{{trans('admin.type')}}  <span class="text-danger">*</span></label>
                                                            <select name="type" class="form-control">
                                                                <option value="laboratory">{{trans('admin.Laboratory')}} </option>
                                                                <option value="individual">{{trans('admin.Individual')}} </option>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                            </select>
                                                     </div>
                                                   </div>

<<<<<<< HEAD
                                                   <div class="col-lg-6 col-md-12">
                                                    <div  class="form-group">
                                                        <label class="form-label">Tests <span class="text-danger">*</span></label>
                                                        <select class="js-example-placeholder-multiple" name="tests[]" id='tests' multiple>
=======
                                                    <div class="col form-group">
                                                        <label>{{trans('admin.Tests')}} <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="tests[]" id='tests' multiple>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                            @foreach ($tests as $test)
                                                                <option value="{{ $test->id }}" {{ old('tests') == $test->id ? 'selected' : '' }}>
                                                                    {{ $test->translate('en')->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("tests" )
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                    </div>
                                                  </div>
                                                </div>
                                                   
                                                <div class="row">
                                                   <div class="col-lg-6 col-md-12">

<<<<<<< HEAD
                                                    <div class="form-group">
                                                        <label class="form-label">Offer Category <span class="text-danger">*</span></label>
                                                            <select class="js-example-placeholder-single offer_type" name="target" >
                                                                <option value=""></option>
                                                                <option value="gender">gender</option>
                                                                <option value="age">age</option>
=======
                                                    <div class="col form-group">
                                                        <label>{{trans('admin.Offer_Category')}}  <span class="text-danger">*</span></label>
                                                            <select name="target" class="form-control offer_type">
                                                                <option value="gender">{{trans('admin.gender')}}</option>
                                                                <option value="age">{{trans('admin.age')}}</option>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                            </select>
                                                            @error("target" )
                                                               <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                    </div>
                                                                
                                                   </div>

<<<<<<< HEAD
                                                    <div class="col-lg-6 col-md-12">

                                                     <div class="form-group form-icon">
                                                       <label class="form-label">@lang('admin.image') <span class="text-danger">*</span></label>
                                                          <div class="custom-file">
                                                               <input type="file" class="custom-file-input" id="customfile"  name="image" required>
                                                               <label class="custom-file-label  form-control" for="customfile">@lang('admin.upload_image_file')</label>
                                                             </div>    
                                                           @error("image" )
                                                             <span class="text-danger">{{$message}}</span>
                                                           @enderror
                                                        </div>
                                                       </div>
                                               </div>

                                                    
                                              <div class="row">
                                                  <div class="col-lg-6 col-md-12">
                                                    <div class="form-group d-none" id="age">
                                                        <label class="form-label">age<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="age"  placeholder="Age">
                                                        @error("age" )
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                    </div>
                                                   </div> 
                                                   <div class="col-lg-6 col-md-12">
                                                    <div class="form-group d-none" id="gender">
                                                        <label class="form-label">gender<span class="text-danger">*</span></label>
                                                        <select  class="js-example-placeholder-single" name="gender">
                                                                 <option value=""></option>
                                                                <option value="male">male</option>
                                                                <option value="female">female</option>
=======
                                                    <div class="col form-group d-none" id="age">
                                                        <label>{{trans('admin.age')}}<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="age">
                                                    </div>
                                                    @error("age" )
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                    <div class="col form-group d-none" id="gender">
                                                        <label>{{trans('admin.gender')}}<span class="text-danger">*</span></label>
                                                        <select name="gender" class="form-control">
                                                                <option value="male">{{trans('admin.male')}}</option>
                                                                <option value="female">{{trans('admin.female')}}</option>
>>>>>>> 864147eadec1b5efea6cb6ea997649b67aaa84c2
                                                            </select>
                                                            @error("gender" )
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
                                                    <!-- <button type="button" class="btn btn-info"
                                                        onclick="history.back();"> -->
                                                    <a class="btn btn-info"
                                                    href="{{route('offers.index')}}">
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

<script src="{{asset('assets/admin/vendors/js/editors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>


<script>




  //ckeditor
  CKEDITOR.replace('{{ $locale }}.editor1', {      
    extraPlugins: 'bidi',
   // Setting default language direction to right-to-left.
   contentsLangDirection: 'rtl',
   height: 270,
   scayt_customerId: '1:Eebp63-lWHbt2-ASpHy4-AYUpy2-fo3mk4-sKrza1-NsuXy4-I1XZC2-0u2F54-aqYWd1-l3Qf14-umd',
   scayt_sLang: 'auto',
   removeButtons: 'PasteFromWord'

  });

  //offer type
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

        //toggle radio input
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

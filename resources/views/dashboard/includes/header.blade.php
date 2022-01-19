@php
$lang = LaravelLocalization::getCurrentLocale();
@endphp

<nav
<<<<<<< HEAD
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-semi-light  navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row h-100 align-items-center justify-content-between">
                <li class="nav-item mobile-menu d-md-none">
                    <a class="nav-link nav-menu-main menu-toggle  hidden-xs">
                        <div class="menu-toggle-bar"></div>
                    </a> 
                    </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                        <img  src="{{asset('assets/admin/images/logo/logo.png')}}" class="brand-logo img-responsive lazyload" data-src="{{asset('assets/admin/images/logo/logo.png')}}" alt="Logo">
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                     <i class="la la-ellipsis-v" aria-hidden="true"></i></a>
=======
class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-semi-light  navbar-shadow">
<div class="navbar-wrapper">
    <div class="navbar-header d-none">
        <ul class="nav navbar-nav flex-row align-items-center h-100">
            <li class="nav-item mobile-menu d-md-none mr-auto">
                <a class="nav-link nav-menu-main menu-toggle  hidden-xs">
                    <div class="menu-toggle-bar"></div>
                </a> 
            </li>
            <li class="nav-item">
                <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                    <img  src="{{asset('assets/admin/images/logo/logo.png')}}" class="brand-logo img-responsive lazyload" data-src="{{asset('assets/admin/images/logo/logo.png')}}" alt="Logo">
                </a>
            </li>
            <li class="nav-item d-md-none">
                <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                    <i class="la la-ellipsis-v" aria-hidden="true"></i></a>
>>>>>>> ead9f63c9fb5c63697fee284ad4473efa534c8b9
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse justify-content-between" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle  hidden-xs">
<<<<<<< HEAD
                           <div class="menu-toggle-bar"></div>
                        </a> 
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{asset('assets/admin/images/portfolio/user-profile.png')}}" class="img-responsive lazyload" data-src="{{asset('assets/admin/images/portfolio/user-profile.png')}}" alt="" />
                            </span>
                            <span class="user-name text-bold-700">
                                 {{auth('admin') -> user() -> name}}      
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('edit.profile')}}">
                                <i class="ft-user" aria-hidden="true"></i> 
                                {{trans('admin.edit_profile')}}
                            </a>
                            <a class="dropdown-item lang-en">
                               <i class="las la-globe la-lg" aria-hidden="true"></i>
                               @lang('admin.en')                                       
                            </a>
                            <a class="dropdown-item lang-ar">
                             <i class="las la-globe la-lg" aria-hidden="true"></i>
                              @lang('admin.ar')                                      
                            </a>
                            <a class="dropdown-item" href="{{route('admin.logout')}}">
                                <i class="ft-power" aria-hidden="true"></i>
                                {{trans('admin.logout')}} 
                            </a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
=======
                         <div class="menu-toggle-bar"></div>
                     </a> 
                 </li>
             </ul>
             <ul class="nav navbar-nav">
                <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link d-flex align-items-center" href="#" data-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{asset('assets/admin/images/portfolio/user-profile.png')}}" class="img-responsive lazyload" data-src="{{asset('assets/admin/images/portfolio/user-profile.png')}}" alt="" />
                        </span>
                        <span class="user-name text-bold-700">
                           {{auth('admin') -> user() -> name}}      
                       </span>
                   </a>
                   <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('edit.profile')}}">
                        <i class="ft-user" aria-hidden="true"></i> 
                        {{trans('admin.edit_profile')}}
                    </a>
                    <a class="dropdown-item" href="{{route('admin.logout')}}">
                        <i class="ft-power" aria-hidden="true"></i>
                        {{trans('admin.logout')}} 
                    </a>
                    @if ($lang == 'ar')
                    <a href="{{  LaravelLocalization::getLocalizedURL('en') }}" class="dropdown-item lang-en">
                        <i class="las la-globe la-lg" aria-hidden="true"></i>
                        @lang('admin.en')                                       
                    </a>
                    @else

                    <a href="{{  LaravelLocalization::getLocalizedURL('ar') }}" class="dropdown-item lang-ar">
                        <i class="las la-globe la-lg" aria-hidden="true"></i>
                        @lang('admin.ar')                                      
                    </a>
                    @endif
                </div>
            </li>
        </ul>
>>>>>>> ead9f63c9fb5c63697fee284ad4473efa534c8b9
    </div>
</div>
</div>
</nav>

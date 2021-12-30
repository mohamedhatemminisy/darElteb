<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


        <li class=" nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-arrows-h"></i><span class="menu-title"
                      data-i18n="nav.horz_nav.main">{{trans('admin.home')}}</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title"
         data-i18n="nav.horz_nav.main">{{trans('admin.countries')}}</span></a>
            <ul class="menu-content">
            <li><a class="menu-item" href="{{route('countries.create')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        {{trans('admin.create_country')}}</a>

                </li>
                <li><a class="menu-item" href="{{route('countries.index')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        {{trans('admin.show_countries')}}</a>

                </li>
            </ul>
        </li>

        <li class=" nav-item"><a href="{{route('users')}}"><i class="la la-arrows-h"></i><span class="menu-title"
                      data-i18n="nav.horz_nav.main">{{trans('admin.users')}}</span></a>
        </li>
        

        <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title"
         data-i18n="nav.horz_nav.main">Appointments</span></a>
            <ul class="menu-content">
            <li><a class="menu-item" href="{{route('appointments.create')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        Create appointment</a>
                </li>
                <li><a class="menu-item" href="{{route('appointments.index')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        Show appointments</a>

                </li>
            </ul>
        </li>

        <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title"
         data-i18n="nav.horz_nav.main">{{trans('admin.tests')}}</span></a>
            <ul class="menu-content">
            <li><a class="menu-item" href="{{route('tests.create')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        {{trans('admin.create_test')}}</a>
                </li>
            <li><a class="menu-item" href="{{route('upload_csv')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        {{trans('admin.upload_csv')}}</a>
                </li>
                <li><a class="menu-item" href="{{route('tests.index')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        {{trans('admin.show_tests')}}</a>

                </li>
            </ul>
        </li>


        <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title"
         data-i18n="nav.horz_nav.main">Offers</span></a>
            <ul class="menu-content">
            <li><a class="menu-item" href="{{route('offers.create')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        Create offer</a>
                </li>
                <li><a class="menu-item" href="{{route('offers.index')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                        Show offers</a>

                </li>
            </ul>
        </li>

        <li class=" nav-item"><a href="#"><i class="la la-arrows-h"></i><span class="menu-title"
         data-i18n="nav.horz_nav.main">Reservations</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{route('reservations')}}" data-i18n="nav.horz_nav.horizontal_navigation_types.main">
                Reservations</a>
                </li>
            </ul>
        </li>

        <li class=" nav-item"><a href="{{route('contact')}}"><i class="la la-arrows-h"></i><span class="menu-title"
                      data-i18n="nav.horz_nav.main">{{trans('admin.contact')}}</span></a>
        </li>
        </ul>
    </div>
</div>

<div class="d-none d-lg-block col-2">
    <div class="nav nav-pills nav-vertical">
        <h6 class="dropdown-header">{{ __('admin.menu.settings') }} </h6>
        <li class="nav-item">
            <a href="{{ route('admin.settings') }}" class="nav-link {{ request()->routeIs('admin.settings') ?  'active' : '' }}">
                <i class="fa fa-cog"></i>
                &nbsp; {{ __('admin.menu.general_settings') }}
            </a>
        </li>
        <a href="{{ route('admin.settings.emailconfig') }}" class="dropdown-item {{ request()->routeIs('admin.settings.emailconfig') ?  'active' : '' }}">
            <i class="fa fa-envelope"></i>
            &nbsp; {{ __('admin.menu.email_settings') }}
        </a>
        <a href="{{ route('admin.settings.paypalconfig') }}" class="dropdown-item {{ request()->routeIs('admin.settings.paypalconfig') ?  'active' : '' }}">
            <i class="fa fa-money"></i>
            &nbsp; {{ __('admin.menu.paypal_settings') }}
        </a>
        <a href="{{ route('admin.settings.creditconfig') }}" class="dropdown-item {{ request()->routeIs('admin.settings.creditconfig') ?  'active' : '' }}">
            <i class="fa fa-money"></i>
            &nbsp; {{ __('admin.menu.credit_settings') }}
        </a>
        <a href="{{ route('admin.settings.timetable') }}" class="dropdown-item {{ request()->routeIs('admin.settings.timetable') ?  'active' : '' }}">
            <i class="fa fa-calendar"></i>
            &nbsp; {{ __('admin.menu.work_time_table') }}
        </a>
    </div>
  </div>

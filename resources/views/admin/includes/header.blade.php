<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark">
            <a href="#!">
              <!-- <img src="./static/logo-white.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
              Tunning Site
            </a>
          </h1>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
              <li class="nav-item {{ request()->routeIs('admin.dashboard') ?  'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard')  }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="fa fa-tachometer"></i>
                  </span>
                  <span class="nav-link-title">
                    {{ __('admin.menu.dashboard') }}
                  </span>
                </a>
              </li>






                <li class="nav-item dropdown {{ request()->routeIs('admin.users') || request()->routeIs('admin.roles') || request()->routeIs('admin.settings') ?  'active' : '' }}">
                <a class="nav-link dropdown-toggle {{ request()->routeIs('admin.users') || request()->routeIs('admin.roles') || request()->routeIs('admin.settings') ?  'show' : '' }}" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                 </svg>
                  </span>
                  <span class="nav-link-title">
                    {{ __('admin.menu.system_settings') }}
                  </span>
                </a>

                <div class="dropdown-menu {{ request()->routeIs('admin.users') ||  request()->routeIs('admin.email.templates') || request()->routeIs('admin.roles') || request()->routeIs('admin.settings') ?  'show' : '' }}">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <a class="dropdown-item {{ request()->routeIs('admin.users') ?  'active' : '' }}" href="{{ route('admin.users') }}" >
                        {{ __('admin.menu.manage_users') }}
                      </a>
                      <a class="dropdown-item {{ request()->routeIs('admin.roles') ?  'active' : '' }}" href="{{ route('admin.roles') }}" >
                        {{ __('admin.menu.manage_roles') }}
                      </a>
                      <a class="dropdown-item {{ request()->routeIs('admin.settings') ?  'active' : '' }}" href="{{ route('admin.settings') }}" >
                        {{ __('admin.menu.manage_settings') }}
                      </a>

                      <a class="dropdown-item {{ request()->routeIs('admin.email.templates') ?  'active' : '' }}" href="{{ route('admin.email.templates') }}" >
                        {{ __('admin.menu.email_templates') }}
                      </a>

                    </div>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </aside>

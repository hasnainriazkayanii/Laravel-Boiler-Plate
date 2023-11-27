<header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown d-none d-md-flex me-3">
               <a href="#" class="nav-link d-flex  lh-1 text-reset dropdown-toggle p-0" data-toggle="dropdown" data-bs-toggle="dropdown"
                    aria-label="Open user menu" aria-expanded="true">
                    <i class="fa fa-flag mt-1"></i>&nbsp; Language
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-popper="none">
                <a href="{{ route('language','en') }}"
                    class="dropdown-item {{ session('locale')=="en"?'active':'' }}"><span class="flag-icon flag-icon-gb"></span>&nbsp;English</a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('language','ge') }}"
                    class="dropdown-item {{ session('locale')=="ge"?'active':'' }}"><span class="flag-icon flag-icon-gr"></span> &nbsp;German</a>
            </div>
            </div>

            <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div> {{ Auth::guard('admin')->user()->name }}</div>
                        <div class="mt-1 small text-muted">Admin</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="{{ route('admin.profile') }}"
                        class="dropdown-item">{{ __('admin.menu.profile') }}</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('admin.logout') }}"
                        class="dropdown-item">{{ __('admin.buttons.logout') }}</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div>

            </div>
        </div>
    </div>
</header>
<div class="content">

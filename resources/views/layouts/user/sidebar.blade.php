<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- User menu -->
        {{-- <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media">
                    <div class="media-body text-center">
                        <div class="navbar-brand text-center text-lg-left">
                            <a href="{{ route('dashboard') }}" class="d-inline-block">
                                <img src="{{ asset('/admin/logo/logo_1.png') }}" class="d-none d-sm-block new"
                                    alt="">
                                <img src="{{ asset('/admin/logo/logo_1.png') }}" class="d-sm-none" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <button type="button"
                            class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                            <i class="icon-cross2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- /user menu -->
        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                        title="Main"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
                        <i class="icon-pie-chart fa fa-fw"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
                        <i class="fas fa-user-tie"></i> 
                        
                        <span>
                            Poster
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('user.hustler') }}" class="nav-link {{ request()->is('hustler*') ? 'active' : '' }}">
                        {{-- <i class="icon-users4 fa fa-fw"></i> --}}
                        <i class="fas fa-user-alt"></i>
                        <span>
                            Hustler
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('job.index') }}" class="nav-link {{ request()->is('job*') ? 'active' : '' }}">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <span>
                            Jobs
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('category') }}"
                        class="nav-link {{ request()->is('category*') ? 'active' : '' }}">
                        <i class="icon-paw fa fa-fw"></i>
                        <span>
                            Job Category
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('payment') }}" class="nav-link {{ request()->is('payment*') ? 'active' : '' }}">
                        <i class="icon-coin-dollar fa fa-fw"></i>
                        <span>
                            Payments
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('transfer') }}" class="nav-link {{ request()->is('transfer*') ? 'active' : '' }}">
                        <i class="icon-coin-dollar fa fa-fw"></i>
                        <span>
                            Transfer
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('settings') }}"
                        class="nav-link {{ request()->is('setting*') ? 'active' : '' }}">
                        <i class="icon-equalizer fa fa-fw"></i>
                        <span>
                            Settings
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('terms-conditions') }}"
                        class="nav-link {{ request()->is('terms*') ? 'active' : '' }}">
                        <i class="icon-clipboard fa fa-fw"></i>
                        <span>
                            Terms & Conditions
                        </span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="icon-switch2 fa fa-fw"></i>
                        <span>
                            Logout
                        </span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>
<style>
</style>
<!-- /main sidebar -->

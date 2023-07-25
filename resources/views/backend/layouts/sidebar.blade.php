@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('public') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Brainery IT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item {{ $route == 'dashboard' ||   $prefix == '/user'  ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ $route == 'dashboard' ||   $prefix == '/user'  ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link {{ $route == 'dashboard'  ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        {{--  <li class="nav-item">
                            <a href="{{ route('user.view') }}" class="nav-link {{  $prefix == '/user'  ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>  --}}
                        {{--  <li class="nav-item">
                            <a href="{{ route('logo.view') }}" class="nav-link {{ $route == 'logo.view' || $route == 'logo.add' || $route == 'logo.edit' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logo</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about.view') }}" class="nav-link {{ $route == 'about.view' || $route == 'about.add' || $route == 'about.edit' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('features.view') }}" class="nav-link {{ $route == 'features.view' || $route == 'features.add' || $route == 'features.edit' ? 'active' : '' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Features</p>
                            </a>
                        </li>  --}}
                    </ul>

                </li>

                <li class="nav-item {{ $prefix == '/about' || $prefix == '/features' || $prefix == '/videos' || $prefix == '/services' || $prefix == '/portfolios'  || $prefix == '/courses' || $prefix == '/logo' || $prefix == '/slider' || $prefix == '/testimonial'? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ $prefix == '/about' || $prefix == '/features' || $prefix == '/videos' || $prefix == '/services' || $prefix == '/portfolios'  || $prefix == '/courses' || $prefix == '/logo' || $prefix == '/slider' || $prefix == '/testimonial' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Setup
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{--  <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link {{ $route == 'dashboard'  ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>  --}}
                        <li class="nav-item">
                            <a href="{{ route('logo.view') }}" class="nav-link {{ $route == 'logo.view' || $route == 'logo.add' || $route == 'logo.edit' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.view') }}" class="nav-link {{ $route == 'slider.view' || $route == 'slider.add' || $route == 'slider.edit' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about.view') }}" class="nav-link {{ $route == 'about.view' || $route == 'about.add' || $route == 'about.edit' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('features.view') }}" class="nav-link {{ $route == 'features.view' || $route == 'features.add' || $route == 'features.edit' ? 'active' : '' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Features</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services.view') }}" class="nav-link {{ $route == 'services.view' || $route == 'services.add' || $route == 'services.edit' ? 'active' : '' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('courses.view') }}" class="nav-link {{ $route == 'courses.view' || $route == 'courses.add' || $route == 'courses.edit' ? 'active' : '' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Courses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('videos.view') }}" class="nav-link {{ $route == 'videos.view' || $route == 'videos.add' || $route == 'videos.edit' ? 'active' : '' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Videos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfolios.view') }}" class="nav-link {{ $route == 'portfolios.view' || $route == 'portfolios.add' || $route == 'portfolios.edit' ? 'active' : '' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Portfolio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('testimonial.view') }}" class="nav-link {{ $prefix == '/testimonial' ? 'active' : '' }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Testimonial</p>
                            </a>
                        </li>
                    </ul>

                </li>







                <li class="nav-item">

                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                        <p class="text" style="color: orangered; font-weight: bold; font-size: 20px"> <i
                                class="nav-icon far fa-circle text-danger"></i> Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->

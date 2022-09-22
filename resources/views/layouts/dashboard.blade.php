<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    @stack('prepend-style')
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link href="{{ url('style/main.css') }}" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,200&display=swap"
            rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/now-ui-dashboard.css?v=1.0.1') }}" rel="stylesheet" />
    @stack('addon-style')

  </head>
<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="green">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo" style="background-color: #1e3d62">
                <a href="{{ route('home') }}" class="simple-text logo-normal">
                    <h5><b><img src="{{ asset('images/logo.png') }}" style="width: 35px">PERPUS</b></h5>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ (request()->is('dashboard-profile*')) ? 'active' : '' }}">
                        <a href="{{ route('dashboard-profile') }}" >
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Icons</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="user-icon">
                                        <img src="{{asset('storage/'. Auth::user()->avatar )}}"
                                            width="128px"
                                            alt=""
                                            style="border:1px solid; border-radius:50%; width:50px; height:50px;">
                                    </span>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Edit Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
@stack('prepend-script')
    <script src="{{ asset('/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/js/now-ui-dashboard.js?v=1.0.1') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </scr>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
@stack('addon-script')
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    @stack('prepend-style')

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>

        {{--  <!-- Site favicon -->  --}}
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('vendors/images/logo2.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('vendors/images/logo2.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('vendors/images/logo2.png') }}">

        {{--  <!-- Mobile Specific Metas -->  --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        {{--  <!-- Google Font -->  --}}
        <link href="{{ url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap') }}"
            rel="stylesheet">

        {{--  <!-- CSS -->  --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'UA-119386393-1');
        </script>
    @stack('addon-style')
  </head>

  <body>
        {{--  <!-- Loading -->  --}}
        <div class="pre-loader">
            <div class="pre-loader-box">
                <div class="loader-logo"><img src="{{ URL::asset('images/logo.png') }}" style="max-height: 170px" alt=""></div>
                <div class='loader-progress' id="progress_div">
                    <div class='bar' id='bar1'></div>
                </div>
                <div class='percent' id='percent1'>0%</div>
                <div class="loading-text">
                    Loading...
                </div>
            </div>
        </div>

    {{--  <!-- Navbar -->  --}}
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>

		<div class="header-right">
			{{--  <!-- User Dropdown -->  --}}
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
                            <img src="{{asset('storage/'. Auth::user()->avatar )}}"
                                width="128px"
                                alt=""
                                style="border:1px solid; border-radius:50%; width:50px; height:50px;">
						</span>
						<span class="user-name">{{ Auth::user()->name }}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="{{route('dashboard-profile')}}"><i class="dw dw-settings2"></i> Setting</a>
						<div>
                            <a class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="dw dw-logout"></i>
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

        {{--  <!-- left Sidebar -->  --}}
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="{{ route('home') }}">
				<img src="{{ asset('images/logo1.png') }}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li>
                                <a href="{{ route('admin-dashboard') }}" class="{{ (request()->is('admin')) ? 'active' : '' }}">
                                    Dashboard
                                </a>
                            </li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Forms & Table</span>
						</a>
						<ul class="submenu">
							<li>
                                <a href="{{ route('category.index') }}" class=" {{ (request()->is('admin/category*')) ? 'active' : '' }}">
                                    Form Create Categories
                                </a>
                            </li>
							<li>
                                <a href="{{ route('user.index') }}" class=" {{ (request()->is('admin/user*')) ? 'active' : '' }}">
                                    Form Create Users
                                </a>
                            </li>
							<li>
                                <a href="{{ route('book.index') }}" class=" {{ (request()->is('admin/book*')) ? 'active' : '' }}">
                                    Form Create Books
                                </a>
                            </li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Poster</span>
						</a>
						<ul class="submenu">
							<li>
                                <a href="{{ route('poster.index') }}" class="{{ (request()->is('admin/poster')) ? 'active' : '' }}">
                                    Poster
                                </a>
                            </li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Daftar Tamu</span>
						</a>
						<ul class="submenu">
							<li>
                                <a href="{{ route('tamu.index') }}" class="{{ (request()->is('admin/tamu')) ? 'active' : '' }}">
                                    Daftar Tamu
                                </a>
                            </li>
						</ul>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
                    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user"></span><span class="mtext">User</span>
						</a>
						<ul class="submenu">
							<li><a href="{{ route('dashboard-profile') }}">Profile</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>
    @yield('content')

  </body>
{{--  <!-- Bootstrap core JavaScript -->  --}}
    @stack('prepend-script')

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
    <!-- js -->
	<script type="text/javascript" src="{{ asset('vendors/scripts/core.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendors/scripts/script.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendors/scripts/process.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>

	<script type="text/javascript" src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('vendors/scripts/dashboard.js') }}"></script>
    <script src="https://kit.fontawesome.com/5da34a61e8.js" crossorigin="anonymous"></script>

    @stack('addon-script')
</html>

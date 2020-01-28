<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body><!-- Begin page -->
<div id="wrapper"><!-- Top Bar Start -->
    <div class="topbar"><!-- LOGO -->
        <div class="topbar-left">
            <a href="{{ route('home') }}" class="logo"><span><img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="18"> </span><i><img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22"></i></a>
        </div>
        <nav class="navbar-custom">
            <ul class="navbar-right list-inline float-right mb-0">
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <form role="search" class="app-search">
                        <div class="form-group mb-0"><input type="text" class="form-control" placeholder="Поиск..">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li><!-- language-->
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen"><i class="mdi mdi-fullscreen noti-icon"></i></a>
                </li><!-- notification -->
                <li class="dropdown notification-list list-inline-item">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown"><!-- item-->
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Профиль</a>
                            <a class="dropdown-item d-block" href="#"><i class="mdi mdi-settings m-r-5"></i>
                                Настройки</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i>
                                Выход</a></div>
                    </div>
                </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button>
                </li>

            </ul>
        </nav>
    </div><!-- Top Bar End --><!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll"><!--- Sidemenu -->
            <div id="sidebar-menu"><!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Главное</li>
                    <li>
                        <a href="{{ route('dashboard') }}" class="waves-effect{{request()->routeIs('dashboard') ? ' mm-active' : ''}}"><i class="ti-home"></i>
                            <span>Рабочий стол</span></a></li>
                    <li>
                        <a href="{{ route('order_list') }}" class="waves-effect{{request()->routeIs('order_list') ? ' mm-active' : ''}}"><i class="ti-calendar"></i><span> Заявки</span></a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="ti-calendar"></i><span> Календарь</span></a>
                    </li>
                </ul>
            </div><!-- Sidebar -->
            <div class="clearfix"></div>
        </div><!-- Sidebar -left --></div><!-- Left Sidebar End -->
    <!-- ============================================================== --><!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page"><!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-12"><h4 class="page-title">Рабочий стол</h4>
                        </div>
                    </div>
                </div><!-- end row -->
                @yield('content')
            </div><!-- container-fluid -->
        </div><!-- content -->
        <footer class="footer">© 2019 Laralend
            <span class="d-none d-sm-inline-block">- сделано с <i class="mdi mdi-heart text-danger"></i> в Deadline</span>.
        </footer>
    </div><!-- ============================================================== --><!-- End Right content here -->
    <!-- ============================================================== --></div><!-- END wrapper --><!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/waves.min.js') }}"></script><!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico"><!--Chartist Chart CSS -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body><!-- Begin page -->
<div id="wrapper"><!-- Top Bar Start -->
    <div class="topbar"><!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo"><span><img src="assets/images/logo-light.png" alt="" height="18"> </span><i><img src="assets/images/logo-sm.png" alt="" height="22"></i></a>
        </div>
        <nav class="navbar-custom">
            <ul class="navbar-right list-inline float-right mb-0">
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <form role="search" class="app-search">
                        <div class="form-group mb-0"><input type="text" class="form-control" placeholder="Search..">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li><!-- language-->
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt="">
                        English <span class="mdi mdi-chevron-down"></span></a>
                    <div class="dropdown-menu dropdown-menu-right language-switch">
                        <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16"><span>German </span></a><a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16"><span>Italian </span></a><a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16"><span>French </span></a><a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16"><span>Spanish </span></a><a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16"><span>Russian</span></a>
                    </div>
                </li><!-- full screen -->
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen"><i class="mdi mdi-fullscreen noti-icon"></i></a>
                </li><!-- notification -->
                <li class="dropdown notification-list list-inline-item">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="mdi mdi-bell-outline noti-icon"></i>
                        <span class="badge badge-pill badge-danger noti-icon-badge">3</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg"><!-- item-->
                        <h6 class="dropdown-item-text">Notifications (258)</h6>
                        <div class="slimscroll notification-item-list"><!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                </p></a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i></div>
                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                </p></a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span>
                                </p></a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span>
                                </p></a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span>
                                </p></a></div><!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all
                            <i class="fi-arrow-right"></i></a></div>
                </li>
                <li class="dropdown notification-list list-inline-item">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown"><!-- item-->
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i>
                                Settings</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock
                                screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i>
                                Logout</a></div>
                    </div>
                </li>
            </ul>
            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button>
                </li>
                <li class="d-none d-sm-block">
                    <div class="dropdown pt-3 d-inline-block">
                        <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something
                                else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a></div>
                    </div>
                </li>
            </ul>
        </nav>
    </div><!-- Top Bar End --><!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll"><!--- Sidemenu -->
            <div id="sidebar-menu"><!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Main</li>
                    <li>
                        <a href="index.html" class="waves-effect"><i class="ti-home"></i><span class="badge badge-primary badge-pill float-right">2</span>
                            <span>Dashboard</span></a></li>
                    <li>
                        <a href="calendar.html" class="waves-effect"><i class="ti-calendar"></i><span> Calendar</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Email Read</a></li>
                            <li><a href="email-compose.html">Email Compose</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Components</li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-package"></i> <span>UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-images.html">Images</a></li>
                            <li><a href="ui-lightbox.html">Lightbox</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-rangeslider.html">Range Slider</a></li>
                            <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-video.html">Video</a></li>
                            <li><a href="ui-general.html">General</a></li>
                            <li><a href="ui-colors.html">Colors</a></li>
                            <li><a href="ui-rating.html">Rating</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-receipt"></i><span> Forms <span class="badge badge-pill badge-success float-right">9</span></span></a>
                        <ul class="submenu">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-editors.html">Form Editors</a></li>
                            <li><a href="form-uploads.html">Form File Upload</a></li>
                            <li><a href="form-xeditable.html">Form Xeditable</a></li>
                            <li><a href="form-repeater.html">Form Repeater</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="charts-morris.html">Morris Chart</a></li>
                            <li><a href="charts-chartist.html">Chartist Chart</a></li>
                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="charts-flot.html">Flot Chart</a></li>
                            <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                            <li><a href="charts-echart.html">E - Chart</a></li>
                            <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-view-grid"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Table</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-face-smile"></i>
                            <span>Icons <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="icons-material.html">Material Design</a></li>
                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                            <li><a href="icons-ion.html">Ion Icons</a></li>
                            <li><a href="icons-themify.html">Themify Icons</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-location-pin"></i><span> Maps <span class="badge badge-pill badge-danger float-right">2</span></span></a>
                        <ul class="submenu">
                            <li><a href="maps-google.html">Google Map</a></li>
                            <li><a href="maps-vector.html">Vector Map</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-archive"></i><span> Authentication <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="pages-login.html">Login 1</a></li>
                            <li><a href="pages-login-2.html">Login 2</a></li>
                            <li><a href="pages-register.html">Register 1</a></li>
                            <li><a href="pages-register-2.html">Register 2</a></li>
                            <li><a href="pages-recoverpw.html">Recover Password 1</a></li>
                            <li><a href="pages-recoverpw-2.html">Recover Password 2</a></li>
                            <li><a href="pages-lock-screen.html">Lock Screen 1</a></li>
                            <li><a href="pages-lock-screen-2.html">Lock Screen 2</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-support"></i><span> Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="pages-timeline.html">Timeline</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-directory.html">Directory</a></li>
                            <li><a href="pages-blank.html">Blank Page</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-gallery.html">Gallery</a></li>
                            <li><a href="pages-maintenance.html">Maintenance</a></li>
                            <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                            <li><a href="pages-faq.html">Faq</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-bookmark-alt"></i><span> Email Templates <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="submenu">
                            <li><a href="email-template-basic.html">Basic Action Email</a></li>
                            <li><a href="email-template-Alert.html">Alert Email</a></li>
                            <li><a href="email-template-Billing.html">Billing Email</a></li>
                        </ul>
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
                        <div class="col-sm-6"><h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                            </ol>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-settings mr-2"></i> Settings
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/01.png" alt=""></div>
                                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Orders</h5>
                                    <h4 class="font-500">1,685 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    <div class="mini-stat-label bg-success"><p class="mb-0">+ 12%</p></div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0">Since last month</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/02.png" alt=""></div>
                                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Revenue</h5>
                                    <h4 class="font-500">52,368 <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                                    <div class="mini-stat-label bg-danger"><p class="mb-0">- 28%</p></div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0">Since last month</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/03.png" alt=""></div>
                                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Average Price</h5>
                                    <h4 class="font-500">15.8 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    <div class="mini-stat-label bg-info"><p class="mb-0">00%</p></div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0">Since last month</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/04.png" alt=""></div>
                                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Product Sold</h5>
                                    <h4 class="font-500">2436 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    <div class="mini-stat-label bg-warning"><p class="mb-0">+ 84%</p></div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0">Since last month</p></div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body"><h4 class="mt-0 header-title mb-5">Monthly Earning</h4>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div>
                                            <div id="chart-with-area" class="ct-chart earning ct-golden-section"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="text-center"><p class="text-muted mb-4">This month</p><h4>
                                                        $34,252</h4>
                                                    <p class="text-muted mb-5">It will be as simple as in fact it will
                                                        be occidental.</p>
                                                    <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">4/5</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-center"><p class="text-muted mb-4">Last month</p><h4>
                                                        $36,253</h4>
                                                    <p class="text-muted mb-5">It will be as simple as in fact it will
                                                        be occidental.</p>
                                                    <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">3/5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row --></div>
                        </div><!-- end card --></div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div><h4 class="mt-0 header-title mb-4">Sales Analytics</h4></div>
                                <div class="wid-peity mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div><p class="text-muted">Online</p><h5 class="mb-4">1,542</h5></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wid-peity mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div><p class="text-muted">Offline</p><h5 class="mb-4">6,451</h5></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div><p class="text-muted">Marketing</p><h5>84,574</h5></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body"><h4 class="mt-0 header-title mb-4">Sales Report</h4>
                                <div class="cleafix"><p class="float-left">
                                        <i class="mdi mdi-calendar mr-1 text-primary"></i> Jan 01 - Jan 31</p>
                                    <h5 class="font-18 text-right">$4230</h5></div>
                                <div id="ct-donut" class="ct-chart wid"></div>
                                <div class="mt-4">
                                    <table class="table mb-0">
                                        <tbody>
                                        <tr>
                                            <td><span class="badge badge-primary">Desk</span></td>
                                            <td>Desktop</td>
                                            <td class="text-right">54.5%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge badge-success">Mob</span></td>
                                            <td>Mobile</td>
                                            <td class="text-right">28.0%</td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge badge-warning">Tab</span></td>
                                            <td>Tablets</td>
                                            <td class="text-right">17.5%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body"><h4 class="mt-0 header-title mb-4">Activity</h4>
                                <ol class="activity-feed">
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 22</span>
                                            <span class="activity-text">Responded to need “Volunteer Activities”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 20</span>
                                            <span class="activity-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui deleniti atque...<a href="#" class="text-success">Read more</a></span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 19</span>
                                            <span class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 17</span>
                                            <span class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list"><span class="date">Jan 16</span>
                                            <span class="activity-text">Sed ut perspiciatis unde omnis iste natus error sit rem.</span>
                                        </div>
                                    </li>
                                </ol>
                                <div class="text-center"><a href="#" class="btn btn-primary">Load More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="py-4">
                                            <i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                                            <h5 class="text-primary mt-4">Order Successful</h5>
                                            <p class="text-muted">Thanks you so much for your order.</p>
                                            <div class="mt-4"><a href="" class="btn btn-primary btn-sm">Chack Status</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="text-center text-white py-4">
                                            <h5 class="mt-0 mb-4 text-white-50 font-16">Top Product Sale</h5>
                                            <h1>1452</h1>
                                            <p>Computer</p>
                                            <p class="text-white-50 mb-0">At solmen va esser necessi far uniform myth...
                                                <a href="#" class="text-white">View more</a></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body"><h4 class="mt-0 header-title mb-4">Client Reviews</h4>
                                        <p class="text-muted mb-5">" Everyone realizes why a new common language would
                                            be desirable one could refuse to pay expensive translators it would be
                                            necessary. "</p>
                                        <div class="float-right mt-2">
                                            <a href="#" class="text-primary"><i class="mdi mdi-arrow-right h5"></i></a>
                                        </div>
                                        <h6 class="mb-0">
                                            <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                            James Athey</h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body"><h4 class="mt-0 header-title mb-4">Latest Trasaction</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">(#) Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col" colspan="2">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">#14256</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle mr-2">
                                                    Philip Smead
                                                </div>
                                            </td>
                                            <td>15/1/2018</td>
                                            <td>$94</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14257</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-3.jpg" alt="" class="thumb-md rounded-circle mr-2">
                                                    Brent Shipley
                                                </div>
                                            </td>
                                            <td>16/1/2019</td>
                                            <td>$112</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14258</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-4.jpg" alt="" class="thumb-md rounded-circle mr-2">
                                                    Robert Sitton
                                                </div>
                                            </td>
                                            <td>17/1/2019</td>
                                            <td>$116</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14259</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-5.jpg" alt="" class="thumb-md rounded-circle mr-2">
                                                    Alberto Jackson
                                                </div>
                                            </td>
                                            <td>18/1/2019</td>
                                            <td>$109</td>
                                            <td><span class="badge badge-danger">Cancel</span></td>
                                            <td>
                                                <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14260</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-6.jpg" alt="" class="thumb-md rounded-circle mr-2">
                                                    David Sanchez
                                                </div>
                                            </td>
                                            <td>19/1/2019</td>
                                            <td>$120</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body"><h4 class="mt-0 header-title mb-4">Chat</h4>
                                <div class="chat-conversation">
                                    <ul class="conversation-list slimscroll" style="max-height: 400px;">
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-2.jpg" alt="male">
                                                <span class="time">10:00</span></div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap"><span class="user-name">John Deo</span>
                                                    <p>Hello!</p></div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-3.jpg" alt="Female">
                                                <span class="time">10:01</span></div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap"><span class="user-name">Smith</span>
                                                    <p>Hi, How are you? What about our next meeting?</p></div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-2.jpg" alt="male">
                                                <span class="time">10:04</span></div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap"><span class="user-name">John Deo</span>
                                                    <p>Yeah everything is fine</p></div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-3.jpg" alt="male">
                                                <span class="time">10:05</span></div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap"><span class="user-name">Smith</span>
                                                    <p>Wow that's great</p></div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="assets/images/users/user-3.jpg" alt="male">
                                                <span class="time">10:08</span></div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap"><span class="user-name mb-2">Smith</span>
                                                    <img src="assets/images/small/img-1.jpg" alt="" height="48px" class="rounded mr-2">
                                                    <img src="assets/images/small/img-2.jpg" alt="" height="48px" class="rounded">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-sm-9 col-8 chat-inputbar">
                                            <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                        </div>
                                        <div class="col-sm-3 col-4 chat-send">
                                            <button type="submit" class="btn btn-success btn-block">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row --></div><!-- container-fluid --></div><!-- content -->
        <footer class="footer">© 2019 Veltrix
            <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
        </footer>
    </div><!-- ============================================================== --><!-- End Right content here -->
    <!-- ============================================================== --></div><!-- END wrapper --><!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.min.js"></script><!--Chartist Chart-->
<script src="../plugins/chartist/js/chartist.min.js"></script>
<script src="../plugins/chartist/js/chartist-plugin-tooltip.min.js"></script><!-- peity JS -->
<script src="../plugins/peity-chart/jquery.peity.min.js"></script>
<script src="assets/pages/dashboard.js"></script><!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>

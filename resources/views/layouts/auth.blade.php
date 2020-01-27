<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="home-btn d-none d-sm-block"><a href="{{ route('home') }}" class="text-dark"><i class="fas fa-home h2"></i></a></div>
<div class="wrapper-page">

    <div class="card overflow-hidden account-card mx-3">
        <div class="bg-primary p-4 text-white text-center position-relative"><h4 class="font-20 m-b-5">Welcome Back
                !</h4>
            <p class="text-white-50 mb-4">Sign in to continue to Veltrix.</p><a href="{{ route('home') }}"
                                                                                class="logo logo-admin"><img
                    src="assets/images/logo-sm.png" height="24" alt="logo"></a></div>
        <div class="account-card-content">

            @yield('content')

        </div>
    </div>


</div><!-- end wrapper-page --><!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.min.js"></script><!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>

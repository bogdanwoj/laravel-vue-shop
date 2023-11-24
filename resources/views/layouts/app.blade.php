<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Shop</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">
    @yield('styles')
    <script src="{{ asset('css/app.css') }}" defer></script>

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="../assets/css/animate.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="../assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="../assets/css/LineIcons.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="../assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="../assets/css/responsive.css">




</head>


<body>


<div id="app" >
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="/assets/images/logo.png" alt="Logo">
                        </a> <!-- Logo -->
                        <h2>
                            Admin dashboard
                        </h2>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>

    @yield('content')
</div>


<script src="{{ asset('js/app.js') }}"></script>
<!--====== HEADER PART ENDS ======-->
<!--====== jquery js ======-->
<script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="../assets/js/main.js"></script>


<!--====== Bootstrap js ======-->
<script src="/assets/js/bootstrap.min.js"></script>


<!--====== Slick js ======-->
<script src="../assets/js/slick.min.js"></script>

<!--====== Magnific Popup js ======-->
<script src="../assets/js/jquery.magnific-popup.min.js"></script>


<!--====== nav js ======-->
<script src="../assets/js/jquery.nav.js"></script>

<!--====== Nice Number js ======-->
<script src="../assets/js/jquery.nice-number.min.js"></script>

<!--====== Main js ======-->
@yield('scripts')
</body>

</html>

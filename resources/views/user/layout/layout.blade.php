<!DOCTYPE html>
<html lang="en">
<!--HTML START-->

<head>
    <!--HEAD START-->

    <!--TITLE-->
    <title>Earthquake Indonesia</title>

    <!--::::: SUPPORT META :::::::-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--:::::FABICON ICON:::::::-->
    <link rel="icon" href="{{ asset('user/assets/img/icon/preloader2.png') }}">

    <!--::::: CSS FILES:::::::-->
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/stellarnav.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/space__grotesk.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/inner.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>
<!--HEAD END-->

<body>
    <!--BODY START-->


    <!--PRELAODER START-->
    <div class="preloader v2">
        <div class="preloader__container">
            <img src="{{ asset('user/assets/img/icon/bumi.png') }}" alt="">
        </div>
    </div>
    <!--PRELAODER END-->

    <div class="black__bg">

        @yield('content')


        <!--:::::FOOTER AREA START :::::::-->
        @include('user.partials.footer')
        <!--:::::FOOTER AREA END :::::::-->



    </div>



    <!--:::::ALL JS FILES :::::::-->
    <script src="{{ asset('user/assets/js/plugins/jQuery.2.1.0.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.nav.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/stellarnav.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.counterup.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

    @yield('script')

</body>
<!--BODY END-->

</html>
<!--HTML END-->

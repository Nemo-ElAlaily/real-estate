<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modified Real Estate</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public/favicon.ico') }}">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('public/css/fontawesome-all.min.css')}}">

    @if(Route::is('homepage'))
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
        
        @if(LaravelLocalization::getCurrentLocaleDirection() == 'ltr' )
            <link rel="stylesheet" href="{{ asset('public/css/menu.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('public/css/menu-ar.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/styles-ar.css') }}">
        @endif        

        <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    @elseif(Route::is('login') || Route::is('register'))
        <!-- ARCHIVES CSS -->
        <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">

        @if(LaravelLocalization::getCurrentLocaleDirection() == 'ltr' )
            <link rel="stylesheet" href="{{ asset('public/css/menu.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('public/css/menu-ar.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/styles-ar.css') }}">
        @endif
        
        <link rel="stylesheet" id="color" href="{{ asset('public/css/default.css') }}">
    
    @elseif(Route::is('properties'))
        <link rel="stylesheet" href="{{ asset('public/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/lightcase.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
        @if(LaravelLocalization::getCurrentLocaleDirection() == 'ltr' )
            <link rel="stylesheet" href="{{ asset('public/css/menu.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('public/css/menu-ar.css') }}">
            <link rel="stylesheet" href="{{ asset('public/css/styles-ar.css') }}">
        @endif
        <link rel="stylesheet" id="color" href="{{ asset('public/css/default.css') }}">
    @endif


</head>
<body class="{{ Route::is('homepage') ? '' : 'inner-pages' }}">

    <div id="wrapper">

        @yield('content')
        
    </div>

    @if(Route::is('homepage'))
        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->
    @endif


    @if(Route::is('homepage'))
        <!-- ARCHIVES JS -->
        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('public/js/tether.min.js') }}"></script>
        <script src="{{ asset('public/js/moment.js') }}"></script>
        <script src="{{ asset('public/js/transition.min.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/mmenu.js') }}"></script>
        <script src="{{ asset('public/js/slick.min.js') }}"></script>

        @if (LaravelLocalization::getCurrentLocaleDirection() == 'ltr' )
            <script src="{{ asset('public/js/slick3.js') }}"></script>
        @else
            <script src="{{ asset('public/js/slick3-ar.js') }}"></script>
        @endif
        
        <script src="{{ asset('public/js/fitvids.js') }}"></script>
        <script src="{{ asset('public/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('public/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('public/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('public/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('public/js/lightcase.js') }}"></script>
        <script src="{{ asset('public/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('public/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('public/js/newsletter.js') }}"></script>
        <script src="{{ asset('public/js/jquery.form.js') }}"></script>
        <script src="{{ asset('public/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('public/js/forms-2.js') }}"></script>
        <script src="{{ asset('public/js/leaflet.js') }}"></script>
        <script src="{{ asset('public/js/leaflet-gesture-handling.min.js') }}"></script>
        <script src="{{ asset('public/js/leaflet-providers.js') }}"></script>
        <script src="{{ asset('public/js/leaflet.markercluster.js') }}"></script>
        <script src="{{ asset('public/js/map4.js') }}"></script>
        <script src="{{ asset('public/js/color-switcher.js') }}"></script>
        

        <!-- Slider Revolution scripts -->
        <script src="{{ asset('public/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('public/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

        <!-- MAIN JS -->

        @if (LaravelLocalization::getCurrentLocaleDirection() == 'ltr' )
            <script src="{{ asset('public/js/script.js') }}"></script>  
        @else
            <script src="{{ asset('public/js/script-ar.js') }}"></script>  
        @endif
        
    @elseif(Route::is('login') || Route::is('register'))
        <!-- ARCHIVES JS -->
        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/js/tether.min.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/mmenu.min.js') }}"></script>
        <script src="{{ asset('public/js/mmenu.js') }}"></script>
        <script src="{{ asset('public/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('public/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('public/js/newsletter.js') }}"></script>
        <script src="{{ asset('public/js/inner.js') }}"></script>
    
    @elseif(Route::is('properties'))
            <!-- ARCHIVES JS -->
            <script src="{{ asset('public/js/jquery.min.js') }}"></script>
            <script src="{{ asset('public/js/jquery-ui.js') }}"></script>
            <script src="{{ asset('public/js/range-slider.js') }}"></script>
            <script src="{{ asset('public/js/tether.min.js') }}"></script>
            <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('public/js/mmenu.min.js') }}"></script>
            <script src="{{ asset('public/js/mmenu.js') }}"></script>
            <script src="{{ asset('public/js/smooth-scroll.min.js') }}"></script>
            <script src="{{ asset('public/js/lightcase.js') }}"></script>
            <script src="{{ asset('public/js/light.js') }}"></script>
            <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
            <script src="{{ asset('public/js/popup.js') }}"></script>
            <script src="{{ asset('public/js/ajaxchimp.min.js') }}"></script>
            <script src="{{ asset('public/js/newsletter.js') }}"></script>
            <script src="{{ asset('public/js/inner.js') }}"></script>
    @endif

</body>
</html>
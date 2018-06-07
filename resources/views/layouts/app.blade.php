<!DOCTYPE html>
<html>
<head>
    <title>Blog | BigStream</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Roman Kirichik">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png')}}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css')}}">

    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animations.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/vertical-rhythm.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">


    <!-- Color Schemes :: Uncomment one for apply :: -->
    <!-- <link rel="stylesheet" href="css/colors/orange.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/green.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/cyan.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/azure.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/blue.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/blue-extra.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/purple.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/purple-extra.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/brown.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/brown-extra.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/red-extra.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/pink.css"> -->
    <!-- <link rel="stylesheet" href="css/colors/black.css"> -->

</head>
<body class="appear-animate">

<!-- Page Loader -->
<div class="page-loader">
    <b class="spinner">Loading...</b>
</div>
<!-- End Page Loader -->

<!-- Page Wrap -->
<div class="page" id="top">


    <!-- Navigation panel -->
    <nav class="main-nav dark stick-fixed">
        <div class="container relative clearfix">

            <!-- Logo ( * your text or image into link tag *) -->
            <div class="nav-logo-wrap local-scroll">
                <a href="#top" class="logo"><img src="images/logo-white.png" width="80" height="27" alt="" /></a>
            </div>

            <div class="mobile-nav"><i class="fa fa-bars"></i></div>

            <!-- Main Menu -->

            <div class="inner-nav desktop-nav">
                <ul class="clearlist scroll-nav local-scroll">
                    <li><a href="{{ Route('posts') }}">Blog</a></li>

                    <!-- Item With Sub -->
                    @guest
                        <li>
                            <a href="{{ Route('login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ Route('register') }}">Register</a>
                        </li>
                    @else
                        <li>
                            <a href="#" class="mn-has-sub">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a>

                            <ul class="mn-sub">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>

                        </li>
                @endguest
                    <!-- End Item With Sub -->

                </ul>
            </div>

        </div>
    </nav>
    <!-- End Navigation panel -->


    <!-- Home Section -->
    <section class="page-section bg-dark-alfa-90" data-background="images/full-width-images/section-bg-9.jpg">
        <div class="container relative pt-40">

            <div class="align-center">

                <div class="big-icon">
                    <i class="fa fa-pencil"></i>
                </div>

                <h3 class="small-title white">

                    <span class="serif">The great</span>
                    creative minds
                    <span class="serif">in our blog</span>
                    <br class="hidden-xs" />are here
                    <span class="serif"> to make your </span>
                    big ideas
                    <span class="serif"> possible</span>

                </h3>

            </div>

        </div>
    </section>
    <!-- End Home Section -->

    <!-- Content Section -->
    @yield('content')
    <!-- End Content Section -->

    <!-- Foter -->
    <footer class="small-section bg-dark footer">
        <div class="container">

            <!-- Footer Text -->
            <div class="footer-text">

                <!-- Copyright -->
                <div class="footer-copy">
                    <a href="http://themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; BigStream <span class="number">2014</span></a>.
                </div>
                <!-- End Copyright -->

                <div class="footer-made">
                    Made with <span class="serif">love</span>
                    for <span class="serif">great people</span>.
                </div>

            </div>
            <!-- End Footer Text -->

            <!-- Social Links -->
            <div class="footer-social-links">
                <div class="social-links tooltip-bot">
                    <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    <a href="#" title="E-mail" target="_blank"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
            <!-- End Social Links -->

        </div>
    </footer>
    <!-- End Foter -->

</div>
<!-- End Page Wrap -->

<!-- JS -->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/SmoothScroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.localScroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.ba-hashchange.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.viewport.mini.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below
**** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
<script type="text/javascript" src="{{ asset('js/gmap3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/contact-form.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/animations.min.js') }}"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="{{ asset('js/placeholder.js') }}"></script>
<![endif]-->
<script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>
@yield('js')
@include('inc.messages')

</body>
</html>







































{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--@yield('content')--}}
    {{--</div>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}

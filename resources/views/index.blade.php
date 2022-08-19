<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Industry - Factory & Industrial HTML Template" />
    <meta property="og:title" content="Industry - Factory & Industrial HTML Template" />
    <meta property="og:description" content="Industry - Factory & Industrial HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Industry - Factory & Industrial HTML Template</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset('css/skin/skin-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/templete.css')}}">
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
    </style>
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        @include('layout.header')


        @yield('content')


        @include('layout.footer')
        <button class="scroltop fa fa-chevron-up" ></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
    <script src="{{asset('plugins/wow/wow.js')}}"></script><!-- WOW JS -->
    <script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
    <script src="{{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
    <script src="{{asset('plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{asset('plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset('plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset('plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
    <script src="{{asset('plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
    <script src="{{asset('plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
    <script src="{{asset('plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
    <script src="{{asset('plugins/lightgallery/js/lightgallery-all.min.js')}}"></script><!-- Lightgallery -->
    <script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{asset('js/dz.carousel.min.js')}}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{asset('plugins/countdown/jquery.countdown.js')}}"></script><!-- COUNTDOWN FUCTIONS  -->
    <script src="{{asset('js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
    <script src="{{asset('plugins/rangeslider/rangeslider.js')}}"></script><!-- Rangeslider -->
    @stack('custom-scripts')

</body>

</html>

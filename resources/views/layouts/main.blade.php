<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page Title -->
    <title>I Am Myanmar Co.,Ltd @yield('title')</title>

    <meta name="description" content="I Am Myanmar Co.,Ltd" />
    <meta name="keywords" content="I Am Myanmar Co.,Ltd" />
    <meta name="author" content="I Am Myanmar Co.,Ltd" />

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('data/logo.png') }}" rel="shortcut icon" type="image/png">
    <!-- Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/javascript-plugins-bundle.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{ asset('assets/js/menuzord/css/menuzord.css') }}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="{{ asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- CSS | Theme Color -->
    <link href="{{ asset('assets/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/javascript-plugins-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/menuzord/js/menuzord.js') }}"></script>
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/css/rs6.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/extra-rev-slider1.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('assets/js/revolution-slider/js/revolution.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/js/rs6.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/extra-rev-slider1.js') }}"></script>
    {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"> --}}

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('assets/toastr/toastr.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="tm-container-1300px has-side-panel side-panel-right">
    <div id="wrapper" class="clearfix">
        @include('layouts.menu')
        <div class="main-content-area">

            @if (URL::current() == route('home') || URL::current() == route('welcome'))
                @include('layouts.slider')
            @endif

            @yield('content')
        </div>
        @include('layouts.footer')
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/toastr/toastr.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')
</body>

</html>

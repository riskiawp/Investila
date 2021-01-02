<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Investila - Home</title>

<link rel="stylesheet" href="{{ asset('assetss/vendors/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assetss/vendors/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assetss/vendors/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assetss/vendors/linericon/style.css') }}">
<link rel="stylesheet" href="{{ asset('assetss/vendors/owl-carousel/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assetss/vendors/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assetss/vendors/flat-icon/font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assetss/vendors/nice-select/nice-select.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('assetss/css/style.css') }}">
</head>
<body class="bg-shape">

<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
        <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('assetss/img/home/fish-new.png') }}" width="80" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li> 
            <li class="nav-item"><a class="nav-link" href="{{ url('user/about-us') }}">About Us</a></li> 
            <li class="nav-item"><a class="nav-link" href="{{ url('user/product') }}">Product</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('user/pendanaan') }}">Pendanaan</a></li>
            @if (Auth::check())
            <li class="nav-item"><a class="nav-link" >{{ Auth::user()->name }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('logout')}}">Logout</a></li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">Login</a></li>
            @endif
            </ul>
        </div> 
        </div>
    </nav>
    </div>
</header>

@yield('content')

<footer class="footer-area" >
    <div class="container text-center">
    <div class="row">
        <div class="col-lg-12  col-md-12 col-sm-12">
        <div class="single-footer-widget">
            <h6>About Investila</h6>
            <p>
            Platform terbaik untuk berinvestasi ikan, khususnya ikan nila. Memberikan informasi lengkap tentang ikan nila.
            </p>
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Group 8</a>
            </p>
        </div>
        </div>							
    <div class="footer-bottom">
        <div class="row align-items-center">
        <p class="col-lg-12 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
        </div>
        </div>
    </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->




<script src="{{ asset('assetss/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assetss/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetss/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assetss/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assetss/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assetss/js/mail-script.js') }}"></script>
<script src="{{ asset('assetss/js/skrollr.min.js') }}"></script>
<script src="{{ asset('assetss/js/main.js') }}"></script>
</body>
</html>
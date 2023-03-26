<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css')}}">
</head>
<body>
    <div class="super_container">
        <!-- content -->
          @include('header')
          {{-- @include('client.home.banner') --}}
          @yield('content')
          <!-- end content -->
          @include('footer')
        <!-- JAVASCRIPT -->
    </div>
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{ asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{ asset('plugins/easing/easing.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA')}}"></script>
    <script src="{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script src="{{ asset('js/contact_custom.js')}}"></script>
    <script src="{{ asset('js/categories_custom.js')}}"></script>
    </body>
    </html>


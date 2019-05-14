<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | {{env('APP_NAME')}}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('du_lich/img/logo.png') }}" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('du_lich/vendor/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('du_lich/vendor/dist/assets/owl.theme.default.min.css') }}">


    <!-- Custom styles for this template -->
    <link href="{{ asset('du_lich/css/header-footer.css') }}" rel="stylesheet">
    <!-- ICON CSS -->
    <link rel="stylesheet" href="{{ asset('du_lich/font/flaticon.css') }}">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('du_lich/vendor/dist/owl.carousel.min.js') }}"></script>

    <!-- daterange -->
    <link rel="stylesheet" href="{{ asset('du_lich/css/daterangepicker.css') }}">
    <script src="{{ asset('du_lich/js/moment.min.js') }}"></script>
    <script src="{{ asset('du_lich/js/daterangepicker.js') }}"></script>



    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>





<!-- Header -->
<header class="header" id="header">
    <!--        <div class="header-authenticate">
        <div class="top-header-left">
            <a href="tel:0987654321" style="color: white;" ><label class="flaticon-phone" style="cursor: pointer;">&nbsp 0987654321</label>  </a>
        </div>
        <div class="top-header-option">
            <a href="#"><img class="top-header-option-img" src="./img/login.png"></a>
            <a href="#"><img class="top-header-option-img" src="./img/login.png"></a>
            <a href="#" style="color: white; margin-left: 5px;margin-right: 15px; font-size: 14px"><img class="top-header-option-img" src="./img/vietnam.svg" style="margin-right: 4px">Tiếng Việt</a>
        </div>
    </div> -->
    @component('components.header')@endcomponent
</header>
<content class="content">
    @yield('content')
</content>





<!-- Footer -->
<footer class="footer" id="footer">
    @component('components.footer')@endcomponent
</footer>

<script src="{{ asset('du_lich/js/header.js') }}"></script>
<script src="{{ asset('du_lich/js/home.js') }}"></script>
<script src="{{ asset('du_lich/js/login.js') }}"></script>

<link href="{{ asset('du_lich/css/home.css') }}" rel="stylesheet">
<link href="{{ asset('du_lich/css/site.css') }}" rel="stylesheet">
<link href="{{ asset('du_lich/css/login.css') }}" rel="stylesheet">
@yield('scripts')
</body>

</html>

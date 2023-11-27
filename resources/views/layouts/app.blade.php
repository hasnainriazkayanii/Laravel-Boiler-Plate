<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PB Centralina | Online Chiptuning Files for Professionals </title>
    <link href="images/favicon.ico" rel="icon">
    <link rel="stylesheet" href=" {{ asset('assets/front/vendor/css/bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/css/tooltipster.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/vendor/css/revolution-settings.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/revolution/navigation.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/front/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css"rel="stylesheet" />
    <style>
        label.error {
    color: red;
}
        </style>
    @yield('additional_css')
    @stack('styles')
</head>
<body>
@include('front.includes.header')
@yield('content')
@include('front.includes.footer')
@include('front.includes.scripts')
@stack('scripts')
@stack('page_script')
</body>
</html>

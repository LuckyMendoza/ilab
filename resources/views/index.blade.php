<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Medical</title>


    <!-- Favicon Icon start -->
    <link rel="icon" type="image/png" href="/images/favicon/favicon.png">
    <!-- Favicon Icon End -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Fontawesome all css -->
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- lightbox css -->
    <link rel="stylesheet" href="/css/lightbox.min.css">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- slicknav css -->
    <link rel="stylesheet" href="/css/slicknav.min.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="/css/animate.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="/style.css">
</head>

<body>


    {{-- start header ---}}
    @include('homepage.partials.home');
    {{-- end header ---}}

    
    {{--start about---}}
    @include('homepage.partials.about');
    {{--end about}}



    {{--services start--}}
    @include('homepage.partials.services');
    {{--end services--}}



    {{--contact--}}
@include('homepage.partials.contact')
 {{--end contact--}}

    {{--start footer--}}
    @include('homepage.partials.footer');
    {{--end footer--}}
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Prakhar Software Solution' }}</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="{{ isset($description) ? $description : ''}}">
    <meta name="keywords" content="{{ isset($keyword) ? $keyword : ''}}">
    <link rel="canonical" href="{{Request::url()}}" />
    
    <link rel=icon href="{{asset('img/icon.png') }}" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/custom-icon.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css') }}">

    <script src="{{asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>-->
	<link rel="stylesheet" href="{{asset('assets/css/prettyPhoto.css')  }}" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
</head>

<body class='sc5'>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
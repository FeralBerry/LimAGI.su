<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'LimAGI' }}</title>
    <meta name="description" content="{{ $description ?? 'LimAGI - разработка выших сайтов любой сложности' }}">
    <meta name="keywords" content="{{ $keywords ?? 'LimAGI, разработка, сайт, под, ключ' }}">
    <meta name="author" content="{{ 'LimAGI' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">
    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('base/libraries/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('base/libraries/Stroke-Gap-Icon/stroke-gap-icon.css') }}">
    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('base/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('base/css/navigation-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('base/libraries/lightslider-master/lightslider.css') }}">
    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('base/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('base/css/shortcode.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('base/js/jquery.maskedinput.min.js') }}"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('base/js/html5/respond.min.js') }}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(69701767, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/69701767" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    @if($country === 'RU')
    <script>$(function($){$(".phone").mask("+9(999) 999-9999");});</script>
    @elseif ($country === 'BY')
    <script>$(function($){$(".phone").mask("+999(99) 999-9999");});</script>
    @endif
</head>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
@include('layouts.base.login_modal')
@include('layouts.base.reg_modal')
<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div>
<!-- Loader /- -->
@yield('header')
@yield('slider')
@yield('content')
@yield('footer')
<!-- JQuery v1.11.3 -->
<script src="{{ asset('base/js/jquery.min.js') }}"></script>
<!-- Library - Js -->
<script src="{{ asset('base/libraries/lib.js') }}"></script><!-- Bootstrap JS File v3.3.5 -->
<script src="{{ asset('base/libraries/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('base/libraries/lightslider-master/lightslider.js') }}"></script>
<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn3Z6i1AYolP3Y2SGis5qhbhRwmxxo1wU"></script>
<script src="{{ asset('base/js/functions.js') }}"></script>
<script src="{{ asset('base/js/blog.js') }}"></script>
@if(isset(Auth::user()->name) == '')
<script src="{{ asset('base/js/modal.js') }}"></script>
@endif
@if(Request::path() == '/')
    <script src="{{ asset('base/js/timer.js') }}"></script>
@endif
@if(url()->full() == route('price'))
    <script src="{{ asset('base/js/modal_quiz.js') }}"></script>
@endif
@include('base.script.ajax')
</body>
</html>

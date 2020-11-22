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
    <title>{{ $title ?? 'One-Page' }}</title>
    <meta name="description" content="{{ $description ?? 'One-Page - разработка выших сайтов любой сложности' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ 'One-Page' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
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
    <!--[if lt IE 9]>
    <script src="{{ asset('base/js/html5/respond.min.js') }}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
       ym(68858455, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/68858455" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
@include('auth.login')
@include('auth.register')
<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div><!-- Loader /- -->
@yield('header')
@yield('slider')
@yield('content')
@yield('footer')
{{--<script type="text/javascript" src="{{ asset('js/jquery-2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/royal_preloader.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/UserMenu.js') }}"></script>
<script type="text/javascript">
    (function($) { "use strict";
        Royal_Preloader.config({
            mode:           'text', // 'number', "text" or "logo"
            text:           "One-Page",
            timeout:        0,
            showInfo:       true,
            opacity:        1,
            background:     ['#FFFFFF'],
        });
    })(jQuery);
</script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/velocity.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/velocity.ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fs.tipper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/home-scroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom-home.js') }}"></script>
@if(isset($cfg))
    @if($cfg == 1)
        <script type="text/javascript" src="{{ asset('js/canvas.js') }}"></script>
    @endif
@endif
<script type="text/javascript" src="{{ asset('js/jquery.chaffle.min.js') }}"></script>
<script type="text/javascript">
    (function($) { "use strict";
        $(document).ready(function() {
            $('.chaffle').chaffle({
                speed: 10,
                time: 60
            });
        });
    })(jQuery);
</script>
<script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/masonry.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
<script type="text/javascript">
    (function($) { "use strict";
        $(".blog-box-1").fitVids();
    })(jQuery);
</script>
<script type="text/javascript">
    (function($) { "use strict";
        $('.vimeo a,.youtube a').click(function (e) {
            e.preventDefault();
            var videoLink = $(this).attr('href');
            var classeV = $(this).parent();
            var PlaceV = $(this).parent();
            if ($(this).parent().hasClass('youtube')) {
                $(this).parent().wrapAll('<div class="video-wrapper">');
                $(PlaceV).html('<iframe frameborder="0" height="333" src="' + videoLink + '?autoplay=1&showinfo=0" title="YouTube video player" width="547"></iframe>');
            } else {
                $(this).parent().wrapAll('<div class="video-wrapper">');
                $(PlaceV).html('<iframe src="' + videoLink + '?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1&amp;color=cfa144" width="500" height="281" frameborder="0"></iframe>');
            }
        });
    })(jQuery);
</script>
<script type="text/javascript" src="{{ asset('js/custom-blog.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>--}}
<!-- JQuery v1.11.3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('base/js/jquery.min.js') }}"></script>
<!-- Library - Js -->
<script src="{{ asset('base/libraries/lib.js') }}"></script><!-- Bootstrap JS File v3.3.5 -->
<script src="{{ asset('base/libraries/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('base/libraries/lightslider-master/lightslider.js') }}"></script>
<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn3Z6i1AYolP3Y2SGis5qhbhRwmxxo1wU"></script>
<script src="{{ asset('base/js/functions.js') }}"></script>
<script src="{{ asset('base/js/blog.js') }}"></script>
<script src="{{ asset('base/js/modal.js') }}"></script>
</body>
</html>

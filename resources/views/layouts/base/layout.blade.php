<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description ?? 'PWS - разработка выших сайтов любой сложности' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ 'PWS' }}">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font
  ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/skeleton.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/retina.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}"/>



    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">

    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>


</head>
<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<body @if(isset($cfg))@if($cfg == 1)class="royal_loader" data-hijacking="on" data-animation="scaleDown"@endif@else class="royal_loader" @endif>

<!-- Primary Page Layout
================================================== -->


<!-- Nav and Logo
================================================== -->
@yield('header')
@yield('content')
@yield('footer')

<!-- JAVASCRIPT
================================================== -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/royal_preloader.min.js') }}"></script>
<script type="text/javascript">
    (function($) { "use strict";
        Royal_Preloader.config({
            mode:           'text', // 'number', "text" or "logo"
            text:           'PWS',
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
<!-- End Document
================================================== -->
</body>
</html>

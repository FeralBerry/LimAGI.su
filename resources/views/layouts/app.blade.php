<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'One-Page' }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
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
<body>
<header class="cd-header">
    <div class="container">
        <div class="twelve columns" style="margin-top: 20px">
            <div class="logo-wrap">
                <a href="{{ route('index') }}"><img style="width: 50px" src="{{ asset('images/logo.gif') }}" alt="One-Page"></a>
            </div>
            <div class="logo-wrap">
                <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="One-Page"></a>
            </div>
            <div class="head_contact">
                <a href="tel: 79687106270">Телефон: +7(968)710-62-70</a><br>
                <a href="mailto:info@one-page.su">Email: info@one-page.su</a>
            </div>
            @guest
                <a class="login" href="{{ route('login') }}">{{ __('Вход') }}</a>
                @if (Route::has('register'))
                    <a class="reg" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                @endif
            @else
                <div class="user-log dropdown">
                    <a id="navbarDropdown" class="login dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
            <a class="cd-primary-nav-trigger" href="#0">
                <span class="cd-menu-text"></span><span class="cd-menu-icon"></span>
            </a>
        </div>
    </div>
</header>
<nav>
    <div class="cd-primary-nav">
        <ul class="cd-scndr-nav">
            <li class="cd-label">
                <a href="{{ route('index') }}" @if(Request::path() == '/')class="curent-nav-color"@endif>Главная</a>
            </li>
            <li class="cd-label">
                <a href="{{ route('portfolio') }}" @if(Request::path() == 'portfolio')class="curent-nav-color"@endif>Портфолио</a>
            </li>
            <li class="cd-label">
                <a href="{{ route('about') }}" @if(Request::path() == 'about')class="curent-nav-color"@endif>Обо мне</a>
            </li>
            <li class="cd-label">
                <a href="{{ route('blog') }}" @if(Request::path() == 'blog')class="curent-nav-color"@endif>Блог</a>
            </li>
            <li class="cd-label">
                <a href="{{ route('contact') }}" @if(Request::path() == 'contact')class="curent-nav-color"@endif>Контакты</a>
            </li>
        </ul>
        <div class="social-nav">
            <ul class="list-social-nav">
                <li class="icon-soc-nav tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf099;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf09b;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf0d5;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="YouTube"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf16a;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="Vimeo"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf194;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="Tumblr"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf174;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf230;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="Skype"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf17e;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="soundcloud"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf1be;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="pinterest"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf231;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="linkedin"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf08c;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="lastfm"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf202;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="dropbox"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf16b;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="behance"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf1b4;</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
@include('layouts.base.footer')
<!-- JAVASCRIPT
================================================== -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/royal_preloader.min.js') }}"></script>
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
<!-- End Document
================================================== -->
</body>
</html>

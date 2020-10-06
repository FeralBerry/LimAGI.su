<header class="cd-header">
    <div class="container">
        <div class="twelve columns" style="margin-top: 20px">
            <div class="logo-wrap">
                <a href="{{ route('index') }}"><img style="width: 50px" src="{{ asset('images/logo.gif') }}" alt="PWS"></a>
            </div>
            <div class="logo-wrap">
                <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="PWS"></a>
            </div>
            <a class="cd-primary-nav-trigger" href="#0">
                <span class="cd-menu-text"></span><span class="cd-menu-icon"></span>
            </a>
        </div>
    </div>
</header>

<nav>
    <div class="cd-primary-nav">
        <ul class="cd-scndr-nav">
            <li class="cd-label"><a href="{{ route('index') }}">Главная</a></li>
            <li class="cd-label"><a href="{{ route('portfolio') }}" class="curent-nav-color">Портфолио</a>
                {{--<ul>
                    <li><a href="index.html" class="curent-nav-color">Fullscreen Scroll Scale Down</a></li>
                    <li><a href="index1.html">Fullscreen Scroll Rotate</a></li>
                    <li><a href="index2.html">Fullscreen Scroll Catch</a></li>
                    <li><a href="index3.html">Fullscreen Scroll Opacity</a></li>
                    <li><a href="index4.html">Fullscreen Scroll Parallax</a></li>
                    <li><a href="index5.html">Scroll Scale Down</a></li>
                    <li><a href="index6.html">Scroll Rotate</a></li>
                    <li><a href="index7.html">Scroll Catch</a></li>
                    <li><a href="index8.html">Scroll Opacity</a></li>
                    <li><a href="index9.html">Scroll Parallax</a></li>
                    <li><a href="index10.html">Fullscreen Scroll Video Parallax</a></li>
                    <li><a href="index11.html">Scroll Video Parallax</a></li>
                </ul>--}}
            </li>

            <li class="cd-label"><a href="{{ route('about') }}">Обо мне</a></li>

            <li class="cd-label"><a href="{{ route('blog') }}">Блог</a></li>

            <li class="cd-label"><a href="{{ route('contact') }}">Контакты</a></li>

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

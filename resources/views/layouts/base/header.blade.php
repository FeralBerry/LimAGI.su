<header class="cd-header">
    <div class="container">
        <div class="twelve columns" style="margin-top: 20px">
            <div class="logo-wrap pre-logo">
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
                <div class="accordion">
                    <div class="trigger">
                        <input type="checkbox" id="checkbox-1" name="checkbox-1" />
                        <label for="checkbox-1" class="checkbox">
                            {{ Auth::user()->name }} <i></i>
                        </label>
                        <div class="content">
                            <a class="dropdown-item" href="{{ route('home') }}">В меню пользователя</a>
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
                </div>
            @endguest
            <a class="cd-primary-nav-trigger" href="#0">
                <span class="cd-menu-text"></span><span class="cd-menu-icon"></span>
            </a>
        </div>
    </div>
    <div class=" container-fluid nav">
        <div class="container">
            <a href="{{ route('index') }}" @if(Request::path() == '/')class="curent-nav-color"@endif>Главная</a>
            <a href="{{ route('portfolio') }}" @if(Request::path() == 'portfolio')class="curent-nav-color"@endif>Портфолио</a>
            <a href="{{ route('about') }}" @if(Request::path() == 'about')class="curent-nav-color"@endif>Обо мне</a>
            <a href="{{ route('blog') }}" @if(Request::path() == 'blog')class="curent-nav-color"@endif>Блог</a>
            <a href="{{ route('contact') }}" @if(Request::path() == 'contact')class="curent-nav-color"@endif>Контакты</a>
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
                <li class="icon-soc-nav tipped" data-title="VK"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="https://vk.com/id338990548"><i class="fa fa-vk" aria-hidden="true"></i></a>
                </li>
                <li class="icon-soc-nav tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="https://github.com/FeralBerry"><i class="fa fa-github" aria-hidden="true"></i></a>
                </li>
                <li class="icon-soc-nav tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="mailto:evakomarova90@gmail.com">&#xf0d5;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="mail"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="mailto:info@one-page.su"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </li>
                <li class="icon-soc-nav tipped" data-title="YouTube"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf16a;</a>
                </li>
                <li class="icon-soc tipped" data-title="WhatsApp"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="https://wa.me/79687106270"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </li>
                <li class="icon-soc tipped" data-title="One-Drive"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="https://yadi.sk/d/rf8--QuryZM9EA?w=1"><i class="fa fa-download" aria-hidden="true"></i></a>
                </li>
                {{--<li class="icon-soc-nav tipped" data-title="Vimeo"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf194;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="Tumblr"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf174;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf230;</a>
                </li>--}}
                {{--<li class="icon-soc-nav tipped" data-title="Skype"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf17e;</a>
                </li>--}}
                {{--<li class="icon-soc-nav tipped" data-title="soundcloud"  data-tipper-options='{"direction":"top","follow":"true"}'>
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
                </li>--}}
                {{--<li class="icon-soc-nav tipped" data-title="dropbox"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf16b;</a>
                </li>
                <li class="icon-soc-nav tipped" data-title="behance"  data-tipper-options='{"direction":"top","follow":"true"}'>
                    <a href="#">&#xf1b4;</a>
                </li>--}}
            </ul>
        </div>
    </div>
</nav>

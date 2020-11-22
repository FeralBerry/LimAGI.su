<!-- Header -->
<header class="header-main container-fluid no-padding">
    <!-- Top Header -->
    <div class="top-header container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Social -->
                <div class="col-md-4 col-sm-4 col-xs-6 social">
                    <ul>
                        <li><a title="Facebook" href="#"><i class="fa fa-github"></i></a></li>
                        <li><a title="Mail" href="mailto:info@one-page.su"><i class="fa fa-envelope"></i></a></li>
                        <li><a title="Google Plus" href="mailto:evakomarova90@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                        <li><a title="WhatsApp" href="https://wa.me/79687106270"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a title="VK" href="https://vk.com/id338990548"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div><!-- Social /- -->
                <!-- Register -->
                <div class="col-md-4 col-sm-4 col-xs-6 register">
                    @guest
                        <a class="open_login">{{ __('Вход') }}</a>
                        @if (Route::has('register'))
                            <a class="open_reg">{{ __('Регистрация') }}</a>
                        @endif
                    @else
                        <div class="accordion">
                            <div class="trigger">
                                <div class="content">
                                    <a class="dropdown-item" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
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
                </div><!-- Register /- -->
                <!-- Logo Block -->
                <div class="col-md-4 col-sm-4 col-xs-12 logo-block">
                    <a href="{{ route('index') }}" title="LimAGI">
                        <img src="{{ asset('base/logo.png') }}" alt="LimAGI" width="70" height="60"/>
                        <h3>LimAGI</h3>
                    </a>
                </div><!-- Logo Block /- -->
            </div>
        </div><!-- Container /- -->
    </div><!-- Top Header /- -->
    <!-- Menu Block -->
    <div class="menu-block container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <!-- User -->
            <a @guest class="open_user user" @else href="{{ route('home') }}" class="user" @endguest title="User">
                <i class="fa fa-user"></i>
            </a><!-- User /- -->
            <!-- Expanding Search -->
            <div class="menu-search">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
                        <button class="sb-search-submit"><i class="fa fa-search"></i></button>
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
            </div><!-- Expanding Search /- -->
            <div class="col-md-10 col-sm-12">
                <!-- Navigation -->
                <nav class="navbar ow-navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a title="Logo" href="#" class="navbar-brand"><img src="{{ asset('base/logo.png')}}" alt="LimagI"/><span>LimagI</span></a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav menubar">
                            <li @if(Request::path() == '/')class="active"@endif><a title="Главная" href="{{ route('index') }}">Главная</a></li>
                            <li @if(Request::path() == 'about')class="active"@endif><a title="Обо мне" href="{{ route('about') }}">Обо мне</a></li>
                            <li @if(Request::path() == 'portfolio')class="active"@endif><a title="Портфолио" href="{{ route('portfolio') }}">Портфолио</a></li>
                            <li @if(Request::path() == 'blog')class="active"@endif><a title="Блог" href="{{ route('blog') }}">Блог</a></li>
                            <li><a title="Расценки" href="#">Расценки</a></li>
                            {{--
                            <li class="dropdown">
                                <a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Pages" href="#">Блог</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
                                <ul class="dropdown-menu">
                                    <li><a title="Event Grid" href="eventgrid-page.html">Event Grid</a></li>
                                    <li><a title="Event List" href="eventlist-page.html">Event List</a></li>
                                    <li><a title="Event Single" href="eventsingle-page.html">Event Single</a></li>
                                    <li><a title="404" href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Blog" href="#">Latest News</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
                                <ul class="dropdown-menu">
                                    <li><a title="Blog" href="blog-page.html">Blog</a></li>
                                    <li><a title="Blog Post" href="blogpost-page.html">Blog Post</a></li>
                                </ul>
                            </li>--}}
                            <li @if(Request::path() == 'contact')class="active"@endif><a title="Контакты" href="{{ route('contact') }}">Контакты</a></li>
                        </ul>
                    </div>
                </nav><!-- Navigation /- -->
            </div>
        </div><!-- Container /- -->
    </div><!-- Menu Block /- -->
</header><!-- Header /- -->

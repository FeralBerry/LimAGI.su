<!-- Footer Main -->
<footer class="footer-main container-fluid no-padding">
    <!-- Container -->
    <div class="container">
        <!-- Footer About -->
        <div class="footer-about">
            <div class="logo-block">
                <img src="{{ asset('base/logo.png') }}" alt="LimAGI" width="70" height="63"/>
                <h3>LimAGI</h3>
            </div>
            <div class="footer-about-content">
                <h3 class="block-title">Что такое LimAGI</h3>
                <a href="{{ route('blog-post', 0) }}">
                    <p>Limit. Asterisk Gateway Interface(LAGI)</p>
                    <p>Предел шлюзового интерфейса Asterisk</p>
                </a>
            </div>
        </div><!-- Footer About /- -->
        <div class="row">
            <!-- Customer Service Widget -->
            <aside class="col-md-3 col-sm-6 col-xs-6 widget widget_customer_services">
                <h3 class="block-title">Сервисы</h3>
                <p style="color: #fff">(доступны авторизованным пользователям)</p>
                <ul>
                    <li><a title="Курсы HTML" href="{{ route('free-courses-html') }}">Курсы HTML</a></li>
                    <li><a title="Курсы CSS" href="{{ route('free-courses-css') }}">Курсы CSS</a></li>
                    <li><a title="Курсы PHP" href="{{ route('free-courses-php') }}">Курсы PHP</a></li>
                    {{--<li><a title="Printed materials" href="#">Printed materials</a></li>
                    <li><a title="Curriculum" href="#">curriculum</a></li>
                    <li><a title="Literature" href="#">literature</a></li>
                    <li><a title="Help & Faq" href="#">Help & Faq</a></li>--}}
                </ul>
            </aside><!-- Customer Service Widget /- -->
            <!-- Quick Links Widget -->
            <aside class="col-md-2 col-sm-6 col-xs-6 widget widget_quick_links">
                <h3 class="block-title">Ссылки</h3>
                <ul>
                    <li><a title="Главная" href="{{ route('index') }}">Главная</a></li>
                    <li><a title="Портфолио" href="{{ route('portfolio') }}">Портфолио</a></li>
                    <li><a title="Обо мне" href="{{ route('about') }}">Обо мне</a></li>
                    <li><a title="Блог" href="{{ route('blog') }}">Блог</a></li>
                    <li><a title="Расценки" href="{{ route('price') }}">Расценки</a></li>
                    <li><a title="Контакты" href="{{ route('contact') }}">Контакты</a></li>
                </ul>
            </aside><!-- Quick Links Widget /- -->

            <!-- ContactUs Widget -->
            <aside class="col-md-3 col-sm-6 col-xs-6 widget widget_contactus">
                <h3 class="block-title">Контакты</h3>
                <div class="contactinfo-box">
                    <i class="fa fa-phone"></i>
                    <p>
                        <a title="79687106270" href="tel:79687106270">+7 968 710 62 70</a>
                    </p>
                </div>
                <div class="contactinfo-box">
                    <i class="fa fa-map-marker"></i>
                    <p>
                        <a href="mailto:limagi@limagi.su" title="limagi@limagi.su">limagi@limagi.su</a>
                    </p>
                </div>
            </aside><!-- ContactUs Widget /- -->

            <!-- NewsLetter Widget -->
            <aside class="col-md-4 col-sm-6 col-xs-6 widget widget_newsletter">
                <h3 class="block-title">Обратная связь</h3>
                <p>Оставьте свои данные и я с вами свяжусь</p>
                <div class="input-group">
                    <input type="text" name="footer" placeholder="Email или телефон" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" title="Subscribe" class="btn">Go</button>
                    </span>
                </div>
                <ul>
                    <li><a title="Facebook" data-toggle="tooltip" href="#"><i class="fa fa-github"></i></a></li>
                    <li><a title="Mail" data-toggle="tooltip" href="mailto:limagi@limagi.su"><i class="fa fa-envelope"></i></a></li>
                    <li><a title="Google Plus" data-toggle="tooltip" href="mailto:evakomarova90@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                    <li><a title="WhatsApp" data-toggle="tooltip" href="https://wa.me/79687106270"><i class="fa fa-whatsapp"></i></a></li>
                    <li><a title="VK" data-toggle="tooltip" href="https://vk.com/id338990548"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside><!-- NewsLetter Widget /- -->
        </div>
    </div><!-- Container /- -->
    <!-- Container -->
    <div class="container">
        <div class="footer-menu">
            <!-- Copyrights -->
            <div class="copyrights ow-pull-left">
                <p>&copy; 2020 | All rights reserved</p>
            </div><!-- Copyrights /- -->
            <!-- Navigation -->
            <nav class="navbar ow-navigation ow-pull-right">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar2" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar2">
                    <ul class="nav navbar-nav">
                        <li><a title="Главная" href="{{ route('index') }}">Главная</a></li>
                        <li><a title="Портфолио" href="{{ route('portfolio') }}">Портфолио</a></li>
                        <li><a title="Обо мне" href="{{ route('about') }}">Обо мне</a></li>
                        <li><a title="Блог" href="{{ route('blog') }}">Блог</a></li>
                        <li><a title="Расценки" href="{{ route('price') }}">Расценки</a></li>
                        <li><a title="Контакты" href="{{ route('contact') }}">Контакты</a></li>
                    </ul>
                </div>
            </nav><!-- Navigation /- -->
        </div><!-- Footer Menu /- -->
    </div><!-- Container /- -->
</footer><!-- Footer Main /- -->

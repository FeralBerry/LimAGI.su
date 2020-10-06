<main class="cd-main-content">
    <section class="cd-section visible">
        <div>
            <canvas id="canvas"></canvas>
            <div class="hero-top">
                <div class="container">
                    <div class="twelve columns row">
                        <div id="owl-text-home" class="owl-carousel owl-theme">
                            <div class="item"><h2>Большой опыт разработки</h2></div>
                            <div class="item"><h2>Использование современных технологий</h2></div>
                            <div class="item"><h2>Полное сопровождение</h2></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <p style="background: #ffffff61;border-radius: 10px;">Закажите <b style="color: #ffab01">бесплатный</b> рассчет стоимости вашего сайта</p>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <form action="{{ route('index') }}" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="Как к вам обращаться?">
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" name="email" placeholder="Введите ваш email">
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control" name="phone" placeholder="Введите ваш телефон">
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <button type="submit" class="button button--moema button--text-thick button--text-upper button--size-s">Отправить</button>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                        </form>
                        <div class="social-top">
                            <ul class="list-social">
                                <li class="icon-soc tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <a href="#">&#xf099;</a>
                                </li>
                                <li class="icon-soc tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <a href="#">&#xf09a;</a>
                                </li>
                                <li class="icon-soc tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <a href="#">&#xf09b;</a>
                                </li>
                                <li class="icon-soc tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <a href="#">&#xf0d5;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cd-section">
        <div>
            <div class="hero-top">
                <div class="container">
                    <div class="twelve columns">
                        <h2>Портфолио</h2>
                        <p><span>все варианты разработки</span></p>
                        <a href="{{ route('portfolio') }}"><div class="button button--moema button--text-thick button--text-upper button--size-s">Ознакомиться</div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cd-section">
        <div>
            <div class="hero-top">
                <div class="container">
                    <div class="twelve columns">
                        <h2>Обо мне</h2>
                        <p><span>Почему стоит работать именно со мной</span></p>
                        <a href="{{ route('about') }}"><div class="button button--moema button--text-thick button--text-upper button--size-s">Читать больше</div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cd-section">
        <div>
            <div class="hero-top">
                <div class="container">
                    <div class="twelve columns">
                        <h2>Мой блог</h2>
                        <p><span>последние новости</span></p>
                        <a href="{{ route('blog') }}"><div class="button button--moema button--text-thick button--text-upper button--size-s">читать статью</div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cd-section">
        <div>
            <div class="hero-top">
                <div class="container">
                    <div class="twelve columns">
                        <h2>Контакты</h2>
                        <p><span>посмотри и свяжись</span></p>
                        <a href="{{ route('contact') }}"><div class="button button--moema button--text-thick button--text-upper button--size-s">Посмотреть</div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav>
        <ul class="cd-vertical-nav">
            <li><a href="#0" class="cd-prev inactive">Next</a></li>
            <li><a href="#0" class="cd-next">Prev</a></li>
        </ul>
    </nav> <!-- .cd-vertical-nav -->

</main>

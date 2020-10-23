<div class="section">
    <div class="container header-big-text">
        <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
                <h2>обо мне</h2>
                <p>коротко о главном</p>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="section padding-bottom">
    <div class="container">
        <div class="twelve columns">
            <div class="header-text">
                <h4>Что я использую при создании сайтов</h4>
                <p>Раздвигаю границы возможного и воплощаю это в цифровом решении.</p>
            </div>
        </div>
        @foreach($about as $a)
        <div class="four columns">
            <div class="team-box">
                <img src="{{ asset('images/about/') }}/{{ $a->img }}" alt="">
                <h6>{{ $a->title }}</h6>
                <p>{{ $a->desc }}</p>
                <div class="social-team">
                    <ul class="list-social-team">
                        <?php $link = explode(',', $a->link); ?>
                        @foreach($link as $l)
                        <li class="icon-team tipped" @foreach($blog as $b) @if($l == $b->id)data-title="{{ $b->title }}"@endif @endforeach  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="{{ route('blog-post', $l) }}"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="clear"></div>
<div class="section padding-top-bottom-small black-background">
    <div class="container">
        <div class="three columns">
            <div class="about-box">
                <div class="icon">&#1421;</div>
                <h6>Креативность</h6>
                <p>Каждый проект тщательно обдумывается и прорисовывается для достяжения поставленной цели</p>
            </div>
        </div>
        <div class="three columns">
            <div class="about-box">
                <div class="icon">&#2039;</div>
                <h6>Функциональность</h6>
                <p>Интуитично понятный интерфейс, ничего лишнего или спрятаного от пользователя</p>
            </div>
        </div>
        <div class="three columns">
            <div class="about-box">
                <div class="icon">&#3222;</div>
                <h6>Создание бренда</h6>
                <p>Невероятно протые и узноваемые образы для вашего бренда</p>
            </div>
        </div>
        <div class="three columns">
            <div class="about-box">
                <div class="icon">&#3547;</div>
                <h6>Дополняемость</h6>
                <p>Все сайты имеют возможность расширения, дополнения информации</p>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="section grey-background">
    <div class="cd-single-item">
        <div class="cd-slider-wrapper">
            <ul class="cd-slider">
                <li class="best"><img src="{{ asset('images/img-1.jpg') }}" alt="Product Image 1"></li>
            </ul> <!-- cd-slider -->
        </div> <!-- cd-slider-wrapper -->
        <div class="cd-item-info">
            <div class="header-text left">
                <h4>Лучшее для бизнеса</h4>
                <p>Использую самые последние дизайнерские разработки для привлечения клиентов</p>
            </div>
        </div> <!-- cd-item-info -->
    </div> <!-- cd-single-item -->
</div>
<div class="clear"></div>
<div class="section padding-top-bottom-smaller black-background">
    <div class="container">
        <div class="twelve columns">
            {{--<div id="owl-logo" class="owl-carousel owl-theme">

                <div class="item">
                    <img src="{{ asset('images/logos/1.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/2.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/3.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/4.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/5.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/6.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/1.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/2.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/3.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/4.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/logos/5.png') }}" alt="">
                </div>

            </div>--}}
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="section padding-top-bottom">
    <div class="container">
        <div class="twelve columns">
            <div class="header-text">
                <h4>Сервисы</h4>
                <p>Использую передовые технологии и нестандартное мышление, чтобы оживить ваш бренд в интернете.</p>
            </div>
        </div>
        <div class="three columns">
            <div class="services-box">
                <div class="icon">&#4968;</div>
                <h6>Анализ</h6>
                <p>Анализ конкурентов вашего бизнеса</p>
            </div>
        </div>
        <div class="three columns">
            <div class="services-box">
                <div class="icon">&#5642;</div>
                <h6>Постоянное обучение</h6>
                <p>Постоянно учусь новым технологиям и использую их по необходимости</p>
            </div>
        </div>
        <div class="three columns">
            <div class="services-box">
                <div class="icon">&#6115;</div>
                <h6>Инновационный подход</h6>
                <p>Использование современных технологий</p>
            </div>
        </div>
        <div class="three columns">
            <div class="services-box">
                <div class="icon">&#8413;</div>
                <h6>Интернет оптимизация</h6>
                <p>Оптимизация сайта для поисковых систем</p>
            </div>
        </div>
        <div class="clear"></div>
        <div class="three columns">
            <div class="services-box">
                <div class="icon">&#9398;</div>
                <h6>СЕО</h6>
                <p>Подключение сервисов Google и Yandex Direct</p>
            </div>
        </div>
        <div class="three columns">
            <div class="services-box">
                <div class="icon">&#10037;</div>
                <h6>Разработка</h6>
                <p>Разработка на нескольких языках программирования</p>
            </div>
        </div>
        <div class="three columns">
            <div class="services-box">
                <div class="icon">&#10162;</div>
                <h6>Хостинг</h6>
                <p>Подключение и настройка домена и хостинга для сайта</p>
            </div>
        </div>
        <div class="three columns">
            <div class="services-box">
                <div class="icon">&#10004;</div>
                <h6>Поддержка</h6>
                <p>Поддержка вашего проекта в будующем</p>
            </div>
        </div>
    </div>
</div>


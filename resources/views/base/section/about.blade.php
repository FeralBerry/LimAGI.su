<!-- PageBanner -->
<div class="container-fluid page-banner about no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Кто я?</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">На главную</a></li>
                    <li class="active">Обо мне</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- PageBanner /- -->
@include('base.section.what_can_i_do')
<!-- Introduction Section -->
<div class="container-fluid no-padding introduction-section">
    <div class="introduction-carousel">
        @foreach($about as $a)
            <div class="col-md-12 no-padding about{{$a->id}}">
                <div class="introduction-block">
                    <h3 class="block-title">{{ $a->title }}</h3>
                    <span class="icon"><i class="fa {{ $a->icon }}" aria-hidden="true"></i></span>
                    <p>{{ $a->description }}</p>
                    <?php $link = explode(',', $a->link); ?>
                    @foreach($link as $l)
                        <a href="{{ route('blog-post', $l) }}" title="Читать больше">Читать больше</a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div><!-- Introduction Section /- -->
{{--
<!-- Team Section -->
<div class="container-fluid no-padding team-section">
    <div class="section-padding"></div>
    <div class="section-header">
        <h3>meet our great speakers</h3>
        <span>Our Great Voices</span>
    </div>
    <ul id="team-carousel">
        <li data-thumb="images/team-thumb1.jpg">
            <div class="col-md-6 no-padding larg-thumb">
                <img src="images/team1.jpg" width="960" height="670" alt="team1"/>
            </div>
            <div class="container">
                <div class="col-md-6 no-padding">
                    <div class="team-content">
                        <h3>Harry richards</h3>
                        <a href="#" title="Public Speaker">Public Speaker</a>
                        <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                        <ul>
                            <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-event-carousel">
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li data-thumb="images/team-thumb2.jpg">
            <div class="col-md-6 no-padding larg-thumb">
                <img src="images/team2.jpg" width="960" height="670" alt="team2"/>
            </div>
            <div class="container">
                <div class="col-md-6 no-padding">
                    <div class="team-content">
                        <h3>John richards</h3>
                        <a href="#" title="Public Speaker">Public Speaker</a>
                        <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                        <ul>
                            <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-event-carousel">
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li data-thumb="images/team-thumb3.jpg">
            <div class="col-md-6 no-padding larg-thumb">
                <img src="images/team3.jpg" width="960" height="670" alt="team3"/>
            </div>
            <div class="container">
                <div class="col-md-6 no-padding">
                    <div class="team-content">
                        <h3>Matthew richards </h3>
                        <a href="#" title="Public Speaker">Public Speaker</a>
                        <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                        <ul>
                            <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-event-carousel">
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li data-thumb="images/team-thumb4.jpg">
            <div class="col-md-6 no-padding larg-thumb">
                <img src="images/team4.jpg" width="960" height="670" alt="team4"/>
            </div>
            <div class="container">
                <div class="col-md-6 no-padding">
                    <div class="team-content">
                        <h3>Albert richards </h3>
                        <a href="#" title="Public Speaker">Public Speaker</a>
                        <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                        <ul>
                            <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-event-carousel">
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div><!-- Team Section /- -->

<!-- Testimonial Section -->
<div class="container-fluid testimonial-section no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>what our clients say about us</h3>
            <span>Feedback From Our Clients</span>
        </div>
        <div class="testimonial-carousel">
            <div class="testimonial-block row">
                <div class="col-md-5 col-sm-12 no-padding">
                    <div class="testimonial-carousel-left">
                        <div class="testimonial-box testimonial-left">
                            <div class="testimonial-content">
                                <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                <span>hendry smith villa</span>
                            </div>
                            <img src="images/testimonial1.jpg" alt="testimonial1" width="144" height="136"/>
                        </div>
                        <div class="testimonial-box testimonial-left">
                            <div class="testimonial-content">
                                <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                <span>hendry smith villa</span>
                            </div>
                            <img src="images/testimonial1.jpg" alt="testimonial1" width="144" height="136"/>
                        </div>
                        <div class="testimonial-box testimonial-left">
                            <div class="testimonial-content">
                                <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                <span>hendry smith villa</span>
                            </div>
                            <img src="images/testimonial1.jpg" alt="testimonial1" width="144" height="136"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="testimonial-blockquote-circle">
                        <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 no-padding">
                    <div class="testimonial-carousel-right">
                        <div class="testimonial-box testimonial-right">
                            <div class="testimonial-content">
                                <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>
                                <span>Mike Davidson</span>
                            </div>
                            <img src="images/testimonial2.jpg" alt="testimonial1" width="144" height="136"/>
                        </div>
                        <div class="testimonial-box testimonial-right">
                            <div class="testimonial-content">
                                <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>
                                <span>Mike Davidson</span>
                            </div>
                            <img src="images/testimonial2.jpg" alt="testimonial1" width="144" height="136"/>
                        </div>
                        <div class="testimonial-box testimonial-right">
                            <div class="testimonial-content">
                                <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>
                                <span>Mike Davidson</span>
                            </div>
                            <img src="images/testimonial2.jpg" alt="testimonial1" width="144" height="136"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- Testimonial Section /- -->--}}
{{--
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
--}}

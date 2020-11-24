<!-- Slider Section -->
<div id="slider-section" class="slider-section container-fluid no-padding">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-caption">
                <div class="container">
                    <div class="col-md-5 col-sm-6 col-xs-9 pull-right">
                        <div class="slider-content-box">
                            <div class="the-curb-inside">
                                <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                                    <h3 class="slider-title">Можете оставить заявку здесь</h3>
                                    <p>Я перезвоню или спишусь с вами в ближайшее время</p>
                                </div>
                                <form action="{{ route('index') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="input_name" placeholder="Ваше имя*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" id="input_phone" placeholder="Телефон*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="input_email" placeholder="Ваш E-mail*" required>
                                    </div>
                                    <button type="submit" class="btn slider-btn">Отправить</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="item active">
                <img src="{{ asset('base/img/slider1.jpg') }}" alt="slide1" width="100%" height="770"/>
            </div>
            <div class="item">
                <img src="{{ asset('base/img/slider2.jpg') }}" alt="slide2" width="100%" height="770"/>
            </div>
            <div class="item">
                <img src="{{ asset('base/img/slider3.jpg') }}" alt="slide3" width="100%" height="770"/>
            </div>
        </div>
        <!-- Controls -->

    </div>
</div><!-- Slider Section /- -->

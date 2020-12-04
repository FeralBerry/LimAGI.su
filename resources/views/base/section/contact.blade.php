<!-- PageBanner -->
<div class="container-fluid page-banner blogpost no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Контакты</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">На главную</a></li>
                    <li class="active">Контакты</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- PageBanner /- -->
<div class="container">
    <div class="row contact-form-section">
        <div class="col-md-8 col-sm-8">
            <div class="section-header">
                <h3>Свяжитесь со мной</h3>
                <span>постараюсь ответить в ближайший час</span>
            </div>
            <form class="contactus-form" action="{{ route('contact') }}" method="post">
                @csrf
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="contact_name" class="form-control" id="input_name" placeholder="Ваше имя*" required/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="contact_phone" class="form-control" id="input_phone" placeholder="телефон"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input type="email" name="contact_email" class="form-control" id="input_email" placeholder="Email*" required/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="contact_subject" class="form-control" id="input_subject" placeholder="Тема вопроса"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <textarea rows="10" name="contact_message" class="form-control" id="textarea_message" placeholder="Сообщение"></textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="submit" value="Отправить" title="Отправить" name="post">
                    </div>
                </div>
                <div id="alert-msg" class="alert-msg"></div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 widget-area">
            @include('base.section.advertising_block')
        </div>
    </div>
</div>



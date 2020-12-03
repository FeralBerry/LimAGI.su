<div class="modals_landing">
    <div class="modal-content">
        <div class="modal-wrap-quiz">
            <a class="close_modal_landing" title="Закрыть"><i class="fa fa-share" aria-hidden="true"></i></a>
            <div class="container">
                <h1>Выберите что вам необходимо сделать по созданию одностраничного сайта</h1>
                <form>
                    @csrf
                    <div class="row modal-design-radio">
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="landing" id="landing1" value="Полная разработка сайта">
                            <label class="form-check-label" for="landing1">Полная разработка сайта</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="landing" id="landing2" value="Разработка дизайна сайта">
                            <label class="form-check-label" for="landing2">Разработка дизайна сайта</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="landing" id="landing3" value="Верстка сайта по дизайн макту">
                            <label class="form-check-label" for="landing3">Верстка сайта по дизайн макету</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="landing" id="landing4" value="Отладка существующего сайта">
                            <label class="form-check-label" for="landing4">Отладка существующего сайта</label>
                        </div>
                    </div>
                    <div class="row modal-checkbox">
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="logo_development_landing" value="Разработка логотипа">
                            <label class="form-check-label" for="logo_development_landing">Разработка логотипа</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="fonts_landing" value="Подбор или изменение шрифтов">
                            <label class="form-check-label" for="fonts_landing">Подбор или изменение шрифтов</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="colors_landing" value="Подбор или изменение фирменых цветов">
                            <label class="form-check-label" for="colors_landing">Подбор или изменение фирменых цветов</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="feedback_landing" value="Настройка форм обратной связи">
                            <label class="form-check-label" for="feedback_landing">Настройка форм обратной связи</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="any_device_landing" value="Адаптация для нескольких устройств">
                            <label class="form-check-label" for="any_device_landing">Адаптация для нескольких устройств</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="host_landing" value="Постановка сайта на хостинг подключение домена">
                            <label class="form-check-label" for="host_landing">Постановка сайта на хостинг подключение домена</label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-12 col-md-6">
                            <label for="landing_name">Ваше Имя:*</label>
                            <input id="landing_name" name="landing_name" class="form-control" type="text" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="landing_email">Ваш Email:*</label>
                            <input id="landing_email" name="landing_email" class="form-control" type="email" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="landing_tel">Ваш Телефон:*</label>
                            <input type="tel" placeholder="+ X(XXX) XXX-XX-XX" id="landing_tel" name="landing_tel" class="phone form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <a id="modal_landing" class="btn modal-btn">Отправить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

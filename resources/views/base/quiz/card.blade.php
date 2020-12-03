<div class="modals_card">
    <div class="modal-content">
        <div class="modal-wrap-quiz">
            <a class="close_modal_card" title="Закрыть"><i class="fa fa-share" aria-hidden="true"></i></a>
            <div class="container">
                <h1>Выберите что вам необходимо сделать по созданию сайта визитки</h1>
                <form>
                    @csrf
                    <div class="row modal-radio">
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="card" id="card1" value="Полная разработка сайта">
                            <label class="form-check-label" for="card1">Полная разработка сайта</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="card" id="card2" value="Разработка дизайна сайта">
                            <label class="form-check-label" for="card2">Разработка дизайна сайта</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="card" id="card3" value="Верстка сайта по дизайн макту">
                            <label class="form-check-label" for="card3">Верстка сайта по дизайн макету</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="card" id="card4" value="Отладка существующего сайта">
                            <label class="form-check-label" for="card4">Отладка существующего сайта</label>
                        </div>
                    </div>
                    <div class="row modal-checkbox">
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="logo_development_card" value="Разработка логотипа">
                            <label class="form-check-label" for="logo_development_card">Разработка логотипа</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="fonts_card" value="Подбор или изменение шрифтов">
                            <label class="form-check-label" for="fonts_card">Подбор или изменение шрифтов</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="colors_card" value="Подбор или изменение фирменых цветов">
                            <label class="form-check-label" for="colors_card">Подбор или изменение фирменых цветов</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="any_device_card" value="Адаптация для нескольких устройств">
                            <label class="form-check-label" for="any_device_card">Адаптация для нескольких устройств</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="host_card" value="Постановка сайта на хостинг подключение домена">
                            <label class="form-check-label" for="host_card">Постановка сайта на хостинг подключение домена</label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-12 col-md-6">
                            <label for="card_name">Ваше Имя:*</label>
                            <input id="card_name" name="card_name" class="form-control" type="text" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="card_email">Ваш Email:*</label>
                            <input id="card_email" name="card_email" class="form-control" type="email" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="card_tel">Ваш Телефон:*</label>
                            <input type="tel" placeholder="+ X(XXX) XXX-XX-XX" id="card_tel" name="card_tel" class="phone form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <a id="modal_card" class="btn modal-btn">Отправить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

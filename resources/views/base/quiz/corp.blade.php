<div class="modals_corp">
    <div class="modal-content">
        <div class="modal-wrap-quiz">
            <a class="close_modal_corp" title="Закрыть"><i class="fa fa-share" aria-hidden="true"></i></a>
            <div class="container">
                <h1>Выберите что вам необходимо сделать по созданию корпаративного сайта</h1>
                <form>
                    @csrf
                    <div class="row modal-radio">
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="corp" id="corp1" value="Полная разработка сайта">
                            <label class="form-check-label" for="corp1">Полная разработка сайта</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="corp" id="corp2" value="Разработка дизайна сайта">
                            <label class="form-check-label" for="corp2">Разработка дизайна сайта</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="corp" id="corp3" value="Верстка сайта по дизайн макту">
                            <label class="form-check-label" for="corp3">Верстка сайта по дизайн макету</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="corp" id="corp4" value="Отладка существующего сайта">
                            <label class="form-check-label" for="corp4">Отладка существующего сайта</label>
                        </div>
                    </div>
                    <div class="row modal-checkbox">
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="logo_development_corp" value="Разработка логотипа">
                            <label class="form-check-label" for="logo_development_corp">Разработка логотипа</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="colors_corp" value="Подбор или изменение фирменых цветов">
                            <label class="form-check-label" for="colors_corp">Подбор или изменение фирменых цветов</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="any_device_corp" value="Адаптация для нескольких устройств">
                            <label class="form-check-label" for="any_device_corp">Адаптация для нескольких устройств</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="chat_corp" value="Добавление функции чата для сотрудников">
                            <label class="form-check-label" for="chat_corp">Добавление функции чата для сотрудников</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="host_corp" value="Постановка сайта на хостинг подключение домена">
                            <label class="form-check-label" for="host_corp">Постановка сайта на хостинг подключение домена</label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-12 col-md-6">
                            <label for="corp_name">Ваше Имя:*</label>
                            <input id="corp_name" name="corp_name" class="form-control" type="text" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="corp_email">Ваш Email:*</label>
                            <input id="corp_email" name="corp_email" class="form-control" type="email" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="corp_tel">Ваш Телефон:*</label>
                            <input type="tel" placeholder="+ X(XXX) XXX-XX-XX" id="corp_tel" name="corp_tel" class="phone form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <a id="modal_corp" class="btn modal-btn">Отправить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

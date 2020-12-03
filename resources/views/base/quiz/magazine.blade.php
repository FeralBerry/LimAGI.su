<div class="modals_magazine">
    <div class="modal-content">
        <div class="modal-wrap-quiz">
            <a class="close_modal_magazine" title="Закрыть"><i class="fa fa-share" aria-hidden="true"></i></a>
            <div class="container">
                <h1>Выберите что вам необходимо сделать по созданию сайта магазина</h1>
                <form>
                    @csrf
                    <div class="row modal-radio">
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="magazine" id="magazine1" value="Полная разработка сайта">
                            <label class="form-check-label" for="magazine1">Полная разработка сайта</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="magazine" id="magazine2" value="Разработка дизайна сайта">
                            <label class="form-check-label" for="magazine2">Разработка дизайна сайта</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="magazine" id="magazine3" value="Верстка сайта по дизайн макту">
                            <label class="form-check-label" for="magazine3">Верстка сайта по дизайн макету</label>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input class="modal-radio-input" type="radio" name="magazine" id="magazine4" value="Отладка существующего сайта">
                            <label class="form-check-label" for="magazine4">Отладка существующего сайта</label>
                        </div>
                    </div>
                    <div class="row modal-checkbox">
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="admin_panel_magazine" value="Создание админ панели">
                            <label class="form-check-label" for="admin_panel_magazine">Создание админ панели</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="online_pay_magazine" value="Подключение онлайн оплаты">
                            <label class="form-check-label" for="online_pay_magazine">Подключение онлайн оплаты</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="filters_magazine" value="Добавление фильтров для поиска товара">
                            <label class="form-check-label" for="filters_magazine">Добавление фильтров для поиска товара</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="feedback_magazine" value="Добавление обратной связи на сайт">
                            <label class="form-check-label" for="feedback_magazine">Добавление обратной связи на сайт</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="host_magazine" value="Постановка сайта на хостинг подключение домена">
                            <label class="form-check-label" for="host_magazine">Постановка сайта на хостинг подключение домена</label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-12 col-md-6">
                            <label for="magazine_name">Ваше Имя:*</label>
                            <input id="magazine_name" name="magazine_name" class="form-control" type="text" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="magazine_email">Ваш Email:*</label>
                            <input id="magazine_email" name="magazine_email" class="form-control" type="email" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="magazine_tel">Ваш Телефон:*</label>
                            <input type="tel" placeholder="+ X(XXX) XXX-XX-XX" id="magazine_tel" name="magazine_tel" class="phone form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <a id="modal_magazine" class="btn modal-btn">Отправить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

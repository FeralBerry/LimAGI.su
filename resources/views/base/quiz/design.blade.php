<div class="modals_design">
    <div class="modal-content">
        <div class="modal-wrap-quiz">
            <a class="close_modal_design" title="Закрыть"><i class="fa fa-share" aria-hidden="true"></i></a>
            <div class="container">
                <h1>Выберите что вам необходимо сделать по дизайну вашего сайта</h1>
                <form>
                    @csrf
                    <div class="row modal-radio">
                        <div class="col-sm-6">
                            <input class="modal-radio-input" type="radio" name="design" id="design1" value="Полная разработка дизайна сайта">
                            <label class="form-check-label" for="design1">Полная разработка дизайна сайта</label>
                        </div>
                        <div class="col-sm-6">
                            <input class="modal-radio-input" type="radio" name="design" id="design2" value="Переработка существующего дизайна">
                            <label class="form-check-label" for="design2">Переработка существующего дизайна</label>
                        </div>
                    </div>
                    <div class="row modal-checkbox">
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="logo_development_design" value="Разработка логотипа">
                            <label class="form-check-label" for="logo_development_design">Разработка логотипа</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="fonts_design" value="Подбор шрифтов">
                            <label class="form-check-label" for="fonts_design">Подбор шрифтов</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="colors_design" value="Подбор фирменых цветов">
                            <label class="form-check-label" for="colors_design">Подбор фирменых цветов</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="any_device_design" value="Дизайн для нескольких устройств">
                            <label class="form-check-label" for="any_device_design">Дизайн для нескольких устройств</label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-12 col-md-6">
                            <label for="design_name">Ваше Имя:*</label>
                            <input id="design_name" name="design_name" class="form-control" type="text" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="design_email">Ваш Email:*</label>
                            <input id="design_email" name="design_email" class="form-control" type="email" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="design_tel">Ваш Телефон:*</label>
                            <input type="tel" placeholder="+ X(XXX) XXX-XX-XX" id="design_tel" name="design_tel" class="phone form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <a id="modal_design" class="close_modal_design btn modal-btn">Отправить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

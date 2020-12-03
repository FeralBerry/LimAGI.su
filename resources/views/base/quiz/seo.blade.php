<div class="modals_seo">
    <div class="modal-content">
        <div class="modal-wrap-quiz">
            <a class="close_modal_seo" title="Закрыть"><i class="fa fa-share" aria-hidden="true"></i></a>
            <div class="container">
                <h1>Выберите что вам необходимо сделать по настройке Seo на вашем сайте</h1>
                <form>
                    @csrf
                    <div class="row modal-checkbox">
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="semantic_kernel_seo" value="Составление семантического ядра">
                            <label class="form-check-label" for="semantic_kernel_seo">Составление семантического ядра</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="direct_seo" value="Подключение Yandex, Google Direct, настройка индексации сайта">
                            <label class="form-check-label" for="direct_seo">Подключение Yandex, Google Direct, настройка индексации сайта</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="image_seo" value="Адаптация изображений для поисковиков">
                            <label class="form-check-label" for="image_seo">Адаптация изображений для поисковиков</label>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input class="modal-checkbox-input" type="checkbox" id="tags_seo" value="Переработка тегов для поисковых систем">
                            <label class="form-check-label" for="tags_seo">Переработка тегов для поисковых систем</label>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-12 col-md-6">
                            <label for="seo_name">Ваше Имя:*</label>
                            <input id="seo_name" name="seo_name" class="form-control" type="text" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="seo_email">Ваш Email:*</label>
                            <input id="seo_email" name="seo_email" class="form-control" type="email" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="seo_tel">Ваш Телефон:*</label>
                            <input type="tel" placeholder="+ X(XXX) XXX-XX-XX" id="seo_tel" name="seo_tel" class="phone form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <a id="modal_seo" class="btn modal-btn">Отправить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('base.quiz.corp')
@include('base.quiz.card')
@include('base.quiz.design')
@include('base.quiz.landing')
@include('base.quiz.magazine')
@include('base.quiz.seo')
@include('base.quiz.corp')
<!-- PageBanner -->
<div class="container-fluid page-banner event-grid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Страница расценок</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">На главную</a></li>
                    <li class="active">Расценки</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- PageBanner /- -->
<div class="container-fluid">
    <div class="section-padding"></div>
    <div class="section-header">
        <h3>Создаю сайт любой сложности</h3>
        <span>с уникальным дизайном</span>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><b>Дизайн сайта</b></h3>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title pricing-card-title">от 1000<small>&#8381;</small></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Уникальность</li>
                            <li>Подбор типографики</li>
                            <li>Подбор цвета компании</li>
                            <li>Интуитивно понятный интерфейс</li>
                        </ul>
                        <a class="open_design price">Уточнить стоимость</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><b>Сайт визитка</b></h3>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title pricing-card-title">от 3000<small>&#8381;</small></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Разработка или доработка дизайна</li>
                            <li>Верстка под необходимые устройства</li>
                            <li>Создание необходимых эффектов</li>
                            <li>Создание прямых ссылок для звонка или Email</li>
                        </ul>
                        <a class="open_card price">Уточнить стоимость</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><b>Одностраничный</b></h3>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title pricing-card-title">от 5000<small>&#8381;</small></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Создание фиксированого меню</li>
                            <li>Настройка якорных ссылок</li>
                            <li>Создание формы обратной связи</li>
                            <li>Добавление возможности редактирования</li>
                        </ul>
                        <a class="open_landing price">Уточнить стоимость</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><b>Корпаративный</b></h3>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title pricing-card-title">от 15000<small>&#8381;</small></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Создание форм авторизации</li>
                            <li>Содание административной панели</li>
                            <li>Создание корпаративного чата</li>
                            <li>Настройка корпаративной почты</li>
                        </ul>
                        <a class="open_corp price">Уточнить стоимость</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><b>Магазин</b></h3>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title pricing-card-title">от 25000<small>&#8381;</small></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Создание представления для пользователя</li>
                            <li>Создание административной панели</li>
                            <li>Добавление функций обратной связи</li>
                            <li>Подключение платежных систем</li>
                        </ul>
                        <a class="open_magazine price">Уточнить стоимость</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal"><b>Настройка СЕО</b></h3>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title pricing-card-title">от 5000<small>&#8381;</small></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Составление семантического ядра</li>
                            <li>Настройка базовых метатегов</li>
                            <li>Подключение сервисов Yandex, Google Direct</li>
                            <li>Оптимизация загрузки сайта</li>
                        </ul>
                        <a class="open_seo price">Уточнить стоимость</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('base.section.free_education')

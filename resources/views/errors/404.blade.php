@extends('layouts.base.layout')
@section('header')
    @include('layouts.base.header')
@endsection
@section('content')
    <!-- PageBanner -->
    <div class="container-fluid page-banner error no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="banner-content-block">
                <div class="banner-content">
                    <a href="{{ route('index') }}"><h3>Страница не найдена</h3></a>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}">На главную</a></li>
                        <li class="active">404 Error</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
    <!-- PageBanner /- -->
    <div class="container-fulid no-padding error-page">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 error-msg">
                    <h3>404</h3>
                    <p><span>Извините,</span>Страница Не Существует</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="error-content">
                        <div class="input-group">
                            <input type="text" placeholder="Поиск" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn">Поиск</button>
                            </span>
                        </div>
                        <p>Люди грядущего поколения будут знать многое, неизвестное нам, и многое останется неизвестным для тех, кто будет жить, когда изгладится всякая память о нас. Мир не стоит ломаного гроша, если в нем когда-нибудь не останется ничего непонятного.</p>
                        <p>(Луций Анней Сенека (младший))</p>
                        <a onclick="javascript:history.back(); return false;" title="Вернуться назад">Вернуться назад</a>
                        <a href="{{ route('index') }}" title="На главную">На главную</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
@endsection
@section('footer')
    @include('layouts.base.footer')
@endsection

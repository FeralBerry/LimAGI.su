@extends('layouts.base.layout')
@section('header')
    @include('layouts.base.header')
@endsection
@section('content')
<!-- PageBanner -->
<div class="container-fluid page-banner blogpost no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Регистрация</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">На главную</a></li>
                    <li class="active">Регистрация</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- PageBanner /- -->
<div class="container">
    <div class="row login-form-section">
        <div class="col-md-8 col-sm-8">
            <div class="section-header">
                <h3>Регистрация</h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Ваше имя*" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email*" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль*" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Подтверждение пароля*" autocomplete="new-password">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="submit" value="Зарегистрироваться" id="btn_submit" title="Зарегистрироваться" name="post">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 widget-area">
            @include('base.section.advertising_block')
        </div>
    </div>
</div>
@endsection
@section('footer')
    @include('layouts.base.footer')
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Куда перейти?') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>
                        <a href="{{ route('index') }}">На сайта</a>
                    </p>
                    @if(Auth::user()->role == 'admin')
                    <p>
                        <a href="{{ route('admin-index') }}">В админ панель</a>
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

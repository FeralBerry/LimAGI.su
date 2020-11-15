<!DOCTYPE html>
<html lang="en">
<head>
    @if(Auth::user()->role == 'admin') <meta http-equiv="refresh" content="1;URL={{ route('admin-index') }}" /> @endif
    <meta charset="utf-8">
    <title>{{ $title ?? 'User One-Page' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="One-Page Admin Theme">
    <meta name="author" content="One-Page">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.user.up_config')
</head>
<body class="infobar-offcanvas">
@yield('header')
<div id="wrapper">
    <div id="layout-static">
        @yield('left_sidebar')
        <div {{--class="static-content-wrapper"--}}>
            <div class="static-content">
                <div class="page-content">
                    @yield('breadcrumb')
                    <div class="container-fluid">
                        @yield('content')
                    </div> <!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div>
            @yield('footer')
        </div>
    </div>
</div>
@yield('right_sidebar')
<!-- Switcher -->
@yield('demo-options')
<!-- /Switcher -->
<!-- Load site level scripts -->
@include('layouts.user.down_config')
<!-- End loading page level scripts-->
</body>
</html>

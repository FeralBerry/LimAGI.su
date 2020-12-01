<!DOCTYPE html>
<html lang="en">
<head>
    @if(Auth::user()->role == 'user')
        @include('layouts.user.up_config')
    @endif
    @if(Auth::user()->role == 'admin')
        @include('layouts.admin.up_config')
    @endif
</head>
<body class="infobar-offcanvas">
@yield('header')
<div id="wrapper">
    <div id="layout-static">
        @yield('left_sidebar')
        <div class="static-content-wrapper">
            <div class="static-content">
                <div class="page-content">
                    @yield('breadcrumb')
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            @yield('footer')
        </div>
    </div>
</div>
@yield('right_sidebar')
@yield('demo-options')
@if(Auth::user()->role == 'admin')
    @include('layouts.admin.down_config')
@endif
@if(Auth::user()->role == 'user')
    @include('layouts.user.down_config')
@endif
</body>
</html>




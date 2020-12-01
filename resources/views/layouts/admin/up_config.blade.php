<meta charset="utf-8">
<title>{{ $title ?? 'Admin LimAGI' }}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="description" content="{{ $description ?? 'Панель администратора сайта LimAGI.su' }}">
<meta name="description" content="{{ $description ?? 'Панель администратора сайта LimAGI.su' }}">
<meta name="author" content="LimAGI">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 10]>
    <script type="text/javascript" src="{{ asset('admin/js/media.match.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/placeholder.min.js') }}"></script>
<![endif]-->
<!--[if lt IE 9]>
    <link type="text/css" href="{{ asset('admin/css/ie8.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <script type="text/javascript" src="{{ asset('admin/plugins/charts-flot/excanvas.min.js') }}"></script>
    <script type="text/javascript" src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <link type="text/css" href="{{ asset('admin/css/styles.css') }}" rel="stylesheet">                                     <!-- Core CSS with all styles -->
    <link type="text/css" href="{{ asset('admin/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="{{ asset('admin/plugins/jstree/dist/themes/avenger/style.min.css') }}" rel="stylesheet">    <!-- jsTree -->
    <link type="text/css" href="{{ asset('admin/plugins/codeprettifier/prettify.css') }}" rel="stylesheet">                <!-- Code Prettifier -->
@if(route('admin-index') == url()->current())
    <link type="text/css" href="{{ asset('admin/plugins/form-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet"> 	<!-- DateRangePicker -->
    <link type="text/css" href="{{ asset('admin/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet"> 					<!-- FullCalendar -->
    <link type="text/css" href="{{ asset('admin/plugins/charts-chartistjs/chartist.min.css') }}" rel="stylesheet"> 				<!-- Chartist -->
@elseif(route('admin-blog') == url()->current() ||
        route('admin-blog-edit', $id ?? '') == url()->current() ||
        route('admin-blog-add') == url()->current() ||
        route('admin-free-courses') == url()->current() ||
        route('admin-free-courses-add') == url()->current() ||
        route('admin-free-courses-edit', $id ?? '') == url()->current() ||
        route('admin-pay-courses') == url()->current() ||
        route('admin-pay-courses-add') == url()->current() ||
        route('admin-pay-courses-edit', $id ?? '') == url()->current()
        )
    <link type="text/css" href="{{ asset('admin/plugins/form-select2/select2.css') }}" rel="stylesheet">                        <!-- Select2 -->
    <link type="text/css" href="{{ asset('admin/plugins/form-multiselect/css/multi-select.css') }}" rel="stylesheet">           <!-- Multiselect -->
    <link type="text/css" href="{{ asset('admin/plugins/form-fseditor/fseditor.css') }}" rel="stylesheet">                      <!-- FullScreen Editor -->
    <link type="text/css" href="{{ asset('admin/plugins/form-tokenfield/bootstrap-tokenfield.css') }}" rel="stylesheet">        <!-- Tokenfield -->
    <link type="text/css" href="{{ asset('admin/plugins/switchery/switchery.css') }}" rel="stylesheet">        					<!-- Switchery -->
    <link type="text/css" href="{{ asset('admin/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet"> <!-- Touchspin -->
    <link type="text/css" href="{{ asset('admin/js/jqueryui.css') }}" rel="stylesheet">        									<!-- jQuery UI CSS -->
    <link type="text/css" href="{{ asset('admin/plugins/iCheck/skins/minimal/_all.css') }}" rel="stylesheet">                   <!-- Custom Checkboxes / iCheck -->
    <link type="text/css" href="{{ asset('admin/plugins/iCheck/skins/flat/_all.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin/plugins/iCheck/skins/square/_all.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin/plugins/card/lib/css/card.css') }}" rel="stylesheet"> 									<!-- Card -->
@endif
<link type="text/css" href="{{ asset('admin/plugins/iCheck/skins/minimal/blue.css') }}" rel="stylesheet">              <!-- iCheck -->

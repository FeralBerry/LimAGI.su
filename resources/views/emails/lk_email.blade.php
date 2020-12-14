<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

</head>
<body>
<div style="text-align: center">
    <div class="col-md-4 col-sm-4 col-xs-12 logo-block">
        <a href="{{ route('index') }}" title="LimAGI">
            <img src="{{ asset('base/logo.png') }}" alt="LimAGI" width="70" height="60"/>
            <h3>LimAGI</h3>
        </a>
    </div>
    <p><a href="mailto:{{ $data_contact['email'] }}">{{ $data_contact['email'] }}</a></p>
</div>
</body>
</html>

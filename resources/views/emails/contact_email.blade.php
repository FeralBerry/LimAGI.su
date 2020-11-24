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
    <h2>{{ $data_contact['name'] }}</h2>
    <p><a href="mailto:{{ $data_contact['email'] }}">{{ $data_contact['email'] }}</a></p>
    <p><a href="tel:{{ $data_contact['phone'] }}">{{ $data_contact['phone'] }}</a></p>
    <p>@if(isset($data_contact['contact_name'])){{ $data_contact['contact_name'] }}@endif</p>
    <p>@if(isset($data_contact['contact_email']))<a href="mailto:{{ $data_contact['contact_email'] }}">{{ $data_contact['contact_email'] }}</a>@endif</p>
    <p>@if(isset($data_contact['contact_phone']))<a href="mailto:{{ $data_contact['contact_phone'] }}">{{ $data_contact['contact_phone'] }}</a>@endif</p>
    <p>@if(isset($data_contact['contact_subject'])){{ $data_contact['contact_subject'] }}@endif</p>
    <p>@if(isset($data_contact['contact_message'])){{ $data_contact['contact_message'] }}@endif</p>
</div>
</body>
</html>

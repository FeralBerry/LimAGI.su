<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    @include('emails.style')
</head>
<body>
<div class="col-4" style="text-align: center">
    <a href="{{ route('index') }}" title="LimAGI">
        <img src="{{ asset('base/logo.png') }}" alt="LimAGI" width="70" height="60"/>
    </a>
</div>
<div class="row">
    <div class="col-2">
        <h3>@if(isset($data_contact['contact_name'])){{ $data_contact['contact_name'] }}@endif</h3>
    </div>
    <div class="col-2">
        <h4>@if(isset($data_contact['contact_email']))<a href="mailto:{{ $data_contact['contact_email'] }}">{{ $data_contact['contact_email'] }}</a>@endif</h4>
    </div>
</div>
<div class="col-4">
    <h4>@if(isset($data_contact['contact_subject'])){{ $data_contact['contact_subject'] }}@endif</h4>
</div>
<div class="col-4">
    <p>@if(isset($data_contact['contact_phone']))<a href="tel:{{ $data_contact['contact_phone'] }}">{{ $data_contact['contact_phone'] }}</a>@endif</p>
</div>
<div class="col-4">
    <p>@if(isset($data_contact['contact_message'])){{ $data_contact['contact_message'] }}@endif</p>
</div>
</body>
</html>

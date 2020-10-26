<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
</head>
<body>
<h1>{{ $data_contact['name'] }}</h1>
<h2>{{ $data_contact['email'] }}</h2>
<h2>{{ $data_contact['phone'] }}</h2>
<p>@if(isset($data_contact['message'])){{ $data_contact['message'] }}@endif</p>
</body>
</html>

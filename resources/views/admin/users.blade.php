@extends('layouts.admin.layout')
@section('header')
    @include('layouts.admin.header')
@endsection
@section('left_sidebar')
    @include('layouts.admin.left_sidebar')
@endsection
@section('right_sidebar')
    @include('layouts.admin.right_sidebar')
@endsection
@section('breadcrumb')
    @include('layouts.admin.breadcrumb')
@endsection
@section('content')
    @include('admin.section.users.users')
@endsection
@section('footer')
    @include('layouts.admin.footer')
@endsection
@section('demo-options')
    @include('layouts.admin.demo-option')
@endsection

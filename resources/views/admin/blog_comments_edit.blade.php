@extends('layouts.admin.layout')
@section('header')
    @include('layouts.admin.header')
@endsection
@section('left_sidebar')
    @include('layouts.admin.left_sidebar')
@endsection
@section('right_sidebar')
    @include('layouts.common_element.right_sidebar')
@endsection
@section('breadcrumb')
    @include('layouts.admin.breadcrumb')
@endsection
@section('content')
    @include('admin.section.blog.blog_comments_edit')
@endsection
@section('footer')
    @include('layouts.common_element.footer')
@endsection
@section('demo-options')
    @include('layouts.admin.demo-option')
@endsection

@extends('layouts.common_element.layout')
@section('header')
    @include('layouts.common_element.header')
@endsection
@section('left_sidebar')
    @include('layouts.common_element.left_sidebar')
@endsection
@section('right_sidebar')
    @include('layouts.common_element.right_sidebar')
@endsection
@section('breadcrumb')
    @include('layouts.admin.breadcrumb')
@endsection
@section('content')
    @include('admin.section.blog.blog_tags_index')
@endsection
@section('footer')
    @include('layouts.common_element.footer')
@endsection
@section('demo-options')
    @include('layouts.common_element.demo-option')
@endsection

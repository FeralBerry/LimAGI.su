<ol class="breadcrumb">
    <li class=""><a href="{{ route('admin-index') }}">На главную</a></li>
    @if(isset($breadcrumb_user))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="{{ route('admin-users') }}">{{ $breadcrumb_user }}</a>
        </li>
    @endif
    @if(isset($breadcrumb_blog))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="{{ route('admin-blog') }}">{{ $breadcrumb_blog }}</a>
        </li>
    @endif
    @if(isset($breadcrumb_blog_tags))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="{{ route('admin-blogTags') }}">{{ $breadcrumb_blog_tags }}</a>
        </li>
    @endif
    @if(isset($breadcrumb_blog_cat))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="{{ route('admin-blogCat') }}">{{ $breadcrumb_blog_cat }}</a>
        </li>
    @endif
    @if(isset($breadcrumb_portfolio))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="{{ route('admin-portfolio') }}">{{ $breadcrumb_portfolio }}</a>
        </li>
    @endif
    @if(isset($breadcrumb_about))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="{{ route('admin-about') }}">{{ $breadcrumb_about }}</a>
        </li>
    @endif
    @if(isset($second_breadcrumb))
        <li class="active">
            <a href="
            @if(isset($breadcrumb_user))
                {{ route('admin-users-edit',$id) }}
            @endif
            @if(isset($breadcrumb_blog))
                {{ route('admin-blog-add') }}
            @endif
            @if(isset($breadcrumb_blog_tags))
                {{ route('admin-blogTags-add') }}
            @endif
            @if(isset($breadcrumb_blog_tags))
                {{ route('admin-blogCat-add') }}
            @endif
            @if(isset($breadcrumb_portfolio))
            {{ route('admin-portfolio-add') }}
            @endif">
                {{ $second_breadcrumb }}</a>
        </li>
    @endif
</ol>
<div class="page-heading">
    <h1>
        @if(!isset($second_breadcrumb))
            @if(isset($breadcrumb_home))
                {{ $breadcrumb_home }}
            @endif
            @if(isset($index))
                {{ $index }}
            @endif
            @if(isset($breadcrumb_user))
                {{ $breadcrumb_user }}
            @endif
            @if(isset($breadcrumb_blog))
                {{ $breadcrumb_blog }}
            @endif
            @if(isset($breadcrumb_blog_tags))
                {{ $breadcrumb_blog_tags }}
            @endif
            @if(isset($breadcrumb_portfolio))
                {{ $breadcrumb_portfolio }}
            @endif

            @else
            {{ $second_breadcrumb }}
        @endif
    </h1>
    <div class="options">
        <div class="btn-toolbar">
            <a href="#" class="btn btn-default"><i class="fa fa-fw fa-wrench"></i></a>
        </div>
    </div>
</div>

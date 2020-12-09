<ol class="breadcrumb">
    <li class=""><a href="{{ route('user-index') }}">На главную</a></li>
    @if(isset($breadcrumb_user_info))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="{{ route('user-info') }}">{{ $breadcrumb_user_info }}</a>
        </li>
    @endif
    @if(isset($breadcrumb_free_courses))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="
            @if(isset($courses))
                @foreach($courses as $course)
                    @foreach($courses_name as $name)
                        @if($name->id == $course->category_id)
                            {{ route($name->free_link_name) }}
                        @endif
                    @endforeach
                @endforeach
            @endif
                ">{{ $breadcrumb_free_courses }}</a>
        </li>
    @endif
    @if(isset($second_breadcrumb))
        <li class="active">
            <a href="#">{{ $second_breadcrumb }}</a>
        </li>
    @endif
</ol>
<div class="page-heading">
    <h1>
        @if(!isset($second_breadcrumb))
            @if(isset($breadcrumb_home))
                {{ $breadcrumb_home }}
            @endif
            @if(isset($breadcrumb_user_info))
                {{ $breadcrumb_user_info }}
            @endif
            @if(isset($breadcrumb_free_courses))
                {{ $breadcrumb_free_courses }}
            @endif
            @else
            {{ $second_breadcrumb }}
        @endif
    </h1>
    {{--<div class="options">
        <div class="btn-toolbar">
            <a href="#" class="btn btn-default"><i class="fa fa-fw fa-wrench"></i></a>
        </div>
    </div>--}}
</div>

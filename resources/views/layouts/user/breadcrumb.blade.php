<ol class="breadcrumb">
    <li class=""><a href="{{ route('user-index') }}">На главную</a></li>
    @if(isset($breadcrumb_user_info))
        <li @if(!isset($second_breadcrumb))class="active"@endif>
            <a href="{{ route('user-info') }}">{{ $breadcrumb_user_info }}</a>
        </li>
    @endif
    @if(isset($second_breadcrumb))
        <li class="active">
            <a href="
            @if(isset($breadcrumb_user))
                {{ route('admin-users-edit',$id) }}
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

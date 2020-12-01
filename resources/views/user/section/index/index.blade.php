<div class="row">
    <div class="col-md-3">
        <div class="panel panel-profile">
            <div class="panel-body">
                @include('user.section.user_info_bar')
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            {{--<div class="panel-heading">
                <h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li><a href="<span id="_"></span>projects" data-toggle="tab">Projects</a></li>
                        <li><a href="<span id="_"></span>photos" data-toggle="tab">Photos</a></li>
                        <li><a href="<span id="_"></span>followers" data-toggle="tab">Followers</a></li>
                        <li><a href="<span id="_"></span>portoflio" data-toggle="tab">Portfolio</a></li>
                    </ul>
                </h2>
            </div>--}}
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="timeline">
                        <ul class="timeline">
                            @if(isset($blog))
                            @foreach($blog as $b)
                            <li class="timeline-orange">
                                <div class="timeline-icon"><i class="fa
                                    @foreach($blogCat as $cat)
                                        @if($cat->id == $b->blog_cat_id)
                                            {{ $cat->icon }}
                                        @endif
                                    @endforeach
                                        "></i></div>
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        <span class="author">Статья <a href="#">{{ $b->author }}</a></span>
                                        <span class="date">{{ $b->created_at }}</span>
                                    </div>
                                    <div class="timeline-content">
                                        <h3>{{ $b->title }}</h3>
                                        <p>{!! $b->brief !!}</p>
                                    </div>
                                    <div class="timeline-footer">
                                        <a href="{{ route('blog-post', $b->id) }}" class="btn-link pull-left">Подробнее</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            {{ $blog->links() }}
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

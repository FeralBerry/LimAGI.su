<div class="row">
    <div class="col-md-3">
        <div class="panel panel-profile">
            <div class="panel-body">
                <div class="user-card">
                    <div class="avatar">
                        <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                    </div>
                    <div class="contact-name">{{ Auth::user()->name }}</div>
                    @if(isset(Auth::user()->specialty))
                        <div class="contact-status">{{ Auth::user()->specialty }}</div>
                    @endif
                    <ul class="details">
                        <li><a href="#">{{ Auth::user()->email }}</a></li>
                        @if(isset(Auth::user()->phone))<li>{{ Auth::user()->phone }}</li>@endif
                        @if(isset(Auth::user()->adress))<li>{{ Auth::user()->adress }}</li>@endif
                        @if(isset(Auth::user()->web_site))<li><a href="{{ Auth::user()->web_site }}">{{ Auth::user()->web_site }}</a></li>@endif
                    </ul>
                </div>
                @if(isset(Auth::user()->facebook) || isset(Auth::user()->twitter) || isset(Auth::user()->github) || isset(Auth::user()->instagram))
                    <hr class="outsider">
                    <div class="text-center">
                        @if(isset(Auth::user()->facebook))<a href="{{ Auth::user()->facebook }}" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i></a>@endif
                        @if(isset(Auth::user()->twitter))<a href="{{ Auth::user()->twitter }}" class="btn btn-social btn-twitter"><i class="fa fa-twitter"></i></a>@endif
                        @if(isset(Auth::user()->github))<a href="{{ Auth::user()->github }}" class="btn btn-social btn-github"><i class="fa fa-github"></i></a>@endif
                        @if(isset(Auth::user()->instagram))<a href="{{ Auth::user()->instagram }}" class="btn btn-social btn-instagram"><i class="fa fa-instagram"></i></a>@endif
                    </div>
                @endif
                @if(isset(Auth::user()->motto))
                    <hr class="outsider">
                    <p class="m-n">Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p>
                @endif
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

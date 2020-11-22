<aside class="widget widget_recent">
    <div class="widget-title">
        <span class="icon icon-Notes"></span>
        <h3>Последние посты</h3>
    </div>
    <div class="recent-block">
        @foreach($recents as $recent)
            <div class="recent-content">
                <a href="{{ route('blog-post', $recent->id) }}">
                    @if(isset($recent->img))
                        @if(empty($recent->img) !== true)
                            <img src="{{ asset('base/img/blog/img/') }}/{{ $recent->img }}" alt="{{ $recent->title }}" width="72" height="72"/>
                        @endif
                    @endif
                    @if(isset($recent->video_img))
                        @if(empty($recent->video_img) !== true)
                            <img src="{{ asset('base/img/blog/video-img/') }}/{{ $recent->video_img }}" alt="{{ $recent->title }}" width="72" height="72"/>
                        @endif
                    @endif
                </a>
                <h3><a href="{{ route('blog-post', $recent->id) }}">{{ $recent->title }}</a></h3>
                <a href="{{ route('blog-post', $recent->id) }}">
                    @if(isset($b->updated_at))
                        {{ date_format(date_create($b->updated_at), 'd') }}
                        /
                        {{ date_format(date_create($b->updated_at), 'M.Y') }}
                    @else
                        {{ date_format($b->created_at, 'd') }}
                        /
                        {{ date_format($b->created_at, 'M.Y') }}
                    @endif
                </a>
            </div>
        @endforeach
    </div>
</aside>

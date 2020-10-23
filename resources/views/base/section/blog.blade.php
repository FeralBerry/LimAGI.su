<div class="section">
    <div class="container header-big-text">
        <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
                <h2>Блог</h2>
                <p>Последние новости!</p>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="section padding-bottom">
    <div class="container">
        <div class="twelve columns">
            <div id="blog-filter">
                <ul id="filter">
                    <li><a href="#" class="current" data-filter="*" title="">Все</a></li>
                    @foreach($blog_cat as $category)
                        <li><a href="#" data-filter=".{{ $category->cat_name }}" title="">{{ $category->cat_name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="blog-grid">
        @foreach($blog as $b)
        <div class="blog-box-1 black-background @foreach($blog_cat as $category) @if($b->blog_cat_id == $category->id) {{ $category->cat_name }} @endif @endforeach">
            <div class="date">@if(isset($b->updated_at)) <p><span> {{ date_format($b->updated_at, 'd') }}/</span>{{ date_format($b->updated_at, 'M.Y') }}<em>{{ $b->author }}</em></p> @else<p><span> {{ date_format($b->created_at, 'd') }}/</span>{{ date_format($b->created_at, 'M.Y') }}<em>{{ $b->author }}</em></p>@endif</div>
            @if(isset($b->img))
                @if(empty($b->img) !== true)
                    <a href="{{ route('blog-post', $b->id) }}" class="animsition-link">
                        <img src="{{ asset('images/blog/img/') }}/{{ $b->img }}" alt="{{ $b->title }}">
                    </a>
                @endif
            @endif
            @if(isset($b->video_img))
                @if(empty($b->video_img) !== true)
                    <figure class="vimeo">
                        <a href="{{ $b->video }}">
                            <img src="{{ asset('images/blog/video-img/') }}/{{ $b->video_img }}" alt="{{ $b->title }}" />
                        </a>
                    </figure>
                @endif
            @endif
            <h6>{{ $b->title }}</h6>
            <div class="p-box"><p>{!! $b->brief !!}</p></div>
            <a href="{{ route('blog-post', $b->id) }}" class="animsition-link blog-link chaffle" data-lang="en">Подробнее</a>
        </div>
        @endforeach
    </div>
</div>
<div class="clear"></div>





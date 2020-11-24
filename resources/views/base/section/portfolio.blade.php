<!-- PageBanner -->
<div class="container-fluid page-banner event-grid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Страница просмотра портфолио</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">На главную</a></li>
                    <li class="active">Портфолио</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- PageBanner /- -->
<!-- Upcoming Event -->
<div class="container-fluid upcoming-event upcoming-event-section latest-blog no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>Портфолио</h3>
            <span>последние разработки</span>
        </div>
        <div class="row">
            @foreach($portfolio as $item)
            <div class="col-md-6 col-sm-12 col-xs-12">
                <article class="type-post">
                    <div class="entry-cover">
                        <a href="#"><img src="{{ asset('/base/img/portfolio/') }}/{{ $item->img }}" alt="{{ $item->title }}" width="388" height="295"/></a>
                    </div>
                    <div class="entry-block">
                        <div class="entry-title">
                            <a href="#" title="Organizing Corporate Press Meet"><h3>{{ $item->title }}</h3></a>
                        </div>
                        <div class="entry-meta">
                            <div class="post-date">
                                    @if(isset($item->updated_at))
                                        <p>{{ date_format(date_create($item->updated_at), 'M') }}<span>{{ date_format(date_create($item->updated_at), 'd') }}</span></p>
                                    @else
                                        <p>{{ date_format(date_create($item->created_at), 'M') }}<span>{{ date_format(date_create($item->created_at), 'd') }}</span></p>
                                    @endif
                            </div>
                            <div class="post-metablock">
                                <div class="post-time">
                                    <span>
                                        @if(isset($item->updated_at))
                                            {{ date_format(date_create($item->updated_at), 'd') }}
                                            /
                                            {{ date_format(date_create($item->updated_at), 'M.Y') }}
                                        @else
                                            {{ date_format($item->created_at, 'd') }}
                                            /
                                            {{ date_format($item->created_at, 'M.Y') }}
                                        @endif
                                    </span>
                                </div>
                                <div class="post-location">
                                    <span>LimAGI</span>
                                </div>
                            </div>
                        </div>
                        <div class="entry-content">
                            <p>{{ $item->sub_title }}</p>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        {{ $portfolio->links() }}
    </div>
    <div class="section-padding"></div>
</div><!-- Upcoming Event /- -->


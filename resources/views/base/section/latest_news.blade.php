<!-- Latest News -->
<div class="container-fluid latest-blog latest-blog-section no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <img src="{{ asset('base/img/separator.png') }}" style="height: 30px; margin-bottom: 20px">
            <h3>Интересные факты и последние изменения</h3>
            <span>Последние новости</span>
        </div>
        <div class="row">
            @foreach($blog as $b)
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="type-post">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="entry-cover">
                                <a href="{{ route('blog-post', $b->id) }}">
                                    @if(isset($b->img))
                                        @if(empty($b->img) !== true)
                                            <a href="{{ route('blog-post', $b->id) }}">
                                                <img src="{{ asset('base/img/blog/img/') }}/{{ $b->img }}" alt="{{ $b->title }}" width="300" height="250"/>
                                            </a>
                                        @endif
                                    @endif
                                    @if(isset($b->video_img))
                                        @if(empty($b->video_img) !== true)
                                            <figure class="vimeo">
                                                <a href="{{ $b->video }}">
                                                    <img src="{{ asset('base/img/video-img/') }}/{{ $b->video_img }}" alt="{{ $b->title }}" width="300" height="250"/>
                                                </a>
                                            </figure>
                                        @endif
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="entry-meta">
                                @include('base.section.post_info')
                            </div>
                            <div class="entry-title">
                                <a href="{{ route('blog-post', $b->id) }}" title="{{ $b->title }}">
                                    <h3>{{ $b->title }}</h3>
                                </a>
                            </div>
                            <div class="entry-content">
                                <p>{!! $b->brief !!}</p>
                            </div>
                            <a href="{{ route('blog-post', $b->id) }}" class="learn-more" title="Читать подробнее">Читать подробнее</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- Latest News /- -->

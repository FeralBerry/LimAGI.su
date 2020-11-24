<!-- PageBanner -->
<div class="container-fluid page-banner blog no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Новости сайта</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">На главную</a></li>
                    <li class="active">Блог</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- PageBanner /- -->
<!-- Blog News -->
<div class="container-fluid eventlist blog upcoming-event latest-blog no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-6 col-xs-6 content-area">
                <div class="row">
                    @if(isset($blog))
                    @foreach($blog as $b)
                    <div class="col-md-12 col-sm-12 col-xs-6 blog-box item elem
                        @foreach($blog_cat as $category)
                            @if($b->blog_cat_id == $category->id)
                                {{ $category->cat_name }}
                            @endif
                        @endforeach">
                        <article class="type-post">
                            <div class="entry-cover">
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
                                                <img src="{{ asset('base/img/blog/video-img/') }}/{{ $b->video_img }}" alt="{{ $b->title }}" width="300" height="250"/>
                                            </a>
                                        </figure>
                                    @endif
                                @endif
                            </div>
                            <div class="entry-block">
                                <div class="entry-meta">
                                    <div class="post-date">
                                        <a href="#" title=""><i class="fa fa-calendar" aria-hidden="true"></i>
                                            <span>
                                                @if(isset($b->updated_at))
                                                    {{ date_format(date_create($b->updated_at), 'd') }}
                                                    /
                                                    {{ date_format(date_create($b->updated_at), 'M.Y') }}
                                                @else
                                                    {{ date_format($b->created_at, 'd') }}
                                                    /
                                                    {{ date_format($b->created_at, 'M.Y') }}
                                                @endif
                                            </span>
                                        </a>
                                    </div>
                                    <div class="post-admin">
                                        <a href="#" title="{{ $b->author }}"><i class="fa fa-user" aria-hidden="true"></i><span>by</span>{{ $b->author }}</a>
                                    </div>
                                    <div class="post-like">
                                        <a href="#" title="Likes"><i class="fa fa-heart-o" aria-hidden="true"></i></a><span>03 Likes</span>
                                    </div>
                                    {{--<div class="post-share">
                                        <a href="#" title="Share"><i class="fa fa-share-alt" aria-hidden="true"></i></a><span><a href="{{ route('blog-post', $b->id) }}" title="Share">Share Post</a></span>
                                    </div>--}}
                                </div>
                                <div class="entry-title">
                                    <a href="{{ route('blog-post', $b->id) }}" title="{{ $b->title }}"><h3>{{ $b->title }}</h3></a>
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
                <!-- Ow Pagination -->
                <div class="ow-pagination">
                    {{ $blog->links() }}
                </div><!-- Ow Pagination /- -->
                @endif
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 widget-area">
                <aside class="widget widget-search">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." class="form-control">
                        <span class="input-group-btn">
								<button type="button" class="btn"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </aside>
                <aside class="widget widget_categories">
                    <div class="widget-title">
                        <span class="icon icon-PaperClip"></span>
                        <h3>Категории блога</h3>
                    </div>
                    <ul>
                    <?php $blog_count = count($blog);?>
                        <li><a class="blog_categories_filter" data-filter="all" title="">Все<span>{{ $blog_count }}</span></a></li>
                        @foreach($blog_cat as $category)
                            <li>
                                <a class="blog_categories_filter" title="{{ $category->cat_name }}" data-filter="{{ $category->cat_name }}">{{ $category->cat_name }}
                                    <span>
                                        <?php $cat_count=0;?>
                                        @foreach($blog as $b)
                                            @if($b->blog_cat_id == $category->id)
                                                <?php $cat_count +=1;?>
                                            @endif
                                        @endforeach
                                        {{ $cat_count }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
                @include('base.section.advertising_block')
                @include('base.section.recent_news')
                {{--<aside class="widget widget_archives widget_categories">
                    <div class="widget-title">
                        <span class="icon icon-PaperClip"></span>
                        <h3>Archives</h3>
                    </div>
                    <ul>
                        <li><a title="December 2015" href="#">December 2015<span>12</span></a></li>
                        <li><a title="November 2015" href="#">November 2015<span>18</span></a></li>
                        <li><a title="October 2015" href="#">October 2015<span>21</span></a></li>
                        <li><a title="September 2015" href="#">September 2015<span>18</span></a></li>
                        <li><a title="August 2015" href="#">August 2015<span>13</span></a></li>
                    </ul>
                </aside>
                <aside class="widget widget_tags">
                    <div class="widget-title">
                        <span class="icon icon-Tag"></span>
                        <h3>Popular Tags</h3>
                    </div>
                    <div class="tag-block">
                        <a title="Event" href="#">Event</a>
                        <a title="Meetings" href="#">Meetings</a>
                        <a title="Charity" href="#">Charity</a>
                        <a title="Communication" href="#">Communication</a>
                        <a title="Schedule" href="#">Schedule</a>
                        <a title="Conference" href="#">Conference</a>
                        <a title="Services" href="#">Services</a>
                    </div>
                </aside>--}}
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- Latest News /- -->

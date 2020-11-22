<!-- PageBanner -->
<div class="container-fluid page-banner blogpost no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                @foreach($blog as $b)
                <h3>{{ $b->title }}</h3>
                @endforeach
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">На главную</a></li>
                    <li><a href="{{ route('blog') }}">Блог</a></li>
                    @foreach($blog as $b)
                    <li class="active">{{ $b->title }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
<!-- PageBanner /- -->
<!-- Blog News -->
<div class="container-fluid eventlist blog blogpost upcoming-event latest-blog no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-6 content-area">
                @foreach($blog as $b)
                <article class="type-post">
                    <div class="entry-cover">
                        @if(isset($b->img))
                            @if(empty($b->img) !== true)
                                <a href="{{ route('blog-post', $b->id) }}">
                                    <img src="{{ asset('base/img/blog/img/') }}/{{ $b->img }}" alt="{{ $b->title }}" width="810" height="376"/>
                                </a>
                            @endif
                        @endif
                        @if(isset($b->video_img))
                            @if(empty($b->video_img) !== true)
                                <figure class="vimeo">
                                    <a href="{{ $b->video }}">
                                        <img src="{{ asset('base/img/blog/video-img/') }}/{{ $b->video_img }}" alt="{{ $b->title }}" width="810" height="376"/>
                                    </a>
                                </figure>
                            @endif
                        @endif
                    </div>
                    <div class="entry-block">
                        <div class="entry-meta">
                            <div class="post-date">
                                <a href="#" title="">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
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
                                <a href="#" title="{{ $b->author }}"><i class="fa fa-user" aria-hidden="true"></i><span>by</span> {{ $b->author }}</a>
                            </div>
                            <div class="post-like">
                                <a href="#" title="Likes"><i class="fa fa-heart-o" aria-hidden="true"></i></a><span>03 Likes</span>
                            </div>
                            {{--<div class="post-share">
                                <a href="#" title="Share"><i class="fa fa-share-alt" aria-hidden="true"></i></a><span><a href="#" title="Share">Share Post</a></span>
                            </div>--}}
                            <div class="post-tag">
                                @foreach($blog_cat as $cat)
                                    @if($cat->id == $b->blog_cat_id)
                                        <a href="{{ route('blog') }}" title="Tag"><i class="fa fa-tag" aria-hidden="true"></i></a>
                                        <ul>
                                            <li><a href="{{ route('blog') }}" title="{{ $cat->cat_name }}">{{ $cat->cat_name }}</a></li>
                                        </ul>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="entry-title">
                            <h3>{{ $b->title }}</h3>
                        </div>
                        <div class="entry-content">
                            @foreach($blog as $b)
                                {!! $b->desc !!}
                            @endforeach
                        </div>
                    </div>
                </article>
                <div class="about-author">
                    <div class="author-intro">
                        <img alt="{{ $b->author }}" src="{{ asset('base/img/author.jpg') }}" width="150" height="150"/>
                        <a href="#" title="{{ $b->author }}">{{ $b->author }}</a>
                        @if(isset(Auth::user()->facebook) || isset(Auth::user()->twitter) || isset(Auth::user()->github) || isset(Auth::user()->instagram))
                            <ul>
                                @if(isset(Auth::user()->facebook))<li class="fb"><a class="facebook-color" href="#"><i class="fa fa-facebook"></i></a></li>@endif
                                @if(isset(Auth::user()->twitter))<li class="twt"><a class="twitter-color" href="#"><i class="fa fa-twitter"></i></a></li>@endif
                                @if(isset(Auth::user()->github))<li class="gp"><a class="linkedin-color" href="#"><i class="fa fa-github"></i></a></li>@endif
                                @if(isset(Auth::user()->instagram))<li class="lnk"><a class="twitter-color" href="#"><i class="fa fa-instagram"></i></a></li>@endif
                            </ul>
                        @endif
                        @if(isset(Auth::user()->motto))
                            <p>{{ Auth::user()->motto }}</p>
                        @endif
                    </div>
                </div>
                <!-- Post Comment -->
                @endforeach
                <div class="post-comment">

                    @if(isset($blog_comments))
                        <?php $count_blog = count($blog_comments) ?>
                        <h3><span>{{ $count_blog }}</span> Коментарии</h3>
                        @foreach($blog_comments as $comment)
                            <div class="media">
                                <div class="media-left">
                                    <a href="{{ route('blog-alias',$b->author) }}" title="{{ $comment->name }}">
                                        <img alt="{{ $comment->name }}" src="{{ asset('base/img/comment3.jpg') }}" class="media-object" width="97" height="97"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="media-content last">
                                        <h4 class="media-heading">
                                            {{ $comment->name }}<span>{{ $comment->created_at }}</span><a href="#"><i class="fa fa-reply"></i>Reply</a>
                                        </h4>
                                        <p>{{ $comment->comments }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                @if(!Auth::user())
                    <form action="{{ route('blog-post', $id) }}" method="post" class="comment-form">
                        @csrf
                        <h3>Написать комментарий</h3>
                        <div class="row">
                            <input type="hidden" value="{{ $id }}" id="id">
                            <div class="form-group col-md-6">
                                <input name="name" id="name" minlength="3" type="text" required placeholder="Ваше имя*" class="form-control"/>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="email" id="email" type="text" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" required placeholder="Email*" class="form-control"/>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" placeholder="Комментарий*" minlength="20" rows="8" class="form-control"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Отправить комментарий" name="Submit Comment" title="Отправить комментарий"/>
                    </form>
                @else
                    <form action="{{ route('blog-post', $id) }}" method="post" class="comment-form">
                        @csrf
                        <h3>Написать комментарий</h3>
                        <div class="row">
                            <input type="hidden" value="{{ $id }}" id="id">
                            <input name="name" id="name" type="hidden" value="{{ Auth::user()->name }}"  placeholder="Ваше имя: *" minlength="3" required>
                            <input name="email" id="email" type="hidden"  value="{{ Auth::user()->email }}" placeholder="E-Mail: *" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" required >
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" placeholder="Комментарий*" minlength="20" rows="8" class="form-control"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Отправить комментарий" name="Submit Comment" title="Отправить комментарий"/>
                    </form>
                @endif
            </div>
            <div class="col-md-3 col-sm-6 widget-area">
                <aside class="widget widget-search">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </aside>
                {{--<aside class="widget widget_categories">
                    <div class="widget-title">
                        <span class="icon icon-PaperClip"></span>
                        <h3>Categories</h3>
                    </div>
                    <ul>
                        <li><a title="Internal Conference" href="#">Internal Conference<span>09</span></a></li>
                        <li><a title="Event Management" href="#">Event Management<span>10</span></a></li>
                        <li><a title="Industrial Meeting" href="#">Industrial Meeting<span>16</span></a></li>
                        <li><a title="Paper Meetups" href="#">Paper Meetups<span>11</span></a></li>
                        <li><a title="Charity Events" href="#">Charity Events<span>13</span></a></li>
                    </ul>
                </aside>--}}
                <aside class="widget widget_event">
                    <div class="event-block">
                        <h3>January 03-07</h3>
                        <p>09, Design Street, New York, United States </p>
                        <div class="event-content">
                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                            <h4>Daniel Lesner<span>public speaker</span></h4>
                        </div>
                        <a title="Register now" href="#">Register Now</a>
                    </div>
                </aside>
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
                </aside>--}}
                <aside class="widget widget_tags">
                    <div class="widget-title">
                        <span class="icon icon-Tag"></span>
                        <h3>Теги</h3>
                    </div>
                    <div class="tag-block">
                        @foreach($tags as $tag => $k)
                            @foreach($blog_tags as $t)
                                @if($k == $t->id)
                                    <a title="{{ $t->name }}" href="{{ route('blog-alias', $t->id) }}">{{ $t->name }}</a>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- Latest News /- -->

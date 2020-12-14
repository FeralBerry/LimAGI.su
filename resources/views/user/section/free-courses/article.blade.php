<div class="row">
    <div class="col-md-8">
        <div class="panel">
            <?php
            $com = 0;
            $count_comments = count($free_courses_comment);
            foreach($courses as $course){
                foreach($free_courses_comment as $comment){
                    if($comment->free_courses_id == $course->id){
                        $com = $com+1;
                    }
                }
            }
            ?>
            @foreach($courses as $course)
            <div class="panel-body">
                <h1>{{ $course->title }}</h1>
                <div class="post-info-container">
                    <ul class="list-inline list-unstlyed post-info">
                        <li><i class="fa fa-user"></i> by {{ $course->author }}</li>
                        <li><i class="fa fa-clock-o"></i> {{ $course->created_at->toDateString() }}</li>
                        <li><i class="fa fa-comment-o"></i>
                            <a href="#free_courses_comments">{{ $count_comments }}
                                @if(substr($count_comments, -1) == 1 && strlen($count_comments) == 1) Комментарий
                                @elseif(substr($count_comments, -1) == (2||3||4) && strlen($count_comments) == 1) Коментария
                                @elseif(substr($count_comments, -1) == (6||7||8||9||0) && strlen($count_comments) == 1) Коментариев
                                @elseif(strlen($count_comments) > 1) Коментариев
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
                <div class='embed-container'><iframe src='{{ $course->link_courses }}' frameborder='0' allowfullscreen></iframe></div>
                <p class="m15">{!! $course->description !!}</p>
            </div>
            @endforeach
        </div>
        <div class="well share-story">
            <div class="text-center">
                <a href="#" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="btn btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="btn btn-social btn-reddit"><i class="fa fa-reddit"></i></a>
                <a href="#" class="btn btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="btn btn-social btn-googleplus"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <h3 class="mt0 mb20">Комментарии к этому курсу</h3>
                <ul id="free_courses_comments" class="media-list comments">
                    @if($com == 0)
                        <li class="media">
                            <div class="media-body">
                                <p>Пока комментариев нет. Будь первым!</p>
                            </div>
                        </li>
                    @else
                        @foreach($courses as $course)
                            @foreach($free_courses_comment as $comment)
                                @foreach($users as $user)
                                    @if($comment->free_courses_id == $course->id)
                                        @if($comment->user_id == $user->id)
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="{{ asset('base/img/avatar/') }}/{{ $user->avatar }}" alt="{{ $user->name }}" width="30px" height="40px">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading"><a href="#" class="person">{{ $user->name }}</a></h5>
                                                <p>{{ $comment->comment }}</p>
                                                <p><small class="time">5 days ago <a href="#" class="reply">Reply</a></small></p>
                                            </div>
                                        </li>
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    @endif
                    {{ $free_courses_comment->links() }}
                </ul>
                <hr class="outsider">
                <h3 class="mt0 mb20">Комментировать курс</h3>
                <div class="form-group mb0">
                    <form action="{{ route('free-courses-comment') }}" method="post" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="url" value="
                        <?php
                        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                        $url = explode('?', $url);
                        $result = $url[0];
                        echo $result;
                        ?>">
                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                        @foreach($courses as $course)
                            <input type="hidden" name="course" id="course" value="{{ $course->id }}">
                        @endforeach
                        <div class="form-group">
                            <label for="comment" class="col-sm-3 control-label">Ваш комментарий</label>
                            <div class="col-sm-9">
                                <textarea name="comment" id="comment" cols="30" rows="5" class="form-control fullscreen"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb0">
                            <div class="col-sm-12">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Добавить комментарий</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading">
                <h2>Темы этого же курса</h2>
            </div>
            <div class="panel-body tag-cloud">
            @foreach($courses as $course)
                @foreach($all_free_courses as $all_free)
                    @if($course->category_id == $all_free->category_id)
                        @foreach($courses_name as $name)
                            @if($name->id == $course->category_id)
                                <a href="{{ route($name->free_link_name.'-article',$all_free->id)}}" class="list-group-item">{{ $all_free->title }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endforeach
            </div>
        </div>
        {{--<div class="panel">
            <div class="panel-heading">
                <h2>Tag Cloud</h2>
            </div>
            <div class="panel-body tag-cloud">
                <a href=""><span class="label label-alizarin">Cars</span></a>
                <a href=""><span class="label label-alizarin">Gadgets</span></a>
                <a href=""><span class="label label-alizarin">Music</span></a>
                <a href=""><span class="label label-alizarin">Books</span></a>
                <a href=""><span class="label label-alizarin">Movies</span></a>
                <a href=""><span class="label label-alizarin">Clothes</span></a>
                <a href=""><span class="label label-alizarin">Laptops</span></a>
                <a href=""><span class="label label-alizarin">Drinks</span></a>
                <a href=""><span class="label label-alizarin">Shoes</span></a>
                <a href=""><span class="label label-alizarin">Documentaries</span></a>
                <a href=""><span class="label label-alizarin">Restaruants</span></a>
                <a href=""><span class="label label-alizarin">Cities</span></a>
            </div>
        </div>--}}
        {{--<div class="panel panel-default">
            <div class="panel-heading">
                <h2>Related Posts</h2>
            </div>
            <div class="panel-body panel-no-padding">
                <div class="blog-post-list">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="assets/demo/stockphoto/blog_06.jpg">
                        </a>
                        <div class="media-body">
                            <a href="" class="post-title">Let Me Validate That For You (LMVTFY)</a>
                            <p>If you've been following the Bootstrap issue tracker lately, you might have noticed the launch of our new bot, @twbs-lmvtfy, on June 15th.</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="assets/demo/stockphoto/blog_09.jpg">
                        </a>
                        <div class="media-body">
                            <a href="" class="post-title">Bootstrap now available via npm</a>
                            <p>It's taken us awhile, but we've finally published Bootstrap on npm. We've taken over the existing bootstrap package and just published the latest release, v3.1.1.</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="assets/demo/stockphoto/blog_08.jpg">
                        </a>
                        <div class="media-body">
                            <a href="" class="post-title">Ratchet 2.0.1 released</a>
                            <p>Today we're pumped to release Ratchet 2.0.1. This release focuses on CSS bug fixes and further improvements to our docs and build tools.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        {{--<div class="tab-container tab-default">
            <ul class="nav nav-tabs"><li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i> </a><ul class="dropdown-menu"></ul></li>
                <li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
                <li class=""><a href="#tab2" data-toggle="tab">Tab 2</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p> </div>
                <div class="tab-pane" id="tab2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores porro eveniet debitis quas sed harum nobis libero voluptatibus dolorum odio at veniam aut id corrupti hic esse quisquam fugiat. Asperiores in eveniet sapiente error fuga tenetur ex ea dignissimos voluptas ab molestiae eos totam quo dolorem maxime illo neque quia itaque.</p></div>
            </div>
        </div>--}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Есть предложения?</h2>
            </div>
            <div class="panel-body">
                <p class="mb20">Напишите свой Email я с вами свяжусь</p>
                <div class="input-group">
                    <input type="email" id="input_offers" name="input_offers" class="form-control" placeholder="Email">
                    <span class="input-group-btn">
                        <a class="btn btn-default" id="offers">Отправить</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

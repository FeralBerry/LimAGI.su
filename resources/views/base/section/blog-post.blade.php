<div class="section">
    <div class="container header-big-text">
        <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
                @foreach($blog as $b)
                    <h2>{{ $b->title }}</h2>
                    <p>@if(isset($b->updated_at)){{ date_format($b->updated_at, 'd.M.Y') }} @else {{ date_format($b->created_at, 'd.M.Y') }} @endif - {{ $b->author }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="section padding-bottom">
    <div class="container">
        <div class="nine columns">
            <div class="img-wrap">
                @foreach($blog as $b)
                    <img src="{{ asset('images/blog/title_img/') }}/{{ $b->title_img }}" alt="{{ $b->title }}">
                @endforeach
            </div>
            <div class="post-block">
                @foreach($blog as $b)
                    {!! $b->desc !!}
                @endforeach
                <div class="link-tag"><a href="{{ route('blog') }}">Вернуться ко всем статьям</a></div>
                <div class="tags-block grey-background">
                    @foreach($blog_cat as $cat)
                        @if($cat->id == $b->blog_cat_id)
                            <a href="{{ route('blog') }}">{{ $cat->cat_name }}</a>
                        @endif
                    @endforeach
                    @foreach($blog as $b)
                        <a href="{{ route('blog-alias',$b->author) }}" class="autor-link">{!! $b->author !!}</a>
                    @endforeach
                </div>
                <div class="clear"></div>
                @if(!Auth::user())
                    <form  action="{{ route('blog-post', $id) }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $id }}" id="id">
                        <label for="name">
                            <span class="error" id="err-name">Пожалуйства введите ваше имя</span>
                        </label>
                        <input name="name" id="name" type="text"   placeholder="Ваше имя: *" minlength="3" required>
                        <label for="email">
                            <span class="error" id="err-email">пожалуйста введите ваш e-mail</span>
                            <span class="error" id="err-emailvld">e-mail имеет не верный формат</span>
                        </label>
                        <input name="email" id="email" type="text"  placeholder="E-Mail: *" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" required >
                        <label for="message"></label>
                        <textarea name="message" id="message" placeholder="Комментарий" minlength="20"></textarea>
                        <div id="button-con"><button class="send_message button button--moema button--text-thick button--text-upper button--size-s" id="send_message" data-lang="en">Отправить</button></div>
                        <div class="clear"></div>
                        <div class="error text-align-center" id="err-form">Проверьте правильность заполнения формы!</div>
                        <div class="error text-align-center" id="err-timedout">Время ожидания истекло!</div>
                        <div class="error" id="err-state"></div>
                    </form>
                @else
                    <form name="ajax-form" id="ajax-form" action="{{ route('blog-post', $id) }}" method="post">
                        @csrf
                        <input type="hidden" value="{{ $id }}" id="id">
                        <input name="name" id="name" type="hidden" value="{{ Auth::user()->name }}"  placeholder="Ваше имя: *" minlength="3" required>
                        <input name="email" id="email" type="hidden"  value="{{ Auth::user()->email }}" placeholder="E-Mail: *" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" required >
                        <label for="message"></label>
                        <textarea name="message" id="message" placeholder="Комментарий" minlength="20"></textarea>
                        <div id="button-con"><button class="send_message button button--moema button--text-thick button--text-upper button--size-s" id="send_message" data-lang="en">Отправить</button></div>
                        <div class="clear"></div>
                        <div class="error text-align-center" id="err-form">Проверьте правильность заполнения формы!</div>
                        <div class="error text-align-center" id="err-timedout">Время ожидания истекло!</div>
                        <div class="error" id="err-state"></div>
                    </form>
                @endif
                @if(isset($blog_comments))
                    @foreach($blog_comments as $comment)
                        <div class="col-md-12">
                            <div class="row">
                                <div style="margin-top: 10px;margin-bottom: 10px" class="tags-block grey-background">
                                    <a href="#">{{ $comment->name }}</a>
                                    <a href="mailto:{{ $comment->email }}"class="autor-link">{{ $comment->email }}</a>
                                </div>
                                <p>
                                    {{ $comment->comments }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="three columns">
            <div class="post-sidebar">
                {{--<input name="search" type="text"   placeholder="Для поиска нажмите Enter"/>--}}
                <div class="separator-sidebar"></div>
                <h6>Последние посты</h6>
                <div class="link-recents">
                    @foreach($recents as $recent)
                        <a href="{{ route('blog-post', $recent->id) }}">{{ $recent->title }}</a>
                    @endforeach
                </div>
                <div class="separator-sidebar"></div>
                <h6>Tags</h6>
                <div class="link-tag">
                    @foreach($tags as $tag => $k)
                        @foreach($blog_tags as $t)
                            @if($k == $t->id)
                            <a href="{{ route('blog-alias', $t->id) }}">{{ $t->name }}</a>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>


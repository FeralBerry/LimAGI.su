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
                <img src="{{ asset('images/blog/2.jpg') }}" alt="">
            </div>
            <div class="post-block">
                @foreach($blog as $b)
                    {!! $b->desc !!}
                @endforeach
                <div class="tags-block grey-background">
                    @foreach($tag_page as $tag => $k)
                        @foreach($blog_tags as $t)
                            @if($k == $t->id)
                                <a href="#">{{ $t->name }}</a>
                            @endif
                        @endforeach
                    @endforeach
                    @foreach($blog as $b)
                            <a href="#" class="autor-link">{!! $b->author !!}</a>
                    @endforeach
                </div>
                <div class="clear"></div>
                <form name="ajax-form" id="ajax-form" action="" method="post">
                    <label for="name">
                        <span class="error" id="err-name">Пожалуйства введите ваше имя</span>
                    </label>
                    <input name="name" id="name" type="text"   placeholder="Ваше имя: *"/>
                    <label for="email">
                        <span class="error" id="err-email">пожалуйста введите ваш e-mail</span>
                        <span class="error" id="err-emailvld">e-mail имеет не верный формат</span>
                    </label>
                    <input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
                    <label for="message"></label>
                    <textarea name="message" id="message" placeholder="Комментарий"></textarea>
                    <div id="button-con"><button class="send_message button button--moema button--text-thick button--text-upper button--size-s" id="send" data-lang="en">Отправить</button></div>
                    <div class="clear"></div>
                    <div class="error text-align-center" id="err-form">Проверьте правильность заполнения формы!</div>
                    <div class="error text-align-center" id="err-timedout">Время ожидания истекло!</div>
                    <div class="error" id="err-state"></div>
                </form>

                <div class="clear"></div>
                <div id="ajaxsuccess">Успешно отправлено!!</div>
                <div class="clear"></div>

            </div>
        </div>
        <div class="three columns">
            <div class="post-sidebar">
                <input name="search" type="text"   placeholder="Для поиска нажмите Enter"/>
                <div class="separator-sidebar"></div>
                <h6>Последние посты</h6>
                <div class="link-recents">
                    @foreach($recents as $recent)
                    <a href="{{ route('blog-post', $recent->id) }}">{{ $recent->title }}</a>
                    @endforeach
                </div>
                <div class="separator-sidebar"></div>
                <h6>Latest Projects</h6>
                <div class="lat-pro">
                    <a href="#"><div class="lat-pro-img"><img  src="{{ asset('images/portfolio/a1.jpg') }}" alt="" /></div></a>
                    <a href="#"><div class="lat-pro-img"><img  src="{{ asset('images/portfolio/a2.jpg') }}" alt="" /></div></a>
                    <a href="#"><div class="lat-pro-img"><img  src="{{ asset('images/portfolio/b1.jpg') }}" alt="" /></div></a>
                    <a href="#"><div class="lat-pro-img"><img  src="{{ asset('images/portfolio/b2.jpg') }}" alt="" /></div></a>
                </div>
                <div class="separator-sidebar"></div>
                <h6>Tags</h6>
                <div class="link-tag">
                    @foreach($tags as $tag => $k)
                        @foreach($blog_tags as $t)
                            @if($k == $t->id)
                            <a href="#">{{ $t->name }}</a>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>


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
<?php
$user_like = '';
if(Auth::user() == true){
    $user_like = explode(',', Auth::user()->blog_likes);
}
?>
<div class="post-like">
    @if(Auth::user() == true)
        <a class="blog-likes"  title="Likes" data-id="{{ $b->id }}"><span class="like-num @if($user_like !== '')@foreach($user_like as $item => $value)@if($b->id == $value){{ 'likes' }}@endif @endforeach @endif" id="{{ $b->id }}"><i class="fa fa-heart-o" aria-hidden="true"></i>@if($b->likes == '') {{ 0 }} @else {{ $b->likes}} @endif </span> Like</a>
    @else
        <a onclick="alert('Для голосования нужно авторизоваться')"  title="Likes" data-id="{{ $b->id }}"><span class="like-num" id="{{ $b->id }}"><i class="fa fa-heart-o" aria-hidden="true"></i>@if($b->likes == '') {{ 0 }} @else {{ $b->likes}} @endif </span> Like</a>
    @endif
</div>
{{--<div class="post-share">
    <a href="#" title="Share"><i class="fa fa-share-alt" aria-hidden="true"></i></a><span><a href="#" title="Share">Share Post</a></span>
</div>--}}

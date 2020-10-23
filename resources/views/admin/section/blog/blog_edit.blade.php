<div data-widget-group="group1">
    <div class="panel panel-default" data-widget='{"draggable": "false"}'>
        <div class="panel-heading">
            <h2>{{ $second_breadcrumb }}</h2>
            <div class="panel-ctrls"
                 data-actions-container=""
                 data-action-collapse='{"target": ".panel-body"}'
                 data-action-expand=''
                 data-action-colorpicker=''
            >
            </div>
        </div>
        <div class="panel-editbox" data-widget-controls=""></div>
        <div class="panel-body">
            @foreach($blog as $item)
                <form action="{{ route('admin-blog-edit', $item->id ) }}" class="form-horizontal row-border" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Номер статьи</label>
                        <div class="col-sm-8">
                            <input type="text" name="id" class="form-control" placeholder="id" value="{{ $item->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Название статьи</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" placeholder="Название статьи" value="{{ $item->title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Категория</label>
                        <div class="col-sm-8">
                            @foreach($blog_cat as $cat)
                            <label class="radio icheck">
                                <input type="radio" name="optionsRadios" id="optionsRadios{{ $cat->id }}" value="{{ $cat->id }}" @if($cat->id == $item->blog_cat_id)checked @endif>
                                {{ $cat->cat_name }}
                            </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Теги</label>
                        <div class="col-sm-8">
                            @foreach($blog_tags as $bt)
                                <?php $tags = explode(',', $item->tags); $count_tag = count($tags)?>
                                <label class="checkbox-inline icheck">
                                    <input type="checkbox" id="inlinecheckbox{{ $bt->id }}" value="{{ $bt->name }}"
                                    name="tags{{ $bt->id }}"
                                    @for($i=0;$i<$count_tag;$i++)
                                        @if($tags[$i] == $bt->id)
                                            checked
                                        @endif
                                    @endfor>
                                    {{ $bt->name }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    {{--<div class="form-group">
                        <label class="col-sm-2 control-label">Multiple Select with Search and Group select</label>
                        <div class="col-sm-8">
                            <select multiple="multiple" id="multi-select">
                                <option>Lorem</option>
                                <option>Unde</option>
                                <option>Saepe</option>
                                <option>Harum</option>
                                <option>Enim</option>
                                <option>Aliquid</option>
                                <option>Recusandae</option>
                                <option>Esse</option>
                                <option>Laborum</option>
                                <option>Quo</option>
                                <option>Quo</option>
                                <option>Maiores</option>
                                <option>Architecto</option>
                                <option>Sapiente</option>
                                <option>Placeat</option>
                                <option>Officiis</option>
                                <option>Obcaecati</option>
                                <option>Aliquid</option>
                                <option>Explicabo</option>
                                <option>Aliquam</option>
                                <option>Vero</option>
                                <option>Voluptates</option>
                                <option>Similique</option>
                                <option>Minima</option>
                                <option>Ipsum</option>
                                <option>Nemo</option>
                                <option>Omnis</option>
                                <option>Fuga</option>
                                <option>Iste</option>
                                <option>Possimus</option>
                            </select>
                        </div>
                    </div>--}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Автор статьи</label>
                        <div class="col-sm-8">
                            <input type="text" name="author" class="form-control" placeholder="Автор статьи" value="{{ $item->author }}">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-magenta">
                            <div class="panel-heading">
                                <h2>Краткое описание</h2>
                            </div>
                            <div class="panel-body collapse in">
                                <div class="col-12">
                                    <textarea name="brief" id="" cols="80" rows="20" class="ckeditor">{{ $item->brief }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-magenta">
                            <div class="panel-heading">
                                <h2>Текст статьи</h2>
                            </div>
                            <div class="panel-body collapse in">
                                <div class="col-12">
                                    <textarea name="ckeditor" id="" cols="80" rows="20" class="ckeditor">{{ $item->desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Фото заголовка статьи</label>
                        <div class="col-sm-8">
                            <input type="file" name="img" accept="image/*" onchange="loadFile(event)" >
                            <img class="col-sm-5" id="output"/>
                            @if($item->img !== '')<img src="{{ asset('images/blog/img/') }}/{{ $item->img }}" class="col-sm-5">
                            <a href="{{ route('admin-blog-image-delete', $item->id) }}"><i class="fa fa-close" style="color: red; font-size: 50px"></i></a><br>@endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Титульная картинка</label>
                        <div class="col-sm-8">
                            <input type="file" name="title_img" accept="image/*" onchange="loadTitleImg(event)" >
                            <img class="col-sm-5" id="title_img"/>
                            @if($item->title_img !== '')<img src="{{ asset('images/blog/title_img/') }}/{{ $item->title_img }}" class="col-sm-5">
                            <a href="{{ route('admin-blog-title-image-delete', $item->id) }}"><i class="fa fa-close" style="color: red; font-size: 50px"></i></a><br>@endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Фото для видео</label>
                        <div class="col-sm-8">
                            <input type="file" name="videoImg" accept="image/*" onchange="loadFileVideoImg(event)">
                            <img class="col-sm-5" id="videoImg"/>
                            @if($item->video_img !== '')<img src="{{ asset('images/blog/video-img/') }}/{{ $item->video_img }}" class="col-sm-5">
                            <a href="{{ route('admin-blog-videoImg-delete', $item->id) }}"><i class="fa fa-close" style="color: red; font-size: 50px"></i></a><br>@endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Видео для блога</label>
                        <div class="col-sm-8">
                            <input type="file" name="video" accept="video/*" onchange="loadVideoFile(event)">
                            @if($item->video !== '')<iframe class="col-sm-11" src="{{ asset('images/blog/video/') }}/{{ $item->video }}" height="400px" width="300px" id="videoFile"></iframe>
                            <a href="{{ route('admin-blog-video-delete', $item->id) }}"><i class="fa fa-close" style="color: red; font-size: 50px"></i></a><br>@endif
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn-success btn">Изменить</button>
                                <a href="{{ route('admin-blog') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                                <a href="{{ route('admin-blog-delete', $item->id) }}"><button class="btn-danger btn">Удалить статью</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>

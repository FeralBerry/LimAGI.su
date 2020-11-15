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
            @foreach($courses as $item)
                <form action="{{ route('admin-pay-courses-edit', $item->id ) }}" class="form-horizontal row-border" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Название курса</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" placeholder="Название статьи" value="{{ $item->title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Категория</label>
                        <div class="col-sm-8">
                            @foreach($courses_name as $cn)
                                <label class="radio icheck">
                                    <input type="radio" name="optionsRadios" id="optionsRadios{{ $cn->id }}" value="{{ $cn->id }}" @if($cn->id == $item->category_id)checked @endif>
                                    {{ $cn->name }}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Группа курса</label>
                        <div class="col-sm-8">
                            <input type="text" name="access_id" class="form-control" placeholder="Группа курса" value="{{ $item->access_id }}">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="panel panel-magenta">
                            <div class="panel-heading">
                                <h2>Текст для курса</h2>
                            </div>
                            <div class="panel-body collapse in">
                                <div class="col-12">
                                    <textarea name="description" id="" cols="80" rows="20" class="ckeditor">{{ $item->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Видео для курса</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="link_courses" onchange="loadVideoFile(event)">
                            @if($item->link_courses !== '')<iframe class="col-sm-11" src="{{ $item->link_courses }}" style="min-height:400px" id="videoFile" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <a href="{{ route('admin-pay-courses-video-delete', $item->id) }}"><i class="fa fa-close" style="color: red; font-size: 50px"></i></a><br>@endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Ссылка для скачивания материалов</label>
                        <div class="col-sm-8">
                            <input type="text" name="link_materials" class="form-control" placeholder="Ссылка для скачивания материалов" value="{{ $item->link_materials }}">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn-success btn">Изменить</button>
                                <a href="{{ route('admin-pay-courses') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                                <a href="{{ route('admin-pay-courses-delete', $item->id) }}"><button class="btn-danger btn">Удалить</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>

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
            <form action="{{ route('admin-free-courses-add') }}" class="form-horizontal row-border" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 control-label">Название курса</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" placeholder="Название статьи" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Категория</label>
                    <div class="col-sm-8">
                        @foreach($courses_name as $cn)
                            <label class="radio icheck">
                                <input type="radio" name="optionsRadios" id="optionsRadios{{ $cn->id }}" value="{{ $cn->id }}">
                                {{ $cn->name }}
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="panel panel-magenta">
                        <div class="panel-heading">
                            <h2>Текст для курса</h2>
                        </div>
                        <div class="panel-body collapse in">
                            <div class="col-12">
                                <textarea name="description" id="" cols="80" rows="20" class="ckeditor"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ссылка на видео курса</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Ссылка на видео курса" name="link_courses" onchange="loadVideoFile(event)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Ссылка для скачивания материалов</label>
                    <div class="col-sm-8">
                        <input type="text" name="materials" class="form-control" placeholder="Ссылка для скачивания материалов" value="">
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" class="btn-success btn">Добавить</button>
                            <a href="{{ route('admin-free-courses') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

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
            @foreach($portfolio as $item)
            <form action="{{ route('admin-portfolio-edit', $item->id) }}" class="form-horizontal row-border" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" class="form-control" placeholder="id" value="{{ $item->id }}">
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Название</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" placeholder="Название" value="{{ $item->title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sub_title" class="col-sm-2 control-label">Описание</label>
                    <div class="col-sm-8">
                        <input type="text" name="sub_title" class="form-control" placeholder="Описание" value="{{ $item->sub_title }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Фото заголовка статьи</label>
                    <div class="col-sm-8">
                        <input type="file" name="img" accept="image/*" onchange="loadFile(event)" >
                        <img class="col-sm-5" id="output"/>
                        @if($item->img !== '')<img src="{{ asset('images/portfolio/') }}/{{ $item->img }}" class="col-sm-5">
                        <a href="{{ route('admin-portfolio-image-delete', $item->id) }}"><i class="fa fa-close" style="color: red; font-size: 50px"></i></a><br>@endif
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" class="btn-success btn">Добавить</button>
                            <a href="{{ route('admin-portfolio') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                            <a href="{{ route('admin-portfolio-delete', $item->id) }}"><button class="btn-danger btn">Удалить портфолио</button></a>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>

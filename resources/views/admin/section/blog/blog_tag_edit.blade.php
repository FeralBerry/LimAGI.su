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
            @foreach($blogTags as $item)
                <form action="{{ route('admin-blogTags-edit', $item->id ) }}" class="form-horizontal row-border" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Название тега</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" placeholder="Название тега" value="{{ $item->name }}">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn-success btn">Изменить</button>
                                <a href="{{ route('admin-blogTags') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                                <a href="{{ route('admin-blogTags-delete', $item->id) }}"><button class="btn-danger btn">Удалить тег</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>

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
            <form action="{{ route('admin-blogCat-add') }}" class="form-horizontal row-border" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cat_name" class="col-sm-2 control-label">Название категории</label>
                    <div class="col-sm-8">
                        <input type="text" name="cat_name" class="form-control" placeholder="Название категории" value="">
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" class="btn-success btn">Добавить</button>
                            <a href="{{ route('admin-blogCat') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

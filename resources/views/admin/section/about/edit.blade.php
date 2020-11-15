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
            @foreach($about as $item)
                <form action="{{ route('admin-about-edit', $item->id ) }}" class="form-horizontal row-border" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Название блока</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" placeholder="Название блока" value="{{ $item->title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="desc" class="col-sm-2 control-label">Краткое описание</label>
                        <div class="col-sm-8">
                            <input type="text" name="desc" class="form-control" placeholder="Краткое описание" value="{{ $item->desc }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link" class="col-sm-2 control-label">id статей</label>
                        <div class="col-sm-8">
                            <input type="text" name="link" class="form-control" placeholder="Краткое описание" value="{{ $item->link }}">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn-success btn">Изменить</button>
                                <a href="{{ route('admin-about') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>

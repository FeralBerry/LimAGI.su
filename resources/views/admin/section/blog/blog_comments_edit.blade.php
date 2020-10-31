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
            @foreach($blog_comment as $item)
                <form action="{{ route('admin-blog-comments-edit', $item->id ) }}" class="form-horizontal row-border" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Имя</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" placeholder="Имя" value="{{ $item->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cat_name" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $item->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Коментарий</label>
                        <div class="col-sm-8">
                            <textarea type="message" name="message" class="form-control" placeholder="Коментарий">{{ $item->comments }}</textarea>
                        </div>
                    </div>
                    <input type="hidden" name="post_id" value="{{ $item->blog_post_id }}">
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button type="submit" class="btn-success btn">Изменить</button>
                                <a href="{{ route('admin-blogCat') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                                <a href="{{ route('admin-blogCat-delete', $item->id) }}"><button class="btn-danger btn">Удалить коментарий</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>

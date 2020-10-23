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
            @foreach($user as $item)
            <form action="{{ route('admin-users-edit', $item->id ) }}" class="form-horizontal row-border" method="post">
                @csrf
                <input type="hidden" name="id" class="form-control" placeholder="id" value="{{ $item->id }}">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Имя/Ник</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" placeholder="Имя/Ник" value="{{ $item->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $item->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Роль</label>
                    <div class="col-sm-8">
                        <label class="radio-inline icheck">
                            <input type="radio" id="inlineradio1" @if($item->role == 'admin') checked="checked" @endif value="admin" name="optionsRadiosInline" >Админ
                        </label>
                        <label class="radio-inline icheck">
                            <input type="radio" id="inlineradio2" @if($item->role == 'user') checked="checked" @endif value="user" name="optionsRadiosInline" >Пользователь
                        </label>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" class="btn-success btn">Изменить</button>
                            <a href="{{ route('admin-users') }}"><button class="btn-default btn">Отменить редактирование</button></a>
                            <a href="{{ route('admin-user-delete', $item->id) }}"><button class="btn-danger btn">Удалить пользователя</button></a>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>

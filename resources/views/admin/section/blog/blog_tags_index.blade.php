<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-sky">
            <div class="panel-heading">
                <h2>Таблица статей блога</h2>
            </div>
            <div class="panel-body">
                <p></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="padding-right:100px">id</th>
                            <th>Название</th>
                            <th>Создан</th>
                            <th>Обновлен</th>
                            <th>Кнопки</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blog_tags as $tag)
                            <tr>
                                <td style="text-align: left">{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->created_at }}</td>
                                <td>{{ $tag->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin-blogTags-edit', $tag->id) }}"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('admin-blogTags-delete', $tag->id) }}"><i class="fa fa-close" style="margin-left: 10px;color: red"></i></a>
                                    <a href="{{ route('admin-blogTags-add') }}"><i class="fa fa-database" style="margin-left: 10px;color: green"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if($blog_tags->isEmpty())<a href="{{ route('admin-portfolio-add') }}"><i class="fa fa-database" style="font-size:60px; color: green"></i></a>@endif
                    {{ $blog_tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

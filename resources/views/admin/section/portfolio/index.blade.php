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
                            <th>Заголовок</th>
                            <th>Краткое описание</th>
                            <th>Изображение</th>
                            <th>Создано</th>
                            <th>Обновлено</th>
                            <th>Кнопки</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolio as $p)
                            <tr>
                                <td style="text-align: left">{{ $p->id }}</td>
                                <td>{{ $p->title }}</td>
                                <td>{{ $p->sub_title }}</td>
                                <td><img style="max-width: 400px; max-height: 300px;" src="{{ asset('base/img/portfolio/') }}/{{ $p->img }}"></td>
                                <td>{{ $p->created_at }}</td>
                                <td>{{ $p->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin-portfolio-edit', $p->id) }}"><i class="fa fa-pencil"></i></a><br>
                                    <a href="{{ route('admin-portfolio-delete', $p->id) }}"><i class="fa fa-close" style="color: red"></i></a><br>
                                    <a href="{{ route('admin-portfolio-add') }}"><i class="fa fa-database" style="color: green"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if($portfolio->isEmpty())<a href="{{ route('admin-portfolio-add') }}"><i class="fa fa-database" style="font-size:60px; color: green"></i></a>@endif
                    {{ $portfolio->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

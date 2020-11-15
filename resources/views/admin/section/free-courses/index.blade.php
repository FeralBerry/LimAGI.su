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
                            <th>Описание</th>
                            <th>Видео к курсу</th>
                            <th>Материалы к курсу</th>
                            <th>Категория</th>
                            <th>Кнопки</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($courses))
                            @foreach($courses as $course)
                                <?php $desc = Str::limit($course->description, 150) ?>
                                <tr>
                                    <td align="left">{{ $course->id }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td>{!! $desc !!}</td>
                                    <td>
                                        <iframe class="col-sm-11" src="{{ $course->link_courses }}" height="400px" width="300px" id="videoFile"></iframe>
                                    </td>
                                    <td>
                                        <a href="{{ $course->link_materials }}">{{ $course->title }}</a>
                                    </td>
                                    <td>
                                        @foreach($courses_name as $cn)
                                            @if($cn->id == $course->category_id)
                                                {{ $cn->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('admin-free-courses-edit', $course->id) }}"><i class="fa fa-pencil"></i></a><br>
                                        <a href="{{ route('admin-free-courses-delete', $course->id) }}"><i class="fa fa-close" style="color: red"></i></a><br>
                                        <a href="{{ route('admin-free-courses-add') }}"><i class="fa fa-database" style="color: green"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    @if($courses->isEmpty())<a href="{{ 'admin-ree-courses-add' }}"><i class="fa fa-database" style="font-size:60px; color: green"></i></a>@endif
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

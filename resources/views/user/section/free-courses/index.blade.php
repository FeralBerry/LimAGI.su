<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-sky">
            <div class="panel-heading">
                <h2>Курсы по HTML</h2>
            </div>
            <div class="panel-body">
                <p></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="padding-right:0px; width: 30px;">id</th>
                            <th>Название курса</th>
                            <th>Краткое описание</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($courses))
                            @foreach($courses as $course)
                                <?php $desc = Str::limit($course->description, 150) ?>
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td><a href="
                                        @foreach($courses_name as $name)
                                            @if($name->id == $course->category_id)
                                        {{ route($name->free_link_name.'-article', $course->id) }}
                                            @endif
                                        @endforeach
                                            ">{{ $course->title }}</a></td>
                                    <td>{!! $desc !!}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    @if($courses->isEmpty())На данный момент курсы не готовы@endif
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

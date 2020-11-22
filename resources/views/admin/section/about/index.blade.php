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
                            <th>Связаные страницы блога</th>
                            <th>Иконка</th>
                            <th>Кнопки</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($about as $a)
                            <tr>
                                <?php $blog_title = explode(',', $a->link); $count_link = count($blog_title)?>
                                <td align="left">{{ $a->id }}</td>
                                <td>{{ $a->title }}</td>
                                <td>{!! $a->desc !!}</td>
                                <td>
                                    @foreach($blog as $b)
                                        @for($i=0;$i<$count_link;$i++)
                                            @if($blog_title[$i] == $b->id)
                                                {{ $i+1 }}. {{ $b->title }}<br>
                                            @endif
                                        @endfor
                                    @endforeach
                                </td>
                                <td>
                                    @if($a->icon == '')
                                        Нет
                                    @else
                                        <i class="fa {{ $a->icon }}" aria-hidden="true"></i>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin-about-edit', $a->id) }}"><i class="fa fa-pencil"></i></a><br>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

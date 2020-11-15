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
                            <th>Описание</th>
                            <th>Теги</th>
                            <th>Категории</th>
                            <th>Автор</th>
                            <th>Заглавная картинка</th>
                            <th>Заглавное видео</th>
                            <th>Кнопки</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blog as $b)
                            <?php $desc = Str::limit($b->desc, 250)?>
                            <tr>
                                <td align="left">{{ $b->id }}</td>
                                <td>{{ $b->title }}</td>
                                <td>{!! $b->brief !!}</td>
                                <td>{!! $desc !!}</td>
                                <td>
                                    @foreach($blog_tags as $tag)
                                        <?php $tags = explode(',', $b->tags); $count_tag = count($tags)?>
                                        @for($i=0;$i<$count_tag;$i++)
                                            @if($tags[$i] == $tag->id)
                                                {{ $tag->name }}<br>
                                            @endif
                                        @endfor
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($blog_cat as $cat)
                                        <?php $category = explode(',', $b->blog_cat_id); $count_cat = count($category)?>
                                        @for($i=0;$i<$count_cat;$i++)
                                            @if($category[$i] == $cat->id)
                                                {{ $cat->cat_name }}
                                            @endif
                                        @endfor
                                    @endforeach
                                </td>
                                <td>{{ $b->author }}</td>
                                <td>
                                    @if($b->img == '')
                                        Нет
                                    @else
                                        Есть
                                    @endif
                                </td>
                                <td>
                                    @if($b->video == '')
                                        Нет
                                    @else
                                        Есть
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin-blog-edit', $b->id) }}"><i class="fa fa-pencil"></i></a><br>
                                    <a href="{{ route('admin-blog-delete', $b->id) }}"><i class="fa fa-close" style="color: red"></i></a><br>
                                    <a href="{{ route('admin-blog-add') }}"><i class="fa fa-database" style="color: green"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if($blog->isEmpty())<a href="{{ route('admin-blog-add') }}"><i class="fa fa-database" style="font-size:60px; color: green"></i></a>@endif
                    {{ $blog->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

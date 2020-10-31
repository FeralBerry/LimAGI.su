<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-sky">
            <div class="panel-heading">
                <h2>Таблица категорий блога</h2>
            </div>
            <div class="panel-body">
                <p></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="padding-right:100px">id</th>
                            <th>Имя комментатора</th>
                            <th>Email</th>
                            <th>Комментарий</th>
                            <th>Статья к которой коментарий</th>
                            <th>Дата коментария</th>
                            <th>Кнопки</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blog_comments as $comment)
                            <tr>
                                <?php $c = Str::limit($comment->comments, 100)?>
                                <td style="text-align: left">{{ $comment->id }}</td>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $c }}</td>
                                @foreach($blog as $b)
                                    @if($b->id == $comment->blog_post_id)
                                        <td>{{ $b->title }}</td>
                                    @endif
                                @endforeach
                                <td>{{ $comment->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin-blog-comments-edit', $comment->id) }}"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('admin-blog-comments-delete', $comment->id) }}"><i class="fa fa-close" style="margin-left: 10px;color: red"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $blog_comments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

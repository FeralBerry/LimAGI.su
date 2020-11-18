@foreach ($chat_design as $c)
<li>
    <div class="avatar">
        <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
    </div>
    <div class='content'>
        <span class='msg'><a href='#' class='person'>{{ $c->name }}</a> </span>
        <p class="chat">{{ $c->message }}</p>
        <?php
        $time1 = new DateTime();
        $time2 = new DateTime($c->created_at);
        $diff = $time1->diff($time2);
        ?>
        <span class='time'>
            {{ $diff->format('%d дней %H:%i:%s назад') }}
        </span>
    </div>
</li>
@endforeach


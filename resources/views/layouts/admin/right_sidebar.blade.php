<div class="infobar-wrapper scroll-pane">
    <div class="infobar scroll-content">
        <div id="widgetarea">
            <div class="widget">
                <div class="widget-heading">
                    <a href="javascript:;" data-toggle="collapse" data-target="#recentactivity"><h4>Чат пользователей</h4></a>
                </div>
                <div id="recentactivity" class="collapse in">
                    <div class="widget-body">
                        <ul class="recent-activities" id="chat">
                            @foreach($chat as $c)
                                <li>
                                    <div class="avatar">
                                        <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                    </div>
                                    <div class="content">
                                        <span class="msg"><a href="#" class="person">{{ $c->name }}</a> </span>
                                        <p class="chat">{{ $c->message }}</p>
                                        <?php
                                        $time1 = new DateTime();
                                        $time2 = new DateTime($c->created_at);

                                        $diff = $time1->diff($time2);
                                        ?>
                                        <span class="time">{{ $diff->format('%d дней %H:%i:%s назад') }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <form>
                            @csrf
                            <input type="hidden" name="name" id="name" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="chat_room" id="chat_room" value="1">
                            <input type="text" name="message" id="message" placeholder="Текст сообщения">
                            <a id="chat_send">Написать</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

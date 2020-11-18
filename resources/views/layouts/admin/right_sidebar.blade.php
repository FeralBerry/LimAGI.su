<div class="infobar-wrapper scroll-pane">
    <div class="infobar scroll-content">
        <div id="widgetarea">
            <?php $chat_id = explode(',',Auth::user()->chat_id) ?>
                @if(isset($chat_id))
                @foreach($chat_id as $cid)
                    @if($cid == 1)
                        <div class="widget">
                            <div class="widget-heading">
                                <a href="javascript:;" data-toggle="collapse" data-target="#admin"><h4>Чат Администраторов</h4></a>
                            </div>
                            <div id="admin" class="collapse in">
                                <div class="widget-body">
                                    <ul class="recent-activities" id="chat_admin">
                                        @foreach($chat_admin as $admin)
                                            <li>
                                                <div class="avatar">
                                                    <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                                </div>
                                                <div class="content">
                                                    <span class="msg"><a href="#" class="person">{{ $admin->name }}</a> </span>
                                                    <p class="chat">{{ $admin->message }}</p>
                                                    <?php
                                                    $time1 = new DateTime();
                                                    $time2 = new DateTime($admin->created_at);

                                                    $diff = $time1->diff($time2);
                                                    ?>
                                                    <span class="time">{{ $diff->format('%d дней %H:%i:%s назад') }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form>
                                        @csrf
                                        <input type="hidden" name="name_admin" id="name_admin" value="{{ Auth::user()->name }}">
                                        <input type="hidden" name="chat_room_admin" id="chat_room_admin" value="1">
                                        <input type="text" name="message_admin" id="message_admin" placeholder="Текст сообщения">
                                        <a id="chat_send_admin">Написать</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($cid == 2)
                        <div class="widget">
                            <div class="widget-heading">
                                <a href="javascript:;" data-toggle="collapse" data-target="#html" ><h4>Чат HTML\CSS</h4></a>
                            </div>
                            <div id="html" class="collapse in">
                                <div class="widget-body">
                                    <ul class="recent-activities" id="chat_html">
                                        @foreach($chat_html as $html)
                                            <li>
                                                <div class="avatar">
                                                    <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                                </div>
                                                <div class="content">
                                                    <span class="msg"><a href="#" class="person">{{ $html->name }}</a> </span>
                                                    <p class="chat">{{ $html->message }}</p>
                                                    <?php
                                                    $time1 = new DateTime();
                                                    $time2 = new DateTime($html->created_at);

                                                    $diff = $time1->diff($time2);
                                                    ?>
                                                    <span class="time">{{ $diff->format('%d дней %H:%i:%s назад') }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form>
                                        @csrf
                                        <input type="hidden" name="name_html" id="name_html" value="{{ Auth::user()->name }}">
                                        <input type="hidden" name="chat_room_html" id="chat_room_html" value="2">
                                        <input type="text" name="message_html" id="message_html" placeholder="Текст сообщения">
                                        <a id="chat_send_html">Написать</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($cid == 3)
                        <div class="widget">
                            <div class="widget-heading">
                                <a href="javascript:;" data-toggle="collapse" data-target="#php"><h4>Чат PHP\SQL</h4></a>
                            </div>
                            <div id="php" class="collapse in">
                                <div class="widget-body">
                                    <ul class="recent-activities" id="chat_php">
                                        @foreach($chat_php as $php)
                                            <li>
                                                <div class="avatar">
                                                    <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                                </div>
                                                <div class="content">
                                                    <span class="msg"><a href="#" class="person">{{ $php->name }}</a> </span>
                                                    <p class="chat">{{ $php->message }}</p>
                                                    <?php
                                                    $time1 = new DateTime();
                                                    $time2 = new DateTime($php->created_at);

                                                    $diff = $time1->diff($time2);
                                                    ?>
                                                    <span class="time">{{ $diff->format('%d дней %H:%i:%s назад') }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form>
                                        @csrf
                                        <input type="hidden" name="name_php" id="name_php" value="{{ Auth::user()->name }}">
                                        <input type="hidden" name="chat_room_php" id="chat_room_php" value="3">
                                        <input type="text" name="message_php" id="message_php" placeholder="Текст сообщения">
                                        <a id="chat_send_php">Написать</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($cid == 4)
                        <div class="widget">
                            <div class="widget-heading">
                                <a href="javascript:;" data-toggle="collapse" data-target="#js"><h4>Чат JavaScript</h4></a>
                            </div>
                            <div id="js" class="collapse in">
                                <div class="widget-body">
                                    <ul class="recent-activities" id="chat_js">
                                        @foreach($chat_js as $js)
                                            <li>
                                                <div class="avatar">
                                                    <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                                </div>
                                                <div class="content">
                                                    <span class="msg"><a href="#" class="person">{{ $js->name }}</a> </span>
                                                    <p class="chat">{{ $js->message }}</p>
                                                    <?php
                                                    $time1 = new DateTime();
                                                    $time2 = new DateTime($js->created_at);

                                                    $diff = $time1->diff($time2);
                                                    ?>
                                                    <span class="time">{{ $diff->format('%d дней %H:%i:%s назад') }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form>
                                        @csrf
                                        <input type="hidden" name="name_js" id="name_js" value="{{ Auth::user()->name }}">
                                        <input type="hidden" name="chat_room_js" id="chat_room_js" value="4">
                                        <input type="text" name="message_js" id="message_js" placeholder="Текст сообщения">
                                        <a id="chat_send_js">Написать</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($cid == 5)
                        <div class="widget">
                            <div class="widget-heading">
                                <a href="javascript:;" data-toggle="collapse" data-target="#design"><h4>Чат по дизайну</h4></a>
                            </div>
                            <div id="design" class="collapse in">
                                <div class="widget-body">
                                    <ul class="recent-activities" id="chat_design">
                                        @foreach($chat_design as $design)
                                            <li>
                                                <div class="avatar">
                                                    <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                                </div>
                                                <div class="content">
                                                    <span class="msg"><a href="#" class="person">{{ $design->name }}</a> </span>
                                                    <p class="chat">{{ $design->message }}</p>
                                                    <?php
                                                    $time1 = new DateTime();
                                                    $time2 = new DateTime($design->created_at);

                                                    $diff = $time1->diff($time2);
                                                    ?>
                                                    <span class="time">{{ $diff->format('%d дней %H:%i:%s назад') }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form>
                                        @csrf
                                        <input type="hidden" name="name_design" id="name_design" value="{{ Auth::user()->name }}">
                                        <input type="hidden" name="chat_room_design" id="chat_room_design" value="5">
                                        <input type="text" name="message_design" id="message_design" placeholder="Текст сообщения">
                                        <a id="chat_send_design">Написать</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>

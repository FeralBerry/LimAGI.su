<div class="infobar-wrapper scroll-pane">
    <div class="infobar scroll-content">
        <div id="widgetarea">
            <?php
                $chat_id = explode(',',Auth::user()->chat_id)
            ?>
            @if(isset($chat_id))
                @foreach($chat_room as $room)
                    @foreach($chat_id as $cid)
                        @if($cid == $room->id)
                        <div class="widget">
                            <div class="widget-heading">
                                <a href="javascript:;" data-toggle="collapse" data-target="#{{ $room->chat_name }}" ><h4>{{ $room->title }}</h4></a>
                            </div>
                            <div id="{{ $room->chat_name }}" class="collapse in">
                                <div class="widget-body">
                                    <ul class="recent-activities" id="chat_{{ $room->id }}">

                                    </ul>
                                    <form>
                                        @csrf
                                        <input type="hidden" name="name_{{ $room->id }}" id="name_{{ $room->id }}" value="{{ Auth::user()->name }}">
                                        <input type="hidden" name="chat_room_{{ $room->id }}" id="chat_room_{{ $room->id }}" value="{{ $room->id }}">
                                        <input type="text" name="message_{{ $room->id }}" id="message_{{ $room->id }}" placeholder="Текст сообщения">
                                        <a id="chat_send_{{ $room->id }}">Написать</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endforeach
            @endif
        </div>
    </div>
</div>

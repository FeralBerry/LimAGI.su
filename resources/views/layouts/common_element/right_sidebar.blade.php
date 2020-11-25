<div class="infobar-wrapper scroll-pane">
    <div class="infobar scroll-content">
        <div id="widgetarea">
            <?php $chat_id = explode(',',Auth::user()->chat_id) ?>
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
                                    <ul class="recent-activities" id="chat_{{ $room->chat_name }}">

                                    </ul>
                                    <form>
                                        @csrf
                                        <input type="hidden" name="name_{{ $room->chat_name }}" id="name_{{ $room->chat_name }}" value="{{ Auth::user()->name }}">
                                        <input type="hidden" name="chat_room_{{ $room->chat_name }}" id="chat_room_{{ $room->chat_name }}" value="{{ $room->id }}">
                                        <input type="text" name="message_{{ $room->chat_name }}" id="message_{{ $room->chat_name }}" placeholder="Текст сообщения">
                                        <a id="chat_send_{{ $room->chat_name }}">Написать</a>
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

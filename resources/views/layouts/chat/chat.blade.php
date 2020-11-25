<?php
$str = explode('/:/:/:/', $contents);
?>
@foreach($str as $item => $value)
    <li>
    <?php
    $str1 = explode(':||:', $value);
    ?>
    @foreach($str1 as $i => $v)
        @if($i == 1)
            <div class="avatar">
                <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
            </div>
        @endif
        <div class='content'>
            <span class='msg'><a href='#' class='person'>
                @if($i == 0)
                    {{ $v }}<br>
                @endif</a>
            </span>
            <p class="chat">
                @if($i == 2)
                    {{ $v }}<br>
                @endif
            </p>
            @if($i == 1)
                @php
                    $now = new DateTime(); // текущее время на сервере
                    $date = DateTime::createFromFormat("Y-m-d H:i:s", date('Y-m-d H:i:s',$v)); // задаем дату в любом формате
                    $interval = $now->diff($date); // получаем разницу в виде объекта DateInterval
                @endphp
                <span class='time'>
                @if($interval->y !== 0){{ $interval->y.' Y' }}@endif
                @if($interval->m !== 0){{ $interval->m.' M' }}@endif
                @if($interval->d !== 0){{ $interval->d.' d' }}@endif
                @if($interval->h !== 0){{ $interval->h.' h' }}@endif
                @if($interval->i !== 0){{ $interval->i.' m' }}@endif
                @if($interval->s !== 0){{ $interval->s.' s' }}@endif
                </span>
            @endif
        </div>
    @endforeach
    </li>
@endforeach

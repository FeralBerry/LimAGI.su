<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Auth;
use DateTime;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(){
        $chat = Chat::orderBy('id', 'desc')
            ->limit(10)
            ->get()
            ->reverse();
        foreach ($chat as $c){
            echo '<li><div class="avatar">';
            echo '<img src=\'http://placehold.it/300&text=Placeholder\' class=\'img-responsive img-circle\'>';
            echo '</div>';
            echo "<div class='content'>";
            echo "<span class='msg'><a href='#' class='person'>$c->name</a> </span>";
            echo "<p class=\"chat\">$c->message</p>";

            $time1 = new DateTime();
            $time2 = new DateTime($c->created_at);
            $diff = $time1->diff($time2);

            echo "<span class='time'>";
            echo $diff->format('%d дней %H:%i:%s назад');
            echo "</span>";
            echo "</div></li>";
        }
    }
    public function addChat(Request $request){
        if($request['message'] != ''){
            Chat::create([
                'name' => $request['name'],
                'room_id' => $request['room'],
                'message' => $request['message'],
            ]);
        }
    }
}

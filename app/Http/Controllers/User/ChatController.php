<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use App\Models\ChatRoom;
use Auth;
use File;
use Illuminate\Http\Request;

class ChatController extends AppController
{
    public function indexChat(Request $request, $id){
        $chat_room = ChatRoom::all()
            ->where('id', $id);
        $chat_id = $request['id'];
        if($request->isMethod('post')){
            $post_name = $request['name'];
            $post_mess = $request['mess'];
            foreach ($chat_room as $room){
                if ($chat_id == $room->id) {
                    $fp = fopen(public_path('/chats/'.$room->chat_name.'.txt'), "a+");
                    if (!$fp) {
                        echo 'Ошибка открытия файла!<br>';
                    }
                    $post_name = str_replace(':||:', '', $post_name);
                    $post_name = str_replace('/:/:/:/', '', $post_name);
                    $post_name = str_replace('<', '', $post_name);
                    $post_name = str_replace('>', '', $post_name);
                    $post_name = str_replace('"', '', $post_name);
                    $post_name = str_replace('\'', '', $post_name);

                    $post_mess = str_replace(':||:', '', $post_mess);
                    $post_mess = str_replace('/:/:/:/', '', $post_mess);
                    $post_mess = str_replace('<', '', $post_mess);
                    $post_mess = str_replace('>', '', $post_mess);
                    $post_mess = str_replace("", '<br>', $post_mess);

                    $str = $post_name . ':||:' . time() . ':||:' . $post_mess . '/:/:/:/' . "\n";
                    fwrite($fp, $str);
                    $contents = File::get(public_path('/chats/'.$room->chat_name.'.txt'));
                    $data = [
                        'contents' => $contents,
                    ];
                    return view('layouts.chat', $data);
                }
            }
        }
        foreach ($chat_room as $room){
            $contents = File::get(public_path( '/chats/'.$room->chat_name.'.txt'));
        }
        $data = [
            'contents' => $contents,
        ];
        return view('layouts.chat', $data);
    }
}

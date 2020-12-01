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
        $count_chat = $this->countChat()+1;
        if($request->isMethod('post')){
            $post_name = $request['name'];
            $post_mess = $request['mess'];
            for($i=1;$i<$count_chat;$i++){
                if($id == $i){
                    $fp = fopen(public_path('/chats/'. $i .'.txt'), "a+");
                }
            }
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
            for($i=1;$i<$count_chat;$i++){
                if($id == $i) {
                    $contents = File::get(public_path('/chats/' . $i . '.txt'));
                }
            }
            $data = [
                'contents' => $contents,
            ];
            return view('layouts.chat.chat', $data);
        }
        for($i=1;$i<$count_chat;$i++) {
            if ($id == $i) {
                $contents = File::get(public_path('/chats/' . $i . '.txt'));
            }
        }
        $data = [
            'contents' => $contents,
        ];
        return view('layouts.chat.chat', $data);
    }
}

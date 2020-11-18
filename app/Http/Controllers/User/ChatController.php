<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use Auth;
use DateTime;
use Illuminate\Http\Request;

class ChatController extends AppController
{
    public function chatHtml(){
        $chat_html = Chat::orderBy('id', 'desc')
            ->where('room_id', 2)
            ->limit(10)
            ->get()
            ->reverse();
        $data = [
            'chat_html' => $chat_html,
        ];
        return view('layouts.chat_html', $data);
    }
    public function addChatHtml(Request $request){
        if($request['message'] != ''){
            Chat::create([
                'name' => $request['name'],
                'room_id' => $request['room'],
                'message' => $request['message'],
            ]);
            return redirect()->route('chat-html');
        }
    }
    public function chatAdmin(){
        $chat_admin = Chat::orderBy('id', 'desc')
            ->where('room_id', 1)
            ->limit(10)
            ->get()
            ->reverse();
        $data = [
            'chat_admin' => $chat_admin,
        ];
        return view('layouts.chat_admin', $data);
    }
    public function addChatAdmin(Request $request){
        if($request['message'] != ''){
            Chat::create([
                'name' => $request['name'],
                'room_id' => $request['room'],
                'message' => $request['message'],
            ]);
            return redirect()->route('chat-admin');
        }
    }
    public function chatPhp(){
        $chat_php = Chat::orderBy('id', 'desc')
            ->where('room_id', 3)
            ->limit(10)
            ->get()
            ->reverse();
        $data = [
            'chat_php' => $chat_php,
        ];
        return view('layouts.chat_php', $data);
    }
    public function addChatPhp(Request $request){
        if($request['message'] != ''){
            Chat::create([
                'name' => $request['name'],
                'room_id' => $request['room'],
                'message' => $request['message'],
            ]);
            return redirect()->route('chat-php');
        }
    }
    public function chatJs(){
        $chat_js = Chat::orderBy('id', 'desc')
            ->where('room_id', 4)
            ->limit(10)
            ->get()
            ->reverse();
        $data = [
            'chat_js' => $chat_js,
        ];
        return view('layouts.chat_js', $data);
    }
    public function addChatJs(Request $request){
        if($request['message'] != ''){
            Chat::create([
                'name' => $request['name'],
                'room_id' => $request['room'],
                'message' => $request['message'],
            ]);
            return redirect()->route('chat-js');
        }
    }
    public function chatDesign(){
        $chat_design = Chat::orderBy('id', 'desc')
            ->where('room_id', 5)
            ->limit(10)
            ->get()
            ->reverse();
        $data = [
            'chat_design' => $chat_design,
        ];
        return view('layouts.chat_design', $data);
    }
    public function addChatDesign(Request $request){
        if($request['message'] != ''){
            Chat::create([
                'name' => $request['name'],
                'room_id' => $request['room'],
                'message' => $request['message'],
            ]);
            return redirect()->route('chat-design');
        }
    }
}

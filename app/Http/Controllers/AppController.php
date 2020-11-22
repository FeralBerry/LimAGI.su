<?php


namespace App\Http\Controllers;


use App\Models\Chat;
use App\Models\FreeCourses;
use App\Models\FreeCoursesName;

class AppController extends Controller
{
    public function __construct(){

    }
    protected $title = 'LimAGI - ';
    protected function chat(){
        $data = [
            'chat_admin' => $this->chatAdmin(),
            'chat_html' => $this->chatHtml(),
            'chat_php' => $this->chatPhp(),
            'chat_js' => $this->chatJs(),
            'chat_design' => $this->chatDesign(),
            'free_courses_menu' => $this->freeCoursesMenu(),
        ];
        return $data;
    }
    protected function chatAdmin(){
        $chat_admin = Chat::orderBy('id', 'desc')
            ->where('room_id', 1)
            ->limit(10)
            ->get()
            ->reverse();
        return $chat_admin;
    }
    protected function chatHtml(){
        $chat_html = Chat::orderBy('id', 'desc')
            ->where('room_id', 2)
            ->limit(10)
            ->get()
            ->reverse();
        return $chat_html;
    }
    protected function chatPhp(){
        $chat_php = Chat::orderBy('id', 'desc')
            ->where('room_id', 3)
            ->limit(10)
            ->get()
            ->reverse();
        return $chat_php;
    }
    protected function chatJs(){
        $chat_js = Chat::orderBy('id', 'desc')
            ->where('room_id', 4)
            ->limit(10)
            ->get()
            ->reverse();
        return $chat_js;
    }
    protected function chatDesign(){
        $chat_disign = Chat::orderBy('id', 'desc')
            ->where('room_id', 5)
            ->limit(10)
            ->get()
            ->reverse();
        return $chat_disign;
    }
    protected function freeCoursesMenu(){
        $free_courses_menu = FreeCoursesName::all();
        return $free_courses_menu;
    }
}

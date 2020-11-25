<?php


namespace App\Http\Controllers;


use App\Models\Chat;
use App\Models\ChatRoom;
use App\Models\FreeCourses;
use App\Models\FreeCoursesName;

class AppController extends Controller
{
    public function __construct(){

    }
    protected $title = 'LimAGI - ';
    protected function chat(){
        $chat_room = ChatRoom::all();
        $data = [
            'chat_room' => $chat_room,
            'free_courses_menu' => $this->freeCoursesMenu(),
        ];
        return $data;
    }
    protected function freeCoursesMenu(){
        $free_courses_menu = FreeCoursesName::all();
        return $free_courses_menu;
    }
}

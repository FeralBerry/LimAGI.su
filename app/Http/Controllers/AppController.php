<?php


namespace App\Http\Controllers;


use App\Models\Chat;
use App\Models\ChatRoom;
use App\Models\FreeCourses;
use App\Models\FreeCoursesName;
use App\Models\PayCoursesName;
use App\Http\Controllers\SxGeo;
use Auth;

class AppController extends Controller
{
    public function __construct(){

    }
    protected $title = 'LimAGI - ';
    protected function variableData(){
        $chat_room = ChatRoom::all();
        $data = [
            'country' => $this->locateCountry(),
            'chat_room' => $chat_room,
            'free_courses_menu' => $this->freeCoursesMenu(),
            'pay_courses_menu' => $this->payCoursesMenu(),
            'count_chat' => $this->countChat(),
        ];
        return $data;
    }
    protected function countChat(){
        $chat_room = ChatRoom::all();
        $count_chat = count($chat_room);
        return $count_chat;
    }
    protected function freeCoursesMenu(){
        $free_courses_menu = FreeCoursesName::all();
        return $free_courses_menu;
    }
    protected function payCoursesMenu(){
        $pay_courses_menu = PayCoursesName::all();
        return $pay_courses_menu;
    }
    protected function locateCountry(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $SxGeo = new SxGeo();
        $country = $SxGeo->getCountry($ip);
        return $country;
    }
}

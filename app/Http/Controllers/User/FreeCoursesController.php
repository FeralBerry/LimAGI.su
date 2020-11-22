<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\AppController;
use App\Models\FreeCoursesName;
use App\Models\FreeCourses;
use Illuminate\Http\Request;
use DB;

class FreeCoursesController extends AppController
{
    public function __construct(){

    }
    protected $perpage = 5;
    protected function coursesName(){
        $courses_name = FreeCoursesName::all();
        return $courses_name;
    }
    public function indexHtml(){
        $free_courses = DB::table('free_courses')->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по HTML";
        $data = array_merge($this->chat(),[
            'title' => $title,
            'courses_name' => $this->coursesName(),
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articleHtml($id){
        $free_courses = FreeCourses::where('id',$id);
        foreach ($free_courses as $item){
            $title = $this->title.'бесплатные курсы '.$item->title;
            $second_breadcrumb = 'Курсы по HTML '.$item->title;
        }
        $breadcrumb_free_courses = "Курсы по HTML";
        $data = array_merge($this->chat(),[
            'title' => $title,
            'courses_name' => $this->coursesName(),
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
}

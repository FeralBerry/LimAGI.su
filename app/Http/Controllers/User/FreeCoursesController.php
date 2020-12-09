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
    protected function DataWords(){
        $data = array_merge($this->chat(),[
            'courses_name' => $this->coursesName(),
        ]);
        return $data;
    }
    public function indexHtml(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 1)
            ->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по HTML";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articleHtml($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по HTML '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по HTML";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
    public function indexCss(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 2)
            ->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по CSS";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articleCss($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по CSS '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по CSS";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
    public function indexPhp(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 3)
            ->paginate($this->perpage);
    $title = $this->title.'бесплатные курсы';
    $breadcrumb_free_courses = "Курсы по PHP";
    $data = array_merge($this->DataWords(),[
        'title' => $title,
        'courses' => $free_courses,
        'breadcrumb_free_courses' => $breadcrumb_free_courses,
    ]);
    return view('user.free_courses_index', $data);
}
    public function articlePhp($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по PHP '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по PHP";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
    public function indexJs(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 4)
            ->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по JavaScript";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articleJs($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по JavaScript '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по JavaScript";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
    public function indexLaravel(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 5)
            ->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по Laravel";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articleLaravel($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по Laravel '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по Laravel";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
    public function indexWordpress(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 6)
            ->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по Wordpress";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articleWordpress($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по Wordpress '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по Wordpress";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
    public function indexGitHub(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 7)
            ->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по Git/GitHub";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articleGitHub($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по Git/GitHub '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по Git/GitHub";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
    public function indexBootstrap(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 8)
            ->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по Bootstrap";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articleBootstrap($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по Bootstrap '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по Bootstrap";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
    public function indexPhotoshop(){
        $free_courses = DB::table('free_courses')
            ->where('category_id', 9)
            ->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $breadcrumb_free_courses = "Курсы по Photoshop/Figma";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
        ]);
        return view('user.free_courses_index', $data);
    }
    public function articlePhotoshop($id){
        $free_courses = FreeCourses::all()->where('id', $id);
        foreach ($free_courses as $item){
            if($item->id == $id) {
                $title = $this->title. 'бесплатный курс по '. $item->title;
                $second_breadcrumb = 'Курсы по Photoshop/Figma '. $item->title;
            }
        }
        if(!isset($title)){
            return redirect()->route('user-info');
        }
        $breadcrumb_free_courses = "Курсы по Photoshop/Figma";
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'courses' => $free_courses,
            'breadcrumb_free_courses' => $breadcrumb_free_courses,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.free_courses_article', $data);
    }
}

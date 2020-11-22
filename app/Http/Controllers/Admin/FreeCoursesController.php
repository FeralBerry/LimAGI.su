<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use App\Models\FreeCoursesName;
use Illuminate\Http\Request;
use App\Models\FreeCourses;
use DB;

class FreeCoursesController extends AppController
{
    public function __construct(){
        parent::__construct();
    }
    protected $perpage = 10;
    protected function coursesName(){
        $courses_name = FreeCoursesName::all();
        return $courses_name;
    }
    public function index(){
        $free_courses = DB::table('free_courses')->paginate($this->perpage);
        $title = $this->title.'бесплатные курсы';
        $data = array_merge($this->chat(),[
            'title' => $title,
            'courses_name' => $this->coursesName(),
            'courses' => $free_courses,
        ]);
        return view('admin.free_courses_index', $data);
    }
    public function coursesEdit(Request $request, $id){
        $free_courses = FreeCourses::all()
            ->where('id', $id);
        if($request->isMethod('post')){
            FreeCourses::where('id', $id)->update([
                'title' => $request['title'],
                'category_id' => $request['optionsRadios'],
                'description' => $request['description'],
                'link_courses' => $request['link_courses'],
                'link_materials' => $request['link_materials'],
            ]);
            return redirect()->route('admin-free-courses');
        }
        foreach ($free_courses as $courses){
            $second_breadcrumb = 'Редактирование бесплатного курса '.$courses->title;
        }
        $title = $this->title.'бесплатные курсы';
        $data = array_merge($this->chat(),[
            'second_breadcrumb' => $second_breadcrumb,
            'courses_name' => $this->coursesName(),
            'courses' => $free_courses,
            'title' => $title,
        ]);
        return view('admin.free_courses_edit', $data);
    }
    public function coursesAdd(Request $request){
        if($request->isMethod('post')){
            FreeCourses::create([
                'title' => $request['title'],
                'category_id' => $request['optionsRadios'],
                'description' => $request['description'],
                'link_courses' => $request['link_courses'],
                'link_materials' => $request['link_materials'],
            ]);
            return redirect()->route('admin-free-courses');
        }
        $second_breadcrumb = 'Добавление бесплатного курса';
        $title = $this->title.'бесплатные курсы';
        $data = array_merge($this->chat(),[
            'second_breadcrumb' => $second_breadcrumb,
            'courses_name' => $this->coursesName(),
            'title' => $title,
        ]);
        return view('admin.free_courses_add', $data);
    }
    public function coursesDelete($id){

        return redirect()->route('admin-free-courses-delete');
    }
    public function coursesVideoDelete($id){
        FreeCourses::where('id', $id)->update([
            'link_courses' => '',
        ]);
        return redirect()->route('admin-free-courses-edit', $id);
    }
}


<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\CoursesName;
use Illuminate\Http\Request;
use App\Models\PayCourses;
use DB;

class PayCoursesController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    protected $perpage = 10;
    protected function coursesName(){
        $courses_name = CoursesName::all();
        return $courses_name;
    }
    public function index(){
        $pay_courses = DB::table('pay_courses')->paginate($this->perpage);
        $title = 'One-Page - платные курсы';
        $data = [
            'title' => $title,
            'courses_name' => $this->coursesName(),
            'courses' => $pay_courses,
            'chat' => $this->chat(),
        ];
        return view('admin.pay_courses_index', $data);
    }
    public function coursesEdit(Request $request, $id){
        $pay_courses = PayCourses::all()
            ->where('id', $id);
        if($request->isMethod('post')){
            PayCourses::where('id', $id)->update([
                'title' => $request['title'],
                'category_id' => $request['optionsRadios'],
                'access_id' => $request['access_id'],
                'description' => $request['description'],
                'link_courses' => $request['link_courses'],
                'link_materials' => $request['link_materials'],
            ]);
            return redirect()->route('admin-pay-courses');
        }
        foreach ($pay_courses as $courses) {
            $second_breadcrumb = 'Редактирование платного курса'.$courses->title;
        }
        $title = 'One-Page - платные курсы';
        $data = [
            'courses' => $pay_courses,
            'second_breadcrumb' => $second_breadcrumb,
            'courses_name' => $this->coursesName(),
            'title' => $title,
            'chat' => $this->chat(),
        ];
        return view('admin.pay_courses_edit', $data);
    }
    public function coursesAdd(Request $request){
        if($request->isMethod('post')){
            PayCourses::create([
                'title' => $request['title'],
                'category_id' => $request['optionsRadios'],
                'description' => $request['description'],
                'link_courses' => $request['link_courses'],
                'link_materials' => $request['link_materials'],
            ]);
            return redirect()->route('admin-pay-courses');
        }
        $second_breadcrumb = 'Добавление платного курса';
        $title = 'One-Page - платные курсы';
        $data = [
            'second_breadcrumb' => $second_breadcrumb,
            'courses_name' => $this->coursesName(),
            'title' => $title,
            'chat' => $this->chat(),
        ];
        return view('admin.pay_courses_add', $data);
    }
    public function coursesDelete($id){

        return redirect()->route('admin-pay-courses');
    }
}

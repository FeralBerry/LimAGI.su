<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use Illuminate\Http\Request;

class CoursesNameController extends AppController
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $title = $this->title.'название курсов';
        $data = array_merge($this->chat(),[
            'title' => $title,
        ]);
        return view('admin.courses_name_index', $data);
    }
    public function coursesNameEdit(Request $request, $id){
        if($request->isMethod('post')){
            return redirect()->route('admin-courses-name-index');
        }
        $title = $this->title.'редактирование названия курсов';
        $data = array_merge($this->chat(),[
            'title' => $title,
        ]);
        return view('admin.courses_name_edit', $data);
    }
    public function coursesNameAdd(Request $request){
        if($request->isMethod('post')){
            return redirect()->route('admin-courses-name-index');
        }
        $title = $this->title.'добавление названия курсов';
        $data = array_merge($this->chat(),[
            'title' => $title,
        ]);
        return view('admin.courses_name_add', $data);
    }
    public function coursesNameDelete($id){

        return redirect()->route('admin-courses-name-index');
    }
}

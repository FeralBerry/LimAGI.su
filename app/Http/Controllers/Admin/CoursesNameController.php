<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class CoursesNameController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $title = '';
        $data = [
            'title' => $title,
            'chat' => $this->chat(),
        ];
        return view('admin.courses_name_index', $data);
    }
    public function coursesNameEdit(Request $request, $id){
        if($request->isMethod('post')){
            return redirect()->route('admin-courses-name-index');
        }
        $title = '';
        $data = [
            'title' => $title,
            'chat' => $this->chat(),
        ];
        return view('admin.courses_name_edit', $data);
    }
    public function coursesNameAdd(Request $request){
        if($request->isMethod('post')){
            return redirect()->route('admin-courses-name-index');
        }
        $title = '';
        $data = [
            'title' => $title,
            'chat' => $this->chat(),
        ];
        return view('admin.courses_name_add', $data);
    }
    public function coursesNameDelete($id){

        return redirect()->route('admin-courses-name-index');
    }
}

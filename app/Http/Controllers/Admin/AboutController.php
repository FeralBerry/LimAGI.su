<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Blog;

class AboutController extends AppController
{
    public function __construct(){
        parent::__construct();
    }
    protected $breadcrumb_about = 'Обо мне';
    public function index(){
        $blog = Blog::all();
        $about = About::all();
        $title = $this->title.'admin about';
        $data = array_merge($this->chat(),[
            'about' => $about,
            'blog' => $blog,
            'title' => $title,
            'breadcrumb_about' => $this->breadcrumb_about,
        ]);
        return view('admin.about_index',$data);
    }
    public function aboutEdit(Request $request, $id){
        if($request->isMethod('post')){
            About::where('id', $id)->update([
                'title' => $request['title'],
                'desc' => $request['desc'],
                'link' => $request['link'],
                'icon' => $request['icon'],
            ]);
            return redirect()->route('admin-about');
        }
        $about = About::all()->where('id', $id);
        $second_breadcrumb = 'Редактирование стариницы обо мне';
        $title = $this->title.'Редактирование страницы обо мне';
        $data = array_merge($this->chat(),[
            'title' => $title,
            'about' => $about,
            'breadcrumb_about' => $this->breadcrumb_about,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('admin.about_edit',$data);
    }
}

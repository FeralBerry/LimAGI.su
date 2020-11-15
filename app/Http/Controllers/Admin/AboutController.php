<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Blog;

class AboutController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    protected $breadcrumb_about = 'Обо мне';
    public function index(){
        $blog = Blog::all();
        $about = About::all();
        $title = 'One Page - admin about';
        $data = [
            'about' => $about,
            'blog' => $blog,
            'title' => $title,
            'breadcrumb_about' => $this->breadcrumb_about,
            'chat' => $this->chat(),
        ];
        return view('admin.about_index',$data);
    }
    public function aboutEdit(Request $request, $id){
        if($request->isMethod('post')){
            About::where('id', $id)->update([
                'title' => $request['title'],
                'desc' => $request['desc'],
                'link' => $request['link'],
            ]);
            return redirect()->route('admin-about');
        }
        $about = About::all()->where('id', $id);
        $second_breadcrumb = 'Редактирование стариницы обо мне';
        $title = 'Редактирование страницы обо мне';
        $data = [
            'title' => $title,
            'about' => $about,
            'breadcrumb_about' => $this->breadcrumb_about,
            'second_breadcrumb' => $second_breadcrumb,
            'chat' => $this->chat(),
        ];
        return view('admin.about_edit',$data);
    }
}

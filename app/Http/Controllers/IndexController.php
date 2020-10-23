<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategories;
use App\Models\BlogTags;
use App\Models\About;
use App\Models\Portfolio;
use DB;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class IndexController extends Controller
{
    public function index(Request $request){
        $title = 'PWS';
        $cfg = 1;
        if($request->isMethod('post')){
            $title = 'PWS';
            $cfg = 1;
            $data = [
                'title' => $title,
                'cfg' => $cfg,
            ];
            if(isEmpty(Request::input('name'))){
                return back()
                    ->withErrors(['msg' => 'Вы не ввели имя'])
                    ->withInput();
            }

            return view('base.index', $data);
        }
        $data = [
            'title' => $title,
            'cfg' => $cfg,
        ];
        return view('base.index', $data);
    }
    public function portfolio(){
        $title = 'PWS - portfolio';
        $data = [
            'title' => $title,
        ];
        return view('base.portfolio', $data);
    }
    public function about(){
        $about = About::all();
        $blog = Blog::all();
        foreach ($about as $ab){
            $link = explode(',', $ab->link);
        }
        $title = 'PWS - about';
        $data = [
            'blog' => $blog,
            'title' => $title,
            'about' => $about,
            'link' => $link,
        ];
        return view('base.about', $data);
    }
    public function blog(){
        $title = 'PWS - blog';
        $blog = Blog::all();
        $blog_cat = BlogCategories::all();
        $data = [
            'title' => $title,
            'blog' => $blog,
            'blog_cat' => $blog_cat,
        ];
        return view('base.blog', $data);
    }
    public function blogPost($id){
        $recent = DB::table('blog')->latest('created_at')->limit(6)->get();
        $recents = $recent->SortByDesc('created_at');
        $title = 'PWS - blogName';
        $blog = Blog::all()->where('id', $id);
        foreach ($blog as $b){
            $tags = explode(',', $b->tags);
            $tag_page = explode(',', $b->tag_page);
        }
        $blog_tags = BlogTags::all();
        $data = [
            'title' => $title,
            'blog' => $blog,
            'blog_tags' => $blog_tags,
            'tags' => $tags,
            'tag_page' => $tag_page,
            'recents' => $recents,
        ];
        return view('base.blog-post', $data);
    }
    public function contact(Request $request){
        $title = 'PWS - contact';
        $data = [
            'title' => $title,
        ];
        if($request->isMethod('post')){
            $title = 'PWS - contact';
            $data = [
                'title' => $title,
            ];
            return back();
        }
        return view('base.contact', $data);

    }
    public function welcome(){
        return view('welcome');
    }
}

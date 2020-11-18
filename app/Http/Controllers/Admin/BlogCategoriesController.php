<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\BlogCategories;
use DB;

class BlogCategoriesController extends AppController
{
    public function __construct(){
        parent::__construct();
    }
    protected $perpage = 10;
    protected $breadcrumb_blog_cat = 'Категории блога';
    public function index(){
        $blogCat = DB::table('blog_category')->paginate($this->perpage);
        $title = 'One-Page - категории блога';
        $data = [
            'title' => $title,
            'blogCat' => $blogCat,
            'chat_admin' => $this->chatAdmin(),
            'chat_html' => $this->chatHtml(),
            'chat_php' => $this->chatPhp(),
            'chat_js' => $this->chatJs(),
            'chat_design' => $this->chatDesign(),
        ];
        return view('admin.blog_categories', $data);
    }
    public function categoriesEdit(Request $request, $id){
        if($request->isMethod('post')){
            BlogCategories::where('id', $id)->update([
                'cat_name' => $request['cat_name'],
            ]);
            return redirect()->route('admin-blogCat');
        }
        $blogCat = BlogCategories::all()->where('id', $id);
        foreach ($blogCat as $item) {
            $second_breadcrumb = 'Редактирование категории ' . $item->name;
        }
        $title = 'One-Page - редактирование категории блога';
        $data = [
            'title' => $title,
            'blogCat' => $blogCat,
            'second_breadcrumb' => $second_breadcrumb,
            'breadcrumb_blog_cat' => $this->breadcrumb_blog_cat,
            'chat_admin' => $this->chatAdmin(),
            'chat_html' => $this->chatHtml(),
            'chat_php' => $this->chatPhp(),
            'chat_js' => $this->chatJs(),
            'chat_design' => $this->chatDesign(),
        ];
        return view('admin.blog_categories_edit', $data);
    }
    public function categoriesAdd(Request $request){
        if($request->isMethod('post')){
            BlogCategories::create([
                'cat_name' => $request['cat_name'],
            ]);
            return redirect()->route('admin-blogCat');
        }
        $title = 'One-Page - категории блога';
        $second_breadcrumb = 'Добавление новой категории блога';
        $data = [
            'title' => $title,
            'second_breadcrumb' => $second_breadcrumb,
            'breadcrumb_blog_cat' => $this->breadcrumb_blog_cat,
            'chat_admin' => $this->chatAdmin(),
            'chat_html' => $this->chatHtml(),
            'chat_php' => $this->chatPhp(),
            'chat_js' => $this->chatJs(),
            'chat_design' => $this->chatDesign(),
        ];
        return view('admin.blog_categories_add', $data);
    }
    public function categoriesDelete($id){
        BlogCategories::destroy($id);
        return redirect()->route('admin-blogCat');
    }
}

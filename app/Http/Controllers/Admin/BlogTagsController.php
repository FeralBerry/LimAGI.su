<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogTags;
use App\Models\Blog;
use DB;

class BlogTagsController extends Controller
{
    protected $breadcrumb_blog_tags = 'Теги блога';
    protected $perpage = 10;
    public function index(){
        $blog_tags = DB::table('blog_tags')->paginate($this->perpage);
        $title = 'One-Page - admin blog tags';
        $data = [
            'title' => $title,
            'blog_tags' => $blog_tags,
            'breadcrumb_blog_tags' => $this->breadcrumb_blog_tags,
        ];
        return view('admin.blog_tags', $data);
    }
    public function blogTagsEdit(Request $request, $id){
        if($request->isMethod('post')){
            BlogTags::where('id', $id)->update([
                'name' => $request['name'],
            ]);
            return redirect()->route('admin-blogTags');
        }
        $title = 'One-Page - blog tags edit';
        $blogTags = BlogTags::all()->where('id', $id);
        foreach ($blogTags as $item) {
            $second_breadcrumb = 'Редактирование тега ' . $item->name;
        }
        $data = [
            'title' => $title,
            'id' => $id,
            'blogTags' => $blogTags,
            'second_breadcrumb' => $second_breadcrumb,
            'breadcrumb_blog_tags' => $this->breadcrumb_blog_tags,
        ];
        return view('admin.blog_tag_edit', $data);
    }
    public function blogTagsDelete($id){
        $blog = Blog::all();
        foreach ($blog as $item){
            $new_tags = '';
            $tags = explode(',',$item->tags);
            $count_tags = count($tags);
            $blog_id = $item->id;
            for($i=0;$i<$count_tags;$i++){
                if($tags[$i] == $id){} else {
                    if($i !== $count_tags - 1){
                        $new_tags = $new_tags.$tags[$i].',';
                        Blog::where('id', $blog_id)->update([
                            'tags' => $new_tags,
                        ]);
                    } else {
                        $new_tags = $new_tags.$tags[$i];
                        Blog::where('id', $blog_id)->update([
                            'tags' => $new_tags,
                        ]);
                    }
                }
            }
            if($count_tags == 1){
                $new_tags = '';
                Blog::where('id', $blog_id)->update([
                    'tags' => $new_tags,
                ]);
            }
        }
        BlogTags::destroy($id);
        return redirect()->route('admin-blogTags');
    }
    public function blogTagsAdd(Request $request){
        if($request->isMethod('post')){
            BlogTags::create([
                'name' => $request['name'],
            ]);
            return redirect()->route('admin-blogTags');
        }
        $title = 'One-Page - blog tags add';
        $second_breadcrumb = 'Добавление тега ';
        $data = [
            'title' => $title,
            'second_breadcrumb' => $second_breadcrumb,
            'breadcrumb_blog_tags' => $this->breadcrumb_blog_tags,
        ];
        return view('admin.blog_tag_add', $data);
    }
}

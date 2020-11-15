<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogTags;
use App\Models\BlogCategories;
use DB;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function __construct(){
        parent::__construct();
    }


    protected $perpage = 10;
    protected $breadcrumb_blog = 'Блог';
    protected function blogTags(){
        $blog_tags = BlogTags::all();
        return $blog_tags;
    }
    protected function blogCat(){
        $blog_cat = BlogCategories::all();
        return $blog_cat;
    }
    public function index(){
        $blog = DB::table('blog')->paginate($this->perpage);
        $title = 'One-Page редактирование статей блога';
        $data = [
            'title' => $title,
            'breadcrumb_blog' => $this->breadcrumb_blog,
            'blog' => $blog,
            'blog_tags' => $this->blogTags(),
            'blog_cat' => $this->blogCat(),
            'chat' => $this->chat(),
        ];
        return view('admin.blog',$data);
    }
    public function blogEdit(Request $request, $id){
        $blog = Blog::all()->where('id', $id);
        if($request->isMethod('post')) {
            $id = $request['id'];
            $tags_count = count($this->blogTags());
            $tag = 0;
            for ($i = 0; $i < $tags_count; $i++) {
                $t = 'tags' . $i;
                if ($request[$t] == '') {
                } else {
                    $tags = $i;
                    if ($tags != 0) {
                        $tag = $tag . ',' . $tags;
                    }
                }
            }
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/img');
                $image->move($destinationPath, $img_name);
            } else {
                foreach ($blog as $item){
                    $img_name = $item->img;
                }
            }
            if ($request->hasFile('videoImg')) {
                $image = $request->file('videoImg');
                $video_img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/video-img/');
                $image->move($destinationPath, $video_img_name);
            } else {
                foreach ($blog as $item){
                    $video_img_name = $item->video_img;
                }
            }
            if ($request->hasFile('video')) {
                $image = $request->file('video');
                $video = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/video/');
                $image->move($destinationPath, $video);
            } else {
                foreach ($blog as $item){
                    $video = $item->video;
                }
            }
            if ($request->hasFile('title_img')) {
                $image = $request->file('title_img');
                $title_img = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/title_img/');
                $image->move($destinationPath, $title_img);
            } else {
                foreach ($blog as $item){
                    $title_img = $item->title_img;
                }
            }
            Blog::where('id', $id)->update([
                'title' => $request['title'],
                'blog_cat_id' => $request['optionsRadios'],
                'tags' => $tag,
                'author' => $request['author'],
                'desc' => $request['ckeditor'],
                'id' => $request['id'],
                'brief' => Str::limit($request['brief'], 600).'...',
                'img' => $img_name,
                'video' => $video,
                'video_img' => $video_img_name,
                'title_img' => $title_img,
            ]);// перезапись значений в БД из масива пост
            return redirect()->route('admin-blog');
        }
        $title = 'One-Page редактирование статьи блога';
        foreach ($blog as $item) {
            $second_breadcrumb = 'Редактирование статьи ' . $item->title;
        }
        $data = [
            'blog' => $blog,
            'title' => $title,
            'breadcrumb_blog' => $this->breadcrumb_blog,
            'second_breadcrumb' => $second_breadcrumb,
            'id' => $id,
            'blog_cat' => $this->blogCat(),
            'blog_tags' => $this->blogTags(),
            'chat' => $this->chat(),
        ];
        return view('admin.blog_edit', $data);
    }
    public function blogDelete($id){
        Blog::destroy($id);
        return redirect()->route('admin-blog');
    }
    public function blogAdd(Request $request){
        if($request->isMethod('post')){
            $tags_count = count($this->blogTags());
            $tag = 0;
            for($i=0;$i<$tags_count;$i++){
                $t = 'tags'.$i;
                if($request[$t] == ''){} else {
                    $tags = $i;
                    if($tags != 0){
                        $tag = $tag.','.$tags;
                    }
                }
            }
            $img_name = '';
            $video = '';
            $video_img_name = '';
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/img');
                $image->move($destinationPath, $img_name);
            }
            if ($request->hasFile('title_img')) {
                $image = $request->file('title_img');
                $title_img = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/title_img/');
                $image->move($destinationPath, $title_img);
            }
            if ($request->hasFile('videoImg')) {
                $image = $request->file('videoImg');
                $video_img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/video-img/');
                $image->move($destinationPath, $video_img_name);
            }
            if ($request->hasFile('video')) {
                $image = $request->file('video');
                $video = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/blog/video');
                $image->move($destinationPath, $video);
            }
            Blog::create([
                'id' => $request['id'],
                'title' => $request['title'],
                'blog_cat_id' => $request['optionsRadios'],
                'author' => $request['author'],
                'desc' => $request['ckeditor'],
                'tags' => $tag,
                'brief' => Str::limit($request['brief'], 600).'...',
                'img' => $img_name,
                'video_img' => $video_img_name,
                'video' => $video,
                'title_img' => $title_img,
                ]);
            return redirect()->route('admin-blog');
        }
        $second_breadcrumb = 'Добавление статьи блога';
        $title = 'One-Page добавление статьи блога';
        $blog = Blog::all();
        foreach ($blog as $item){
            $max_id = $item->id +1;
        }
        $data = [
            'title' => $title,
            'second_breadcrumb' => $second_breadcrumb,
            'blog_tags' => $this->blogTags(),
            'blog_cat' => $this->blogCat(),
            'id' => $max_id,
            'chat' => $this->chat(),
        ];
        return view('admin.blog_add',$data);
    }
    public function deleteImg($id){
        Blog::where('id', $id)->update([
            'img' => '',
        ]);
        return redirect()->route('admin-blog-edit', $id);
    }
    public function deleteVideoImg($id){
        Blog::where('id', $id)->update([
            'video_img' => '',
        ]);
        return redirect()->route('admin-blog-edit', $id);
    }
    public function deleteVideo($id){
        Blog::where('id', $id)->update([
            'video' => '',
        ]);
        return redirect()->route('admin-blog-edit', $id);
    }
    public function deleteTitleImg($id){
        Blog::where('id', $id)->update([
            'title_img' => '',
        ]);
        return redirect()->route('admin-blog-edit', $id);
    }
}

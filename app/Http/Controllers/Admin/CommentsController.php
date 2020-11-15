<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\BlogComments;
use App\Models\Blog;
use DB;

class CommentsController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    protected $perpage = 25;
    public function blogCommentsIndex(){
        $blog = Blog::all();
        $blog_comments = DB::table('blog_comments')
            ->paginate($this->perpage);
        $title = 'One-Page - Комментарии к блогу';
        $data = [
            'title' => $title,
            'blog_comments' => $blog_comments,
            'blog' => $blog,
            'chat' => $this->chat(),
        ];
        return view('admin.blog_comments',$data);
    }
    public function blogCommentsEdit(Request $request, $id){
        if($request->isMethod('post')){
            BlogComments::where('id', $id)->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'comments' => $request['message'],
                    'blog_post_id' => $request['post_id'],
                ]);
            return redirect()->route('admin-blog-comments');
        }
        $blog_comment = BlogComments::all()
            ->where('id', $id);
        $blog = Blog::all();
        foreach ($blog_comment as $comment){
            foreach ($blog as $b){
                if($b->id == $comment->blog_post_id){
                    $second_breadcrumb = 'Редактирование комментария '.$comment->name.' к статье '. $b->title;
                } else {
                    $second_breadcrumb = '';
                }
            }
        }
        $title = 'One-Page - редактирование комментария к статье блога';
        $data = [
            'title' => $title,
            'blog_comment' => $blog_comment,
            'second_breadcrumb' => $second_breadcrumb,
            'chat' => $this->chat(),
        ];
        return view('admin.blog_comments_edit',$data);
    }
    public function blogCommentsDelete($id){
        BlogComments::destroy($id);
        return redirect()->route('admin-blog-comments');
    }
}

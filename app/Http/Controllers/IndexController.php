<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategories;
use App\Models\BlogTags;
use App\Models\BlogComments;
use App\Models\About;
use App\Models\Portfolio;
use DB;
use App\User;
use Mail;
use Auth;

class IndexController extends AppController
{
    public function __construct(){
        parent::__construct();
    }
    protected $perpage = 8;
    protected $description = 'Разработка сайта под ключ. Уникальный дизайн. Современные технологии разработки. Анализ конкурентов вашего бизнеса.';
    protected $keywords = 'сайт, разработка, визитка, магазин, дизайн,современная, лучшая,лендинг';
    protected function DataWords(){
        $data = [
            'country' => $this->locateCountry(),
            'keywords' => $this->keywords,
            'description' => $this->description,
        ];
        return $data;
    }
    protected function blogTags(){
        $blog_tags = BlogTags::all();
        return $blog_tags;
    }
    protected function blogCat(){
        $blog_cat = BlogCategories::all();
        return $blog_cat;
    }
    public function index(Request $request){
        $title = 'LimAGI';
        $about = About::all();
        $blog = DB::table('blog')
            ->orderBy('updated_at','DESC')
            ->paginate(2);
        if($request->isMethod('post')) {
            $messages = [
                'required' => "Поле :attribute обязательное для заполнения",
                'email' => "Поле должно соответствовать email адресу"
            ];
            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
            ], $messages);
            $data_contact = $request->all();
            $result = Mail::send('emails.index_email',['data_contact' => $data_contact], function($message) use ($data_contact){
                $mail_admin = env('MAIL_ADMIN');
                $message->from('limagi@limagi.su',$data_contact['name']);
                $message->to($mail_admin)->subject('Заявка на сайт с главной страницы от '.$data_contact['name']);
            });
            if($result){
                return redirect()->back()->with([
                    'status' =>'Ваши данные отправлены скоро с вами свяжется наш менеджер',
                    'name' => $data_contact['name'],
                    'email' => $data_contact['email'],
                    'phone' => $data_contact['phone'],
                ]);
            }
        }
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'about' => $about,
            'blog' => $blog,
        ]);
        return view('base.index', $data);
    }
    public function portfolio(){
        $title = $this->title.'портфолио';
        $portfolio = DB::table('portfolio')->paginate($this->perpage);
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'portfolio' => $portfolio,
        ]);
        return view('base.portfolio', $data);
    }
    public function about(){
        $about = About::all();
        $blog = Blog::all();
        foreach ($about as $ab){
            $link = explode(',', $ab->link);
        }
        $title = $this->title.'обо мне';
        $data = array_merge($this->DataWords(),[
            'blog' => $blog,
            'title' => $title,
            'about' => $about,
            'link' => $link,
        ]);
        return view('base.about', $data);
    }
    public function blog(){
        $title = $this->title.'блог';
        $recent = DB::table('blog')
            ->latest('updated_at')
            ->latest('created_at')
            ->limit(6)
            ->get();
        $recents = $recent->SortByDesc('updated_at');
        $blog = DB::table('blog')
            ->orderBy('updated_at','DESC')
            ->paginate($this->perpage);
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'blog' => $blog,
            'recents' => $recents,
            'blog_cat' => $this->blogCat(),
        ]);
        return view('base.blog', $data);
    }
    public function blogAlias($alias){
        $blog = Blog::all();
        foreach ($blog as $b) {
            if(isset($alias) == $b->author) {
                $blog_author = Blog::all()->where('author', $alias);
            }
            $tags = $b->tags;
            $t = explode(',', $tags);
            $count_t = count($t);
            for($i=0;$i<$count_t;$i++){
                if($alias == $t[$i]){
                    $id[] = $b->id;
                }
            }
            $title = $this->title.$b->title;
        }
        if(isset($id)){
            $blog_author = DB::table('blog')->whereIn('id', $id)->get();
        }
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'blog' => $blog_author,
            'blog_cat' => $this->blogCat(),
        ]);
        return view('base.blog', $data);
    }
    public function blogPost(Request $request,$id){
        if($request->isMethod('post')){
            BlogComments::create([
                'blog_post_id' => $id,
                'name' => $request['name'],
                'email' => $request['email'],
                'comments' => $request['message']
            ]);
            return back()->with(['msg' => 'Комментарий добавлени']);
        }
        $title = $this->title;
        $blog_comments = DB::table('blog_comments')
            ->where('blog_post_id', $id)
            ->paginate($this->perpage);
        $recent = DB::table('blog')
            ->latest('updated_at')
            ->latest('created_at')
            ->limit(6)
            ->get();
        $recents = $recent->SortByDesc('updated_at');
        $blog = Blog::all()->where('id', $id);
        foreach ($blog as $b){
            $tags = explode(',', $b->tags);
            $tag_page = explode(',', $b->tag_page);
            $title = $this->title.$b->title;
            $description = $b->brief;
            $tag = explode(',',$b->tags);
            $count_tags = count($tag);
            $keywords = $title;
            $author = $b->author;
            $blog_tags = BlogTags::all();
            foreach ($blog_tags as $bt){
                for($i=0;$i<$count_tags;$i++){
                    if($bt->id == $tag[$i]){
                        $keywords = $keywords.','.$bt->name;
                    }
                }
            }
        }
        $author_name = User::all()->where('name', $author);
        $data = array_merge($this->DataWords(),[
            'title' => $title,
            'blog' => $blog,
            'blog_cat' => $this->blogCat(),
            'blog_tags' => $this->blogTags(),
            'blog_comments' => $blog_comments,
            'tags' => $tags,
            'author_name' => $author_name,
            'description' => $description,
            'keywords' => $keywords,
            'tag_page' => $tag_page,
            'recents' => $recents,
            'id' => $id,
        ]);
        return view('base.blog-post', $data);
    }
    public function contact(Request $request){
        $title = $this->title.'контакты';
        $data = array_merge($this->DataWords(),[
            'title' => $title,
        ]);
        if($request->isMethod('post')) {
            $data_contact = $request->all();
            $result = Mail::send('emails.contact_email',['data_contact' => $data_contact], function($message) use ($data_contact){
                $mail_admin = env('MAIL_ADMIN');
                $message->from('limagi@limagi.su',$data_contact['contact_name']);
                $message->to($mail_admin)->subject('Заявка на сайт с главной страницы от '.$data_contact['contact_name']);
            });
        }
        return view('base.contact', $data);
    }
    public function price(){
        $title = $this->title.'расценки на создание сайта и платное обучение';
        $data = array_merge($this->DataWords(),[
            'title' => $title,
        ]);
        return view('base.price', $data);
    }
    public function blogLikes(Request $request){
        $id = $request['blog_id'];
        if(Auth::user() == true){
            $not_like = false;
            $user_like = explode(',', Auth::user()->blog_likes);
            foreach ($user_like as $like => $value){
                if($value == $id){
                    $not_like = true;
                }
            }
            if($not_like == true){
                $blog = Blog::all()
                    ->where('id', $id);
                foreach ($blog as $b){
                    $sum = $b->likes - 1;
                    $updated_at = $b->updated_at;
                }
                Blog::where('id', $id)
                    ->update([
                        'likes' => $sum,
                        'updated_at' => $updated_at,
                    ]);
                $count_like = count($user_like);
                for($i=0;$i<$count_like;$i++){
                    if($i == $count_like-1){
                        $like = str_replace($id,'',Auth::user()->blog_likes);
                        $likes = str_replace(',,',',',$like);
                    } else {
                        $likes = str_replace($id.',',',',Auth::user()->blog_likes);
                    }
                }
                Auth::user()->update([
                    'blog_likes' => $likes
                ]);
                $data = [
                    'msg' => "Спасибо ваш голос учтен",
                    'id' => $id
                ];
                return $data;
            }
            if($not_like == false){
                $blog = Blog::all()
                    ->where('id', $id);
                foreach ($blog as $b){
                    $sum = $b->likes + 1;
                    $updated_at = $b->updated_at;
                }
                Blog::where('id', $id)
                    ->update([
                        'likes' => $sum,
                        'updated_at' => $updated_at,
                    ]);
                if(Auth::user()->blog_likes == ''){
                    $likes = $id;
                } else {
                    $likes = Auth::user()->blog_likes.','.$id;
                }
                Auth::user()->update([
                    'blog_likes' => $likes
                ]);
                $data = [
                    'msg' => "Спасибо за ваш голос",
                    'id' => $id
                ];
                return $data;
            }
        } else {
            echo 'Пожалуйста авторизуйтесь для добавления голоса';
        }
    }
    public function footerEmail(Request $request){
        if($request->isMethod('post')){
            $data_contact = $request->all();
            Mail::send('emails.lk_email',['data_contact' => $data_contact], function($message) use ($data_contact){
                $mail_admin = env('MAIL_ADMIN');
                $message->from('limagi@limagi.su',$data_contact['email']);
                $message->to($mail_admin)->subject('Из подвала сайта '.$data_contact['email']);
            });
            echo 'Спасибо за обращение скоро с Вами свяжусь.';
        }
    }
}

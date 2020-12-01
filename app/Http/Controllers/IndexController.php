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
use Mail;

class IndexController extends AppController
{
    protected $perpage = 8;
    protected $description = 'Разработка сайта под ключ. Уникальный дизайн. Современные технологии разработки. Анализ конкурентов вашего бизнеса.';
    protected $keywords = 'сайт, разработка, визитка, магазин, дизайн,современная, лучшая,лендинг';
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
            $result = Mail::send('emails.contact_email',['data_contact' => $data_contact], function($message) use ($data_contact){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data_contact['email'],$data_contact['name']);
                $message->to($mail_admin)->subject('Заявка на сайт с главной страницы от'.$data_contact['name']);
            });
            $token_t = "807035350:AAFMLs54vlYmH5TJCo0If87EXhX-1zPmYRs";
            $chat_id_t = "-257049210";
            $txt_name = $data_contact["name"];
            $txt_email = $data_contact["email"];
            $txt_phone = $data_contact["phone"];
            //$txt_message = $data_contact["message"];
            //$phoneWhatsApp = 89687106270;
            //$whatsAppMessage = urlencode($txt_message);
            //$senToWhatsApp = fopen("https://api.whatsapp.com/send?phone={$phoneWhatsApp}?text={$whatsAppMessage}","r");
            //$sendToTelegram = fopen("https://api.telegram.org/bot{$token_t}/sendMessage?chat_id={$chat_id_t}&parse_mode=html&text=Имя:{$txt_name}%0AЕмаил:{$txt_email}%0AТелефон:{$txt_phone}","r");
            if($result){
                return redirect()->back()->with([
                    'status' =>'Ваши данные отправлены скоро с вами свяжется наш менеджер',
                    'name' => $data_contact['name'],
                    'email' => $data_contact['email'],
                    'phone' => $data_contact['phone'],
                ]);
            }
        }
        $data = [
            'title' => $title,
            'about' => $about,
            'blog' => $blog,
            'description' => $this->description,
            'keywords' => $this->keywords,
        ];
        return view('base.index', $data);
    }
    public function portfolio(){
        $title = $this->title.'портфолио';
        $portfolio = DB::table('portfolio')->paginate($this->perpage);
        $data = [
            'title' => $title,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'portfolio' => $portfolio,
        ];
        return view('base.portfolio', $data);
    }
    public function about(){
        $about = About::all();
        $blog = Blog::all();
        foreach ($about as $ab){
            $link = explode(',', $ab->link);
        }
        $title = $this->title.'обо мне';
        $data = [
            'blog' => $blog,
            'title' => $title,
            'about' => $about,
            'link' => $link,
            'description' => $this->description,
            'keywords' => $this->keywords,
        ];
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
        $data = [
            'title' => $title,
            'blog' => $blog,
            'recents' => $recents,
            'blog_cat' => $this->blogCat(),
            'description' => $this->description,
            'keywords' => $this->keywords,
        ];
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
        $data = [
            'title' => $title,
            'blog' => $blog_author,
            'blog_cat' => $this->blogCat(),
            'description' => $this->description,
            'keywords' => $this->keywords,
        ];
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
            $blog_tags = BlogTags::all();
            foreach ($blog_tags as $bt){
                for($i=0;$i<$count_tags;$i++){
                    if($bt->id == $tag[$i]){
                        $keywords = $keywords.','.$bt->name;
                    }
                }
            }
        }
        $data = [
            'title' => $title,
            'blog' => $blog,
            'blog_cat' => $this->blogCat(),
            'blog_tags' => $this->blogTags(),
            'blog_comments' => $blog_comments,
            'tags' => $tags,
            'tag_page' => $tag_page,
            'recents' => $recents,
            'description' => $description,
            'keywords' => $keywords,
            'id' => $id,
        ];
        return view('base.blog-post', $data);
    }
    public function contact(Request $request){
        $title = $this->title.'контакты';
        $data = [
            'title' => $title,
            'description' => $this->description,
            'keywords' => $this->keywords,
        ];
        if($request->isMethod('post')) {
            $messages = [
                'required' => "Поле :attribute обязательное для заполнения",
                'email' => "Поле должно соответствовать email адресу"
            ];
            $this->validate($request, [
                'contact_name' => 'required|max:255',
                'contact_email' => 'required|email',
                'contact_subject' => 'max:255',
            ], $messages);
            $data_contact = $request->all();
            $result = Mail::send('emails.contact_email',['data_contact' => $data_contact], function($message) use ($data_contact){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($mail_admin,$data_contact['contact_name']);
                $message->to($mail_admin)->subject($data_contact['contact_message']);
            });
            $token_t = "807035350:AAFMLs54vlYmH5TJCo0If87EXhX-1zPmYRs";
            $chat_id_t = "-257049210";
            $txt_name = $data_contact["contact_name"];
            $txt_email = $data_contact["contact_email"];
            $txt_phone = $data_contact["contact_phone"];
            $txt_message = $data_contact["contact_message"];
            //$phoneWhatsApp = 89687106270;
            $whatsAppMessage = urlencode($txt_message);
            //$senToWhatsApp = fopen("https://api.whatsapp.com/send?phone={$phoneWhatsApp}?text={$whatsAppMessage}","r");
            $sendToTelegram = fopen("https://api.telegram.org/bot{$token_t}/sendMessage?chat_id={$chat_id_t}&parse_mode=html&text=Имя:{$txt_name}%0AЕмаил:{$txt_email}%0AТелефон:{$txt_phone}%0AСообщение:{$txt_message}","r");
            if($result){
                return redirect()->back()->with([
                    'status' =>'Ваши данные отправлены скоро с вами свяжется наш менеджер',
                    'contact_name' => $data_contact['contact_name'],
                    'contact_email' => $data_contact['contact_email'],
                    'contact_phone' => $data_contact['contact_phone'],
                    'contact_subject' => $data_contact['contact_subject'],
                    'contact_message' => $data_contact['contact_message'],
                ]);
            }
        }
        return view('base.contact', $data);
    }
}

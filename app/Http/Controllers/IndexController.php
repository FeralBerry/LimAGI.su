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
use Mail;

class IndexController extends Controller
{
    protected function blogTags(){
        $blog_tags = BlogTags::all();
        return $blog_tags;
    }
    protected function blogCat(){
        $blog_cat = BlogCategories::all();
        return $blog_cat;
    }
    public function index(Request $request){
        $title = 'PWS';
        $cfg = 1;
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
                $message->to($mail_admin)->subject('Заявка на рассчет сайта');
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
            //$sendToTelegram = fopen("http://api.telegram.org/bot{$token_t}/sendMessage?chat_id={$chat_id_t}&parse_mode=html&text=Имя:{$txt_name}%0AЕмаил:{$txt_email}%0AТелефон:{$txt_phone}","r");
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
        $data = [
            'title' => $title,
            'blog' => $blog,
            'blog_cat' => $this->blogCat(),
        ];
        return view('base.blog', $data);
    }
    public function blogPost($id){
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
            $title = 'PWS - '.$b->title;
        }
        $data = [
            'title' => $title,
            'blog' => $blog,
            'blog_cat' => $this->blogCat(),
            'blog_tags' => $this->blogTags(),
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
        if($request->isMethod('post')) {
            $messages = [
                'required' => "Поле :attribute обязательное для заполнения",
                'email' => "Поле должно соответствовать email адресу"
            ];
            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'max:255',
            ], $messages);
            $data_contact = $request->all();
            $result = Mail::send('emails.contact_email',['data_contact' => $data_contact], function($message) use ($data_contact){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data_contact['email'],$data_contact['name']);
                $message->to($mail_admin)->subject($data_contact['message']);
            });
            $token_t = "807035350:AAFMLs54vlYmH5TJCo0If87EXhX-1zPmYRs";
            $chat_id_t = "-257049210";
            $txt_name = $data_contact["name"];
            $txt_email = $data_contact["email"];
            $txt_phone = $data_contact["phone"];
            $txt_message = $data_contact["message"];
            //$phoneWhatsApp = 89687106270;
            $whatsAppMessage = urlencode($txt_message);
            //$senToWhatsApp = fopen("https://api.whatsapp.com/send?phone={$phoneWhatsApp}?text={$whatsAppMessage}","r");
            $sendToTelegram = fopen("http://api.telegram.org/bot{$token_t}/sendMessage?chat_id={$chat_id_t}&parse_mode=html&text=Имя:{$txt_name}%0AЕмаил:{$txt_email}%0AТелефон:{$txt_phone}%0AСообщение:{$txt_message}","r");
            if($result){
                return redirect()->back()->with([
                    'status' =>'Ваши данные отправлены скоро с вами свяжется наш менеджер',
                    'name' => $data_contact['name'],
                    'email' => $data_contact['email'],
                    'phone' => $data_contact['phone'],
                    'message' => $data_contact['message'],
                ]);
            }
        }
        return view('base.contact', $data);
    }
}

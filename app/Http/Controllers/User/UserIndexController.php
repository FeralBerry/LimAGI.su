<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use App\Models\ChatRoom;
use App\User;
use Illuminate\Http\Request;
use App\Models\BlogCategories;
use DB;
use Auth;

class UserIndexController extends AppController
{
    public function __construct(){

    }
    protected $perpage = 5;
    public function index(){
        if(Auth::user()->role == 'admin'){
            $users = User::all();
            $count_users = count($users);
            $index = 'Панель администратора';
            $title = $this->title.'admin panel';
            $data = array_merge($this->chat(),[
                'title' => $title,
                'count_users' => $count_users,
                'index' => $index,
            ]);
            return view('admin.index', $data);
        }
        $second_breadcrumb = '';
        $blogCat = BlogCategories::all();
        $blog = DB::table('blog')
            ->paginate($this->perpage);
        $title = $this->title.'кабинет пользователя';
        $data = array_merge($this->chat(),[
            'title' => $title,
            'blog' => $blog,
            'blogCat' => $blogCat,
            'second_breadcrumb' => $second_breadcrumb,
        ]);
        return view('user.index', $data);
    }
    public function info(Request $request){
        if($request->isMethod('post')){
            User::where('id', Auth::user()->id)->update([
                'phone' => $request['phone'],
                'address' => $request['address'],
                'web_site' => $request['web_site'],
                'facebook' => $request['facebook'],
                'twitter' => $request['twitter'],
                'github' => $request['github'],
                'instagram' => $request['instagram'],
                'motto' => $request['motto'],
                'name' => $request['name'],
                'email' => $request['email'],
            ]);
            return redirect()->route('user-info');
        }
        $breadcrumb_user_info = 'Настройки пользователя';
        $title = $this->title.'кабинет информация пользователя';
        $data = array_merge($this->chat(),[
            'title' => $title,
            'breadcrumb_user_info' => $breadcrumb_user_info,
        ]);
        return view('user.info', $data);
    }
    public function avatarUpload(Request $request, $id){
        if ($request->isMethod('post')){
            if(Auth::user()->avatar !== 'author.jpg'){
                unlink(public_path('base/img/avatar/') . Auth::user()->avatar);
            }
            if ($request->hasFile('ava')) {
                $image = $request->file('ava');
                $img_name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/base/img/avatar/');
                $image->move($destinationPath, $img_name);
                User::where('id', $id)
                    ->update([
                        'avatar' => $img_name,
                    ]);
            }
            return redirect()->route('user-info');
        }
    }
}

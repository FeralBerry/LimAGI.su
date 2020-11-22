<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\AppController;
use App\Models\Chat;
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
    public function info(){
        $breadcrumb_user_info = 'Настройки пользователя';
        $title = $this->title.'кабинет информация пользователя';
        $data = array_merge($this->chat(),[
            'title' => $title,
            'breadcrumb_user_info' => $breadcrumb_user_info,
        ]);
        return view('user.info', $data);
    }
}

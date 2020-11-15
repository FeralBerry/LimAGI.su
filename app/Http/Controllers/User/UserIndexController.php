<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\User;
use Illuminate\Http\Request;
use App\Models\BlogCategories;
use DB;
use Auth;

class UserIndexController extends Controller
{
    protected $perpage = 5;
    public function index(){
        $chat = Chat::orderBy('id', 'desc')
            ->limit(10)
            ->get()
            ->reverse();
        if(Auth::user()->role == 'admin'){
            $users = User::all();
            $count_users = count($users);
            $index = 'Панель администратора';
            $title = 'One-Page admin panel';
            $data = [
                'title' => $title,
                'count_users' => $count_users,
                'index' => $index,
                'chat' => $chat,
            ];
            return view('admin.index', $data);
        }
        $second_breadcrumb = '';
        $blogCat = BlogCategories::all();
        $blog = DB::table('blog')
            ->paginate($this->perpage);
        $title = 'Кабинет пользователя One-Page';
        $data = [
            'title' => $title,
            'blog' => $blog,
            'blogCat' => $blogCat,
            'second_breadcrumb' => $second_breadcrumb,
            'chat' => $chat,
        ];
        return view('user.index', $data);
    }
    public function info(){
        $chat = Chat::orderBy('id', 'desc')
            ->limit(10)
            ->get()
            ->reverse();
        $breadcrumb_user_info = 'Настройки пользователя';
        $title = 'Кабинет информация пользователя One-Page';
        $data = [
            'title' => $title,
            'breadcrumb_user_info' => $breadcrumb_user_info,
            'chat' => $chat,
        ];
        return view('user.info', $data);
    }
}

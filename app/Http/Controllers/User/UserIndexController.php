<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategories;
use DB;

class UserIndexController extends Controller
{
    protected $perpage = 5;
    public function index(){
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
        ];
        return view('user.index', $data);
    }
    public function info(){
        $breadcrumb_user_info = 'Настройки пользователя';
        $title = 'Кабинет информация пользователя One-Page';
        $data = [
            'title' => $title,
            'breadcrumb_user_info' => $breadcrumb_user_info,
        ];
        return view('user.info', $data);
    }
}

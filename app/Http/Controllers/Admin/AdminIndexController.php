<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class AdminIndexController extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    protected $perpage = 10;//количество выводимых записей
    protected $breadcrumb_user = 'Позьлователи';
    public function index(){
        $users = User::all();
        $count_users = count($users);
        $index = 'Панель администратора';
        $title = 'One-Page admin panel';
        $data = [
            'title' => $title,
            'count_users' => $count_users,
            'index' => $index,
            'chat' => $this->chat(),
        ];
        return view('admin.index', $data);
    }
    public function users(){
        $users = DB::table('users')->paginate($this->perpage);
        $title = 'One-Page admin panel table Users';
        $data = [
            'title' => $title,
            'users' => $users,
            'breadcrumb_user' => $this->breadcrumb_user,
            'chat' => $this->chat(),
        ];
        return view('admin.users', $data);
    }
    public function usersEdit(Request $request, $id){
        if($request->isMethod('post')){
            $id = $request['id'];
            $user = DB::table('users')->where('id', $id);
            foreach ($user as $item){
                User::where('id', $id)->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'role' => $request['optionsRadiosInline'],
                    ]);// перезапись значений в БД из масива пост
            }
            return redirect()->route('admin-user');
        }// обработка пост запроса на изменение в таблице юзерс и переадресация на таблицу пользователей с выгрузкой последних данных
        $user = User::all()->where('id', $id);
        $second_breadcrumb = 'Редактирование пользователя';
        foreach ($user as $item){
            $second_breadcrumb = 'Редактирование пользователя - '. $item->name;
        }
        $title = 'One-Page admin panel table Users';
        $data = [
            'title' => $title,
            'user' => $user,
            'breadcrumb_user' => $this->breadcrumb_user,
            'second_breadcrumb' => $second_breadcrumb,
            'id' => $id,
            'chat' => $this->chat(),
        ];
        return view('admin.users_edit', $data);
    }
    public function deleteUser($id){
        User::destroy($id);
        return redirect()->route('admin-user');
    }
}

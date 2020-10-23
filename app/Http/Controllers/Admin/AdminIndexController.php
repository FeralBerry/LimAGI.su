<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class AdminIndexController extends Controller
{
    protected $perpage = 10;//количество выводимых записей
    protected $breadcrumb_user = 'Позьлователи';
    public function index(){
        $title = 'PWS admin panel';
        $data = [
            'title' => $title,
        ];
        return view('admin.index', $data);
    }
    public function users(){
        $users = DB::table('users')->paginate($this->perpage);
        $title = 'PWS admin panel table Users';
        $data = [
            'title' => $title,
            'users' => $users,
            'breadcrumb_user' => $this->breadcrumb_user,
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
        $title = 'PWS admin panel table Users';
        $data = [
            'title' => $title,
            'user' => $user,
            'breadcrumb_user' => $this->breadcrumb_user,
            'second_breadcrumb' => $second_breadcrumb,
            'id' => $id,
        ];
        return view('admin.users_edit', $data);
    }
    public function deleteUser($id){
        User::destroy($id);
        return redirect()->route('admin-user');
    }
}

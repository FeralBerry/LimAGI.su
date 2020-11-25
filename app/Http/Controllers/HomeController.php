<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class HomeController extends AppController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $count_users = count($users);
        if(Auth::user()->role == 'admin'){
            $title = $this->title.'домашняя';
            $data = array_merge($this->chat(),[
                'title' => $title,
                'count_users' => $count_users,
            ]);
            return view('admin.index', $data);
        }
        $title = $this->title.'домашняя';
        $data = array_merge($this->chat(),[
            'title' => $title,
            'count_users' => $count_users,
        ]);
        return view('user.index', $data);
    }
}

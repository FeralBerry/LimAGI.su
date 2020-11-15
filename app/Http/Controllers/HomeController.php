<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
    protected function chat(){
        $chat = Chat::orderBy('id', 'desc')
            ->limit(10)
            ->get()
            ->reverse();
        return $chat;
    }
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $title = 'One-Page';
            $data = [
                'title' => $title,
                'chat' => $this->chat(),
            ];
            return view('admin.index', $data);
        }
        $title = 'One-Page';
        $data = [
            'title' => $title,
            'chat' => $this->chat(),
        ];
        return view('user.index', $data);
    }
}

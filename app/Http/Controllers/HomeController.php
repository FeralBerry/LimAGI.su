<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $title = 'One-Page';
            $data = [
                'title' => $title,
            ];
            return view('admin.index', $data);
        }
        $title = 'One-Page';
        $data = [
            'title' => $title,
        ];
        return view('user.index', $data);
    }
}

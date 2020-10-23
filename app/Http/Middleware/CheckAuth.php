<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAuth
{
    public function handle($request, Closure $next)
    {

        if(isset(Auth::user()->role) == 'user'){
            if(isset(Auth::user()->role) == 'admin'){
                return $next($request);
            }
            $title = 'PWS';
            $data = [
                'title' => $title
            ];
            return view('base.index', $data);
        }
        $title = 'PWS';
        $data = [
            'title' => $title
        ];
        return view('base.index', $data);
    }
}

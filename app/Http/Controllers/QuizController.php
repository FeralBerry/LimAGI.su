<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends AppController
{
    public function quizDesign(Request $request){
        return redirect()->route('price');
    }
    public function quizLanding(Request $request){
        return redirect()->route('price');
    }
    public function quizSeo(Request $request){
        return redirect()->route('price');
    }
    public function quizCorp(Request $request){
        return redirect()->route('price');
    }
    public function quizCard(Request $request){
        return redirect()->route('price');
    }
    public function quizMagazine(Request $request){
        return redirect()->route('price');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AppController;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use DB;

class PortfolioController extends AppController
{
    public function __construct(){
        parent::__construct();
    }
    protected $perpage = 10;
    protected $breadcrumb_portfolio = 'Портфолио';
    public function index(){
        $portfolio = DB::table('portfolio')->paginate($this->perpage);
        $title = $this->title.'админ панель портфолио';
        $data = array_merge($this->variableData(),[
            'title' => $title,
            'portfolio' => $portfolio,
            'breadcrumb_portfolio' => $this->breadcrumb_portfolio,
        ]);
        return view('admin.portfolio', $data);
    }
    public function portfolioEdit(Request $request, $id){
        if($request->isMethod('post')){
            $portfolio = Portfolio::all()->where('id', $id);
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/base/img/portfolio/');
                $image->move($destinationPath, $img_name);
            } else {
                foreach ($portfolio as $item){
                    $img_name = $item->img;
                }
            }
            Portfolio::where('id', $id)->update([
                'title' => $request['title'],
                'sub_title' => $request['sub_title'],
                'id' => $request['id'],
                'img' => $img_name,
            ]);// перезапись значений в БД из масива пост
            return redirect()->route('admin-portfolio');
        }
        $portfolio = Portfolio::all()->where('id', $id);
        $title = $this->title.'админ панель портфолио';
        foreach ($portfolio as $p){
            $second_breadcrumb = 'Редактирование портфолио'.$p->title;
        }
        $data = array_merge($this->variableData(),[
            'title' => $title,
            'portfolio' => $portfolio,
            'second_breadcrumb' => $second_breadcrumb,
            'breadcrumb_portfolio' => $this->breadcrumb_portfolio,
        ]);
        return view('admin.portfolio_edit', $data);
    }
    public function portfolioAdd(Request $request){
        if($request->isMethod('post')){
            $img_name = '';
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/base/img/portfolio/');
                $image->move($destinationPath, $img_name);
            }
            Portfolio::create([
                'id' => $request['id'],
                'title' => $request['title'],
                'sub_title' => $request['sub_title'],
                'img' => $img_name,
            ]);
            return redirect()->route('admin-portfolio');
        }
        $title = $this->title.'админ панель портфолио';
        $second_breadcrumb = 'Добавление портфолио';
        $portfolio = Portfolio::all();
        foreach ($portfolio as $item){
            $max_id = $item->id +1;
        }
        $data = array_merge($this->variableData(),[
            'title' => $title,
            'second_breadcrumb' => $second_breadcrumb,
            'breadcrumb_portfolio' => $this->breadcrumb_portfolio,
            'id' => $max_id,
        ]);
        return view('admin.portfolio_add', $data);
    }
    public function portfolioDelete($id){
        $portfolio = Portfolio::where('id', $id);
        foreach ($portfolio as $p){
            unlink(public_path('/base/img/blog/img/'.$p->img));
        }
        Portfolio::destroy($id);
        return redirect()->route('admin-portfolio');
    }
    public function deleteImg($id){
        $portfolio = Portfolio::where('id', $id);
        foreach ($portfolio as $p){
            unlink(public_path('/base/img/blog/img/'.$p->img));
        }
        Portfolio::where('id', $id)->update([
            'img' => '',
        ]);
        return redirect()->route('admin-portfolio-edit', $id);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use DB;

class PortfolioController extends Controller
{
    protected $perpage = 10;
    protected $breadcrumb_portfolio = 'Портфолио';
    public function index(){
        $portfolio = DB::table('portfolio')->paginate($this->perpage);
        $title = 'One-Page - админ панель портфолио';
        $data = [
            'title' => $title,
            'portfolio' => $portfolio,
            'breadcrumb_portfolio' => $this->breadcrumb_portfolio,
        ];
        return view('admin.portfolio', $data);
    }
    public function portfolioEdit(Request $request, $id){
        if($request->isMethod('post')){
            $portfolio = Portfolio::all()->where('id', $id);
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/portfolio/');
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
        $title = 'One-Page - админ панель портфолио';
        foreach ($portfolio as $p){
            $second_breadcrumb = 'Редактирование портфолио'.$p->title;
        }
        $data = [
            'title' => $title,
            'portfolio' => $portfolio,
            'second_breadcrumb' => $second_breadcrumb,
            'breadcrumb_portfolio' => $this->breadcrumb_portfolio,
        ];
        return view('admin.portfolio_edit', $data);
    }
    public function portfolioAdd(Request $request){
        if($request->isMethod('post')){
            $img_name = '';
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/portfolio/');
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
        $title = 'One-Page - админ панель портфолио';
        $second_breadcrumb = 'Добавление портфолио';
        $portfolio = Portfolio::all();
        foreach ($portfolio as $item){
            $max_id = $item->id +1;
        }
        $data = [
            'title' => $title,
            'second_breadcrumb' => $second_breadcrumb,
            'breadcrumb_portfolio' => $this->breadcrumb_portfolio,
            'id' => $max_id,
        ];
        return view('admin.portfolio_add', $data);
    }
    public function portfolioDelete($id){
        Portfolio::destroy($id);
        return redirect()->route('admin-portfolio');
    }
    public function deleteImg($id){
        Portfolio::where('id', $id)->update([
            'img' => '',
        ]);
        return redirect()->route('admin-portfolio-edit', $id);
    }
}

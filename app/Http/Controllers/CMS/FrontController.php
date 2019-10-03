<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\menuModel;
use App\NewsModel;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{
    public function index(){
        $news = NewsModel::all();
        $menus = menuModel::orderBy('order')->get();
        View::share('menus',$menus);
        View::share('news',$news);
        return view('Front.Home.index');
    }

    public function page($id){
        $menus = menuModel::orderBy('order')->get();
        View::share('menus',$menus);

        $menu = menuModel::find($id);
        View::share('menu',$menu);
        return view('Front.Layouts.page');
    }
}

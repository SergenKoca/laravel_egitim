<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\menuModel;
use App\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class homeController extends Controller
{
    public function index(){
        $news = NewsModel::all();

        View::share('news',$news);

        return view('Front.Home.index');
    }
}

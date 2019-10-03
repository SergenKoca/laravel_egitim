<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\menuModel;
use App\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class newsController extends Controller
{
    // soru : admin panelinde neden controller'larda yandaki menü elemanlarını çekmedik. Yani bu controller'larda bizi ilgilendiren
    // sadece news(haberler) iken menuModelinden menuleride çektik. Neden ? Çünkü admin paneli statik bir yapıya sahip.
    // ama front(kullanıcının gördüğü) bölüm ise statik değil her an admin panelinden değiştirilebilir. Bu yüzden kullanıcının gördüğü
    // her sayfadaki controllerlada verileri tekar tekrar çektik. Dikkat edersek news ve view sayfasında menuleri kullanmadık gibi
    // gözüküyor ama aslında kullandık main sayfası sürekli yenilendi yani sürekli veritabanından verileri çektik.
    public function index(){
        $news = NewsModel::all();
        $menus = menuModel::orderBy('order')->get();
        View::share('menus',$menus);
        View::share('news',$news);

        return view('Front.News.index');
    }
    public function view($id){
        $news = NewsModel::find($id);
        $menus = menuModel::orderBy('order')->get();
        View::share('menus',$menus);
        View::share('news',$news);
        return view('Front.News.view');
    }
}

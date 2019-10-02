<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class newsController extends Controller
{
    public function create(){
        return view('sayfalar.news.create');
    }
    public function create_news(Request $request){
        $newmodel = new NewsModel();
        $newmodel->title = $request->input('title');
        $newmodel->content = $request->input('content');

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $newmodel->img_url=$request->image->move(public_path('images'), $imageName);

        $newmodel->save();

        return redirect()->route('name_show_create_news');
    }

    public function get_news(){
        $data =  NewsModel::all();
        return view('sayfalar.news.list',['haberler'=>$data]);
    }

    public function delete_news(Request $request){
        $silinecekVeri = NewsModel::find($request->id);
        $silinecekVeri->delete();

        return redirect()->route('name_get_news');
    }

    public function show_edit_news(Request $request){
        $guncellenecekVeri=NewsModel::find($request->id);
        View::share('news',$guncellenecekVeri);
        return view('sayfalar.news.edit');
    }

    public function edit_news(Request $request){
        $guncellenecekVeri = NewsModel::find($request->id);
        $guncellenecekVeri->title = $request->input('title');
        $guncellenecekVeri->content = $request->input('content');
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $guncellenecekVeri->img_url=$request->image->move(public_path('images'), $imageName);

        $guncellenecekVeri->save();

        return redirect()->route('name_get_news');
    }
}

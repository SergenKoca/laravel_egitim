<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\menuModel;
use App\subMenuModel;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function create(){
        return view('sayfalar.menu.createmenu');
    }

    public function create_post(Request $request){
        $menu=new menuModel();
        $menu->title=$request->input('title');
        $menu->content=$request->input('content');
        $menu->order=$request->input('order');

        $menu->save();

        return redirect()->route('name_show_create_menu');
    }

    public function create_submenu(){
        $menuler=menuModel::all();
        return view('sayfalar.menu.createsubmenu',['menuler'=>$menuler]);
    }

    public function create_submenu_post(Request $request){
        $submenu = new subMenuModel();
        $submenu->menu_id = $request->input('menu_id');
        $submenu->title = $request->input('title');
        $submenu->content = $request->input('content');
        $submenu->order = $request->input('order');

        $submenu->save();

        return redirect()->route('name_show_create_sub_menu');
    }

    public function get_menu(){
        $menu_list = menuModel::all();
        return view('sayfalar.menu.list',['menuler'=>$menu_list]);
    }

    public function show_edit_menu(Request $request){
        $menu = menuModel::find($request->id);

        return view('sayfalar.menu.editmenu',['menu'=>$menu]);
    }
    public function post_edit_menu(Request $request){
        $menumodel = menuModel::find($request->id);
        $menumodel->title = $request->input('title');
        $menumodel->content = $request->input('content');
        $menumodel->order = $request->input('order');

        $menumodel->save();

        return redirect()->route('name_get_menu');
    }
    public function show_edit_sub_menu(Request $request){
        $submenu = subMenuModel::find($request->id);
        $menuler = menuModel::all();

        return view('sayfalar.menu.editsub',['submenu'=>$submenu,'menuler'=>$menuler]);
    }
    public function post_edit_sub_menu(Request $request){
        $submenu = subMenuModel::find($request->id);
        $submenu->menu_id = $request->input('menu_id');
        $submenu->title = $request->input('title');
        $submenu->content = $request->input('content');
        $submenu->order = $request->input('order');

        $submenu->save();

        return redirect()->route('name_get_menu');
    }

    public function delete_menu(Request $request){
        $menu = menuModel::find($request->id);
        $menu->delete();
        return redirect()->route('name_get_menu');
    }
    public function delete_sub_menu(Request $request){
        $menu = subMenuModel::find($request->id);
        $menu->delete();
        return redirect()->route('name_get_menu');
    }
}

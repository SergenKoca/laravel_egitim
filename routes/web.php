<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/','CMS\FrontController@index')->name('main');
Route::get('/archive','Front\newsController@index')->name('name_front_index');
Route::get('/archive/{id}','Front\newsController@view')->name('name_show_view');
Route::get('/page{id}','CMS\FrontController@page')->name('name_page');

Route::group(['prefix'=>'panel','middleware'=>'auth'],function (){
    Route::get('/',function (){
        return view('sayfalar.home');
    })->name('home');

    Route::group(['prefix'=>'news'],function (){
        Route::get('/create_news','CMS\NewsController@create')->name('name_show_create_news');
        Route::post('/create_news_post','CMS\NewsController@create_news')->name('name_create_news');
        Route::get('/news_list','CMS\NewsController@get_news')->name('name_get_news');
        Route::get('/delete_news/{id}','CMS\NewsController@delete_news')->name('name_delete_news');
        Route::get('/show_edit_news/{id}','CMS\NewsController@show_edit_news')->name('name_show_edit_news');
        Route::post('/edit_news/{id}','CMS\NewsController@edit_news')->name('name_edit_news');
}   );

    Route::group(['prefix'=>'menu'],function (){
        Route::get('/create_menu','CMS\menuController@create')->name('name_show_create_menu');
        Route::post('/create_menu_post','CMS\menuController@create_post')->name('name_create_menu');
        Route::get('/create_sub_menu','CMS\menuController@create_submenu')->name('name_show_create_sub_menu');
        Route::post('/create_sub_menu_post','CMS\menuController@create_submenu_post')->name('name_create_sub_menu');
        Route::get('/menu_list','CMS\menuController@get_menu')->name('name_get_menu');
        Route::get('/edit_menu/{id}','CMS\menuController@show_edit_menu')->name('name_show_edit_menu');
        Route::post('edit_menu_post/{id}','CMS\menuController@post_edit_menu')->name('name_post_edit_name');
        Route::get('/edit_sub_menu/{id}','CMS\menuController@show_edit_sub_menu')->name('name_show_edit_sub_menu');
        Route::post('edit_sub_menu_post/{id}','CMS\menuController@post_edit_sub_menu')->name('name_post_edit_sub_menu');
        Route::get('delete_menu/{id}','CMS\menuController@delete_menu')->name('name_delete_menu');
        Route::get('delete_sub_menu/{id}','CMS\menuController@delete_sub_menu')->name('name_delete_sub_menu');
    });
});

Route::get('/exit',function (){\Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
})->name('logout');


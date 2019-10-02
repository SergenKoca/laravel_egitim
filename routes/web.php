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
    });
});

Route::get('/exit',function (){\Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
})->name('logout');


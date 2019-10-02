<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function create(){
        return view('sayfalar.menu.createmenu');
    }

    public function create_post(){

    }
}

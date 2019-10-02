<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menuModel extends Model
{
    protected $table="menu";
    public $timestamps=true;

    protected $fillable=[
      'title',
        'content',
        'order',
    ];

    public function subMenu(){
        
    }
}

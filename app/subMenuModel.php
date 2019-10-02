<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subMenuModel extends Model
{
    protected $table="sub_menu";
    public $timestamps=true;

    protected $fillable=[
        'menu_id',
        'title',
        'content',
        'order',
    ];
}

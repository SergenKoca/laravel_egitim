<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table='news';
    public $timestamps=true;

    protected $fillable = [
        'img_url',
        'title',
        'content',
    ];
}

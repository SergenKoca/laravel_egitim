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
        # Burada Menu tablosu ile subMenu tablosu arasında foreign key bağlantısı oluşturdum. Aralarında Genelden özele bakarsak
        # one-many ilişki var.Yani bir ana modelin birden fazla alt menusü olabilir. Aynı alt menu sadece birden fazla
        # ana menunun altında olamaz.Fizik kuralı :D . bu yüzden iki tabloyu foreign key ile bağlamamız gerekir.
        #Bu bağlantıyıda hasMany() metodu ile yaptık.
        return $this->hasMany('App\subMenuModel','menu_id','id');
    }
}

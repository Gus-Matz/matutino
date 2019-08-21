<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $table = 'colores';
    protected $fillable = [
        'nombre'
    ];
    public function mochilas(){
        return $this->hasMany('App\Mochila','color_id','id');
    }
}

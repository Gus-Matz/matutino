<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table = 'marcas';
    protected $fillable = [
        'nombre'
    ];

    public function mochilas(){
        return $this->hasMany('App\Mochila','marca_id','id');
    }
}

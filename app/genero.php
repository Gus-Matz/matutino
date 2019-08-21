<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //
    protected $table = 'generos';
    protected $fillable = [
        'nombre'
    ];
    public function mochilas(){
        return $this->hasMany('App\Mochila','genero_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mochila extends Model
{
    //
    protected $table = 'mochilas';
    protected $fillable = [
        'modelo',
        'marca_id',
        'genero_id',
        'color_id',
        'precio'
    ];

    public function marca(){
        return $this->belongsTo('App\Marca','marca_id','id');
    }

    public function genero(){
        return $this->belongsTo('App\Genero','genero_id','id');
    }

    public function color(){
        return $this->belongsTo('App\Color','color_id','id');
    }

    public function setModeloAttribute($value)
    {
        $this->attributes['modelo'] = strtoupper($value);
    }

    public function getModeloAttribute($value)
    {
        return "--".$value."--";
    }
}

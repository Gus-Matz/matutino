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

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mochila extends Model
{
    //
    protected $table = 'mochilas';
    protected $fillable = [
        'modelo',
        'marca',
        'genero',
        'color',
        'precio'
	];

}

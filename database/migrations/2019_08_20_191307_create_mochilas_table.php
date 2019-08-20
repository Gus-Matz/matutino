<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMochilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mochilas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('modelo');
            $table->integer('marca_id')->unsigned();
            $table->integer('genero_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->double('precio');
            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('color_id')->references('id')->on('colores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mochilas');
    }
}

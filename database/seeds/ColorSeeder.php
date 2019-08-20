<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('colores')->insert([
            ['nombre' => "Rojo"],
            ['nombre' => "Azul"],
            ['nombre' => "Amarillo"],
            ['nombre' => "Verde"],
            ['nombre' => "Naranja"],
            ['nombre' => "Morado"],
            ['nombre' => "Blanco"],
            ['nombre' => "Negro"],
            ['nombre' => "Gris"],
            ['nombre' => "Dorado"],
            ['nombre' => "Plata"],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('generos')->insert([
            ['nombre' => "Caballero"],
            ['nombre' => "Dama"],
            ['nombre' => "Niño"],
            ['nombre' => "Niña"],
            ['nombre' => "Unisex"],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('marcas')->insert([
            ['nombre' => "Mango"],
            ['nombre' => "AllStar"],
            ['nombre' => "Levis"],
            ['nombre' => "BTSchools"],
        ]);
    }
}

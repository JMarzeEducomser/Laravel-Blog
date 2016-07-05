<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'nombre' => 'Futbol',
        ]);

        DB::table('tags')->insert([
            'nombre' => 'Programación',
        ]);

        DB::table('tags')->insert([
            'nombre' => 'Web',
        ]);

        DB::table('tags')->insert([
            'nombre' => 'Tutorial',
        ]);

        DB::table('tags')->insert([
            'nombre' => 'Cuestionario',
        ]);
    }
}

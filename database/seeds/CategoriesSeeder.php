<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Política Interna', 'description' => 'Questões políticas brasileiras e dos estados', 'active' => TRUE],
            ['name' => 'Política Internacional', 'description' => 'Questões políticas que envolvem o Brasil e o mundo', 'active' => TRUE],
            ['name' => 'Saúde', 'description' => 'Tudo que envolve saúde pública', 'active' => TRUE],
            ['name' => 'Segurança', 'description' => 'Segurança pública no Brasil', 'active' => TRUE],
            ['name' => 'Esportes', 'description' => 'Esportes em geral', 'active' => TRUE]
        ]);
    }
}

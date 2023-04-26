<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('usuarios')->insert([
            'usuario' => 'maite',
            'senha' => bcrypt('06051993'),
        ]); 

        \DB::table('usuarios')->insert([
            'usuario' => 'valquiria',
            'senha' => bcrypt('87456321'),
        ]);

        \DB::table('usuarios')->insert([
            'usuario' => 'mesopotania',
            'senha' => bcrypt('8482659'),
        ]);
    }   
}

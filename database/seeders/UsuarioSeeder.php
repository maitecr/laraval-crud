<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('usuarios')->insert([
            'usuario' => 'maite',
            'senha' =>  bcrypt('0605'),
        ]);

        \DB::table('usuarios')->insert([
            'usuario' => 'pafuncio',
            'senha' =>  bcrypt('254896'),
        ]);

        \DB::table('usuarios')->insert([
            'usuario' => 'griselda',
            'senha' =>  bcrypt('489415156'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert(
            [
                [
                    'nombre_usuario'=>'Ingrid',
                    'contraseña_usuario'=> Hash::make('ucv123')
                ],
                [
                    'nombre_usuario'=>'Felix',
                    'contraseña_usuario'=> Hash::make('ucv123')
                ],
                [
                    'nombre_usuario'=>'Jhony',
                    'contraseña_usuario'=> Hash::make('ucv123')
                ]
            ]
        );
    }
}

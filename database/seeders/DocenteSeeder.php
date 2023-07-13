<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('docentes')->insert(
            [
                [
                    'nombre1_docente'=>'Ingrid',
                    'nombre2_docente'=>'Lucy',
                    'apellido1_docente'=>'Laborio',
                    'apellido2_docente'=>'Mejia',
                    'codigo_usuario'=>'1',
                ],
                [
                    'nombre1_docente'=>'Felix',
                    'nombre2_docente'=>'Estuardo',
                    'apellido1_docente'=>'Cruz',
                    'apellido2_docente'=>'Alayo',
                    'codigo_usuario'=>'2',
                ],
                [
                    'nombre1_docente'=>'Jhony',
                    'nombre2_docente'=>'Edgar',
                    'apellido1_docente'=>'Azabache',
                    'apellido2_docente'=>'Cruz',
                    'codigo_usuario'=>'3',
                ]
            ]
        );
    }
}

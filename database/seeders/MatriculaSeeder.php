<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matriculas')->insert(
            [
                [
                    'codigo_docente'=>'1',
                    'codigo_curso'=>'1',
                    'codigo_grado'=>'1',
                    'fecha_matricula'=>'2023-06-28'
                ],
                [
                    'codigo_docente'=>'1',
                    'codigo_curso'=>'2',
                    'codigo_grado'=>'1',
                    'fecha_matricula'=>'2023-06-28'
                ],
                [
                    'codigo_docente'=>'2',
                    'codigo_curso'=>'4',
                    'codigo_grado'=>'4',
                    'fecha_matricula'=>'2023-06-28'
                ],
                [
                    'codigo_docente'=>'2',
                    'codigo_curso'=>'5',
                    'codigo_grado'=>'4',
                    'fecha_matricula'=>'2023-06-28'
                ],
                [
                    'codigo_docente'=>'3',
                    'codigo_curso'=>'5',
                    'codigo_grado'=>'7',
                    'fecha_matricula'=>'2023-06-28'
                ],
                [
                    'codigo_docente'=>'3',
                    'codigo_curso'=>'6',
                    'codigo_grado'=>'7',
                    'fecha_matricula'=>'2023-06-28'
                ],
                [
                    'codigo_docente'=>'3',
                    'codigo_curso'=>'7',
                    'codigo_grado'=>'7',
                    'fecha_matricula'=>'2023-06-28'
                ],
                [
                    'codigo_docente'=>'3',
                    'codigo_curso'=>'8',
                    'codigo_grado'=>'7',
                    'fecha_matricula'=>'2023-06-28'
                ]
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocenteCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('docentescursos')->insert(
            [
                [
                    'codigo_docente'=>'1',
                    'codigo_curso'=>'1'
                ],
                [
                    'codigo_docente'=>'1',
                    'codigo_curso'=>'2'
                ],
                [
                    'codigo_docente'=>'1',
                    'codigo_curso'=>'3'
                ],
                [
                    'codigo_docente'=>'2',
                    'codigo_curso'=>'4'
                ],
                [
                    'codigo_docente'=>'2',
                    'codigo_curso'=>'5'
                ],
                [
                    'codigo_docente'=>'3',
                    'codigo_curso'=>'6'
                ],
                [
                    'codigo_docente'=>'3',
                    'codigo_curso'=>'7'
                ],
                [
                    'codigo_docente'=>'3',
                    'codigo_curso'=>'8'
                ]
            ]
        );
    }
}

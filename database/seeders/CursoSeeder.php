<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('cursos')->insert(
            [
                [
                    'nombre_curso' => 'Matemática'
                ],
                [
                    'nombre_curso' => 'Comunicación'
                ],
                [
                    'nombre_curso' => 'Personal Social'
                ],
                [
                    'nombre_curso' => 'Ciencia y Ambiente'
                ],
                [
                    'nombre_curso' => 'Religión'
                ],
                [
                    'nombre_curso' => 'Educación Física'
                ],
                [
                    'nombre_curso' => 'Educación por el Arte'
                ],
                [
                    'nombre_curso' => 'Tutoria'
                ]
            ]
        );

    }
}

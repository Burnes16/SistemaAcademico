<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grados')->insert(
            [
                [
                    'nombre_grado' => 'Primer Grado',
                    'seccion_grado' => 'A'
                ],
                [
                    'nombre_grado' => 'Primer Grado',
                    'seccion_grado' => 'B'
                ],
                [
                    'nombre_grado' => 'Primer Grado',
                    'seccion_grado' => 'C'
                ],
                [
                    'nombre_grado' => 'Primer Grado',
                    'seccion_grado' => 'D'
                ],
                [
                    'nombre_grado' => 'Segundo Grado',
                    'seccion_grado' => 'A'
                ],
                [
                    'nombre_grado' => 'Segundo Grado',
                    'seccion_grado' => 'B'
                ],
                [
                    'nombre_grado' => 'Segundo Grado',
                    'seccion_grado' => 'C'
                ],
                [
                    'nombre_grado' => 'Segundo Grado',
                    'seccion_grado' => 'D'
                ],

            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BimestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bimestres')->insert(
            [
                [
                    'nombre_bimestre' => 'I Bimestre'
                ],
                [
                    'nombre_bimestre' => 'II Bimestre'
                ],
                [
                    'nombre_bimestre' => 'III Bimestre'
                ],
                [
                    'nombre_bimestre' => 'VI Bimestre'
                ],
            ]
        );
    }
}

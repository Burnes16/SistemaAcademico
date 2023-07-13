<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('alumnos')->insert(
            [
                [
                    'nombre1_alumno' => 'Velania',
                    'nombre2_alumno' => 'Juvidithza',
                    'apellido1_alumno' => 'Acuña',
                    'apellido2_alumno' => 'Zavala',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Fernando',
                    'nombre2_alumno' => 'Dulman',
                    'apellido1_alumno' => 'Aranda',
                    'apellido2_alumno' => 'Muñoz',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Hana',
                    'nombre2_alumno' => 'Abigail',
                    'apellido1_alumno' => 'Arena',
                    'apellido2_alumno' => 'Meléndez',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Milton',
                    'nombre2_alumno' => 'Sebastián',
                    'apellido1_alumno' => 'Cáceres',
                    'apellido2_alumno' => 'Ñontol',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Alejandro',
                    'nombre2_alumno' => 'Emiliano',
                    'apellido1_alumno' => 'Carranza',
                    'apellido2_alumno' => 'Montenegro',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Akemi',
                    'nombre2_alumno' => 'Yumiko',
                    'apellido1_alumno' => 'Cipriano',
                    'apellido2_alumno' => 'Cisneros',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Yago',
                    'nombre2_alumno' => 'Ismael',
                    'apellido1_alumno' => 'Contreras',
                    'apellido2_alumno' => 'Vásquez',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Ariana',
                    'nombre2_alumno' => 'Camila',
                    'apellido1_alumno' => 'Cruz',
                    'apellido2_alumno' => 'Cuba',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Daniela',
                    'nombre2_alumno' => 'Brigit',
                    'apellido1_alumno' => 'De La Cruz',
                    'apellido2_alumno' => 'Gambóa',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Jhon',
                    'nombre2_alumno' => 'Davi',
                    'apellido1_alumno' => 'Dali',
                    'apellido2_alumno' => 'Osorio',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Ana',
                    'nombre2_alumno' => 'Yuriveth',
                    'apellido1_alumno' => 'Díaz',
                    'apellido2_alumno' => 'León',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Andrea',
                    'nombre2_alumno' => 'Raquel',
                    'apellido1_alumno' => 'Echeverría',
                    'apellido2_alumno' => 'Saldarriaga',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Pamela',
                    'nombre2_alumno' => 'Josenid',
                    'apellido1_alumno' => 'Fabian',
                    'apellido2_alumno' => 'Orejuela',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Melany',
                    'nombre2_alumno' => 'Xiomara',
                    'apellido1_alumno' => 'Cuadra',
                    'apellido2_alumno' => 'Fernandez',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno'=>'Rosa',
                    'nombre2_alumno'=>'Maria',
                    'apellido1_alumno'=>'Perez',
                    'apellido2_alumno'=>'Lopez',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno'=>'Jose',
                    'nombre2_alumno'=>'Luis',
                    'apellido1_alumno'=>'Giraldo',
                    'apellido2_alumno'=>'Sanchez',
                    'codigo_matricula'=>'1'
                ],
                [
                    'nombre1_alumno' => 'Roberto',
                    'nombre2_alumno' => 'Renato',
                    'apellido1_alumno' => 'Azabache',
                    'apellido2_alumno' => 'Saldarriaga',
                    'codigo_matricula'=>'3'
                ],
                [
                    'nombre1_alumno' => 'Andre',
                    'nombre2_alumno' => 'Gustavo',
                    'apellido1_alumno' => 'Bonifaz',
                    'apellido2_alumno' => 'Saldaña',
                    'codigo_matricula'=>'3'
                ],
                [
                    'nombre1_alumno' => 'Kristina',
                    'nombre2_alumno' => 'Raquel',
                    'apellido1_alumno' => 'Flores',
                    'apellido2_alumno' => 'Flores',
                    'codigo_matricula'=>'3'
                ],
                [
                    'nombre1_alumno' => 'Alexandra',
                    'nombre2_alumno' => 'Estefani',
                    'apellido1_alumno' => 'Mejia',
                    'apellido2_alumno' => 'Lopez',
                    'codigo_matricula'=>'3'
                ],
                [
                    'nombre1_alumno' => 'Johana',
                    'nombre2_alumno' => 'Estefani',
                    'apellido1_alumno' => 'Quiroz',
                    'apellido2_alumno' => 'Lopez',
                    'codigo_matricula'=>'3'
                ],
                [
                    'nombre1_alumno' => 'Lucy',
                    'nombre2_alumno' => 'Olivia',
                    'apellido1_alumno' => 'Rodriguez',
                    'apellido2_alumno' => 'Lopez',
                    'codigo_matricula'=>'3'
                ],
                [
                    'nombre1_alumno' => 'Ricky',
                    'nombre2_alumno' => 'Anthony',
                    'apellido1_alumno' => 'Sanchez',
                    'apellido2_alumno' => 'Milla',
                    'codigo_matricula'=>'3'
                ],
            ]
        );
    }
}

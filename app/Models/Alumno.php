<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    protected $primaryKey= 'codigo_alumno';

    protected $fillable = [
        'nombre1_alumno', 'nombre2_alumno',
        'apellido1_alumno', 'apellido2_alumno','codigo_matricula'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function matriculas()
    {
        return $this->hasOne(Matricula::class, 'codigo_alumno');
    }

}

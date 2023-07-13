<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaBimestre extends Model
{
    use HasFactory;

    protected $table = 'notasbimestres';

    protected $primaryKey='codigo_notabimestre';

    protected $fillable = 
    [
        'codigo_bimestre',
        'codigo_curso',
        'codigo_alumno',
        'nota_examenescrito',
        'nota_examenoral',
        'nota_practica',
        'nota_exposicion',
        'nota_tarea',
        'promedio_final'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function alumnos()
    {
        return $this->belongsTo(Alumno::class, 'codigo_alumno');
    }

    public function biemestres()
    {
        return $this->belongsTo(Bimestre::class, 'codigo_bimestre');
    }
    
}

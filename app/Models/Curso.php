<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $primaryKey = 'codigo_curso';

    protected $fillable = ['nombre_curso'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function docentes()
    {
        return $this->belongsToMany(Docente::class,'docentescursos','codigo_curso','codigo_docente');
    }


    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'codigo_curso');
    }

}

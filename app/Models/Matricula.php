<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $table = 'matriculas';

    protected $primaryKey = 'codigo_matricula';

    protected $fillable =
    [
        'codigo_docente',
        'codigo_curso',
        'codigo_grado',
        'fecha_matricula'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'codigo_docente');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'codigo_curso');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'codigo_alumno');
    }

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'codigo_grado');
    }
}

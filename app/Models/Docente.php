<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';

    protected $primaryKey='codigo_docente';

    protected $fillable = [
        'nombre1_docente', 'nombre2_docente',
        'apellido1_docente', 'apellido2_docente',
        'codigo_usuario'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function usuarios()
    {
        return $this->belongsTo(Usuario::class,'codigo_usuario');
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'docentescursos', 'codigo_docente', 'codigo_curso');
    }

}

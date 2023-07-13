<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocenteCurso extends Model
{
    use HasFactory;

    protected $table = 'docentescursos';

    protected $primaryKey = 'codigo_docentecurso';

    protected $fillable = 'codigo_docente,codigo_curso';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function docentes()
    {
        return $this->belongsTo(Docente::class, 'codigo_docente');
    }
    
    public function cursos()
    {
        return $this->belongsTo(Curso::class, 'codigo_curso');
    }

}

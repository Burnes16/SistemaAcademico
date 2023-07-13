<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;

    protected $table  = 'grados';

    protected $primaryKey = 'codigo_grado';

    protected $fillable = ['nombre_grado, seccion_grado'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'codigo_grado');
    }
    
}

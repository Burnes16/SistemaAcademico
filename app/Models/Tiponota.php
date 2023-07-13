<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiponota extends Model
{
    use HasFactory;

    protected $table = 'tiponotas';

    protected $primaryKey='codigo_tiponota';

    protected $fillable = ['nombre_tiponota'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function notasBimestres()
    {
        return $this->hasMany(NotaBimestre::class, 'codigo_tiponota');
    }

}

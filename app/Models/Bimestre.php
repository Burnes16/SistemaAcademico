<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimestre extends Model
{
    use HasFactory;

    protected $table = 'bimestres';

    protected $primaryKey= 'codigo_bimestre';

    protected $fillable = [ 'nombre_bimestre'];
    
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function notasBimestres()
    {
        return $this->hasMany(NotaBimestre::class, 'codigo_bimestre');
    }

}

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "usuarios";

    protected $primaryKey = 'codigo_usuario';

    protected $fillable = [
        'nombre_usuario',
        'contraseña',
    ];

    protected $hidden = [
        'contraseña',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    public $timestamps = false;

    public function docente()
    {
        return $this->hasOne(Docente::class,'codigo_usuario');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'segundo_nombre', 
        'apellido_paterno', 
        'apellido_materno', 
        'email', 
        'contraseña', 
        'registrado'
    ];
}

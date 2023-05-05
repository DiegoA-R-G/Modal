<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'documento',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'direccion',
        'rol',
        'password'
    ];
}

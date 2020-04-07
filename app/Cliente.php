<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='registrar';
    protected $fillable = ['id', 'nombre', 'documento', 'correo', 'direccion', 'rol' ];
}
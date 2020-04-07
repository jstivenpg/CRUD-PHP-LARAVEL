<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='users';
    protected $fillable = ['id', 'name', 'documento', 'email', 'direccion', 'tipo', 'password'];
}
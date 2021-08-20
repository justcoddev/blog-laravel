<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lenguaje extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'descripcion', 'categoria'];
    /*cuando intente agg u nregistro pro signacsion masiva, solo se creen registro con esos campos
    entocnes, si un usuario mal intencionado agregara "status" que n oexiste dentro del array, haria como si no existiera
    y solo se crea registro con esas asignacion y nso evitamso le problema de seguridad
     */
}

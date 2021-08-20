<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lenguaje extends Model
{
    use HasFactory;
    /* protected $fillable = ['name', 'descripcion', 'categoria']; */
    /*cuando intente agg u nregistro pro signacsion masiva, solo se creen registro con esos campos
    entocnes, si un usuario mal intencionado agregara "status" que n oexiste dentro del array, haria como si no existiera
    y solo se crea registro con esas asignacion y nso evitamso le problema de seguridad
     */

    protected $guarded = [];
    /* asignamso lso campos que queremos que esten protegidos y  si trataramso de almacenar un nuevo
     registro por asignacion masiva y el usuario a agg el campo status en el formulario, al haber incluido
     status dentro de la propiedad guarded elloquen ignoraria ese campo y me guardaria los otros campos menos status,
   */
}

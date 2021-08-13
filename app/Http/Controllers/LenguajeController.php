<?php

namespace App\Http\Controllers;

use App\Models\Lenguaje;
use Illuminate\Http\Request;

class LenguajeController extends Controller
{
  public function index()
  {
    $lenguajes = Lenguaje::paginate(); //coleccion que se va a pasar a la vista.
    //se puede poner ___ Lenguaje::all(); para mostrar toditos
    //o se puede poner ___ Lenguaje::paginate(); para mostrarlo por pagina y a este agrgearle botones ?page=2

    return view('lenguajes.index', compact('lenguajes'));
    /* se agrega una coma y luego compact para darle formato  y para eso hay que pasarle esa coleccion a la vista
  */
  }
  public function create()
  {
    return view('lenguajes.create');
  }
  public function show($id)
  {
    /* otra manera de pasar una variable a la vista es usando un metodo
    compact('lenguaje'); que es equivalente a colocae  ['lenguaje'=> $lenguaje] */
    //recuperar u nregistro por su id
    $lenguaje = Lenguaje::find($id);

  

    return view('lenguajes.show', compact('lenguaje'));
  }
}

<?php

namespace App\Http\Controllers;

use App\Models\Lenguaje;
use Illuminate\Http\Request;

use App\Http\Requests\StoreLenguaje;

class LenguajeController extends Controller
{
  public function index()
  {
    $lenguajes = Lenguaje::orderBy('id', 'desc')->paginate(); //coleccion que se va a pasar a la vista.
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

  public function store(StoreLenguaje $request)
  {


    $lenguaje = Lenguaje::create(
      $request->all()
    );
    /* crear una instancia de la clase curso y le va a grtegar las prpiedades name, descripcion y categoria
eso va a ser almacenado en la varuable curso y al final salva el registro en neustra BD
 */


    return redirect()->route('lenguajes.show', $lenguaje);
  }

  public function show(Lenguaje $lenguaje)
  {
    /* otra manera de pasar una variable a la vista es usando un metodo
    compact('lenguaje'); que es equivalente a colocae  ['lenguaje'=> $lenguaje] */
    //recuperar u nregistro por su id
    //$lenguaje = Lenguaje::find($lenguaje);
    return view('lenguajes.show', compact('lenguaje'));
  }

  public function edit(lenguaje $lenguaje)
  {

    return view('lenguajes.edit', compact('lenguaje'));
  }
  public function update(Request $request, Lenguaje $lenguaje)
  {
    //VALIDACION
    $request->validate([
      'name' => 'required',
      'descripcion' => 'required',
      'categoria' => 'required'
    ]);

    /* 
    $lenguaje->name = $request->name;
    $lenguaje->descripcion = $request->descripcion;
    $lenguaje->categoria = $request->categoria;

    $lenguaje->save(); */
    $lenguaje->update($request->all());
    return redirect()->route('lenguajes.show', $lenguaje);
  }
  public function destroy(Lenguaje $lenguaje){
    $lenguaje->delete();
    return redirect()->route('lenguajes.index');

  }


}

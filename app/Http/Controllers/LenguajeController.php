<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LenguajeController extends Controller
{
    public function index(){
 return view('lenguajes.index');
    }
    public function create(){
  return view('lenguajes.create');
    }
    public function show($lenguaje){
/* otra manera de pasar una variable a la vista es usando un metodo
compact('lenguaje'); que es equivalente a colocae  ['lenguaje'=> $lenguaje]
 */

return view('lenguajes.show', compact('lenguaje'));
    }
}

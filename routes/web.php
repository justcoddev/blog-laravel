<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LenguajeController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',HomeController::class );

//Colocandole un ->name  para ser llamada en el otro lado seria imposible cambiarle la ruta  pero lo vuelve más sencillo 
//el cambio de rtutas URL
Route::get('lenguajes', [LenguajeController::class, 'index'] )->name('lenguajes.index');

Route::get('lenguajes/create', [LenguajeController::class, 'create'])->name('lenguajes.create');

Route::post('lenguajes', [LenguajeController::class, 'store'] ) ->name('lenguajes.store');

Route::get('lenguajes/{id}', [LenguajeController::class, 'show'])->name('lenguajes.show');

//usando metodo get se va a mandar por la url 
//mientras que si usamos el  metodo ost , la info se manda de manera oculta
//pon tanto si es informacion de un formulario l oque debemos hacer es unsar el método post
//pasar mas de una variable en la URL pero ara no  tener tantas rutas, podemos
//decir que la variable version sea opcional, colocando un signo de interrogacion al final de version
//y de esta manera estamos diciendo que esa variable puede ser opcional
//ADEMAS  dentro de la funcion inicializamso la variable dandole un valor = NULL
//
/* Route::get('lenguaje/{lenguaje}/{version?}', function ($lenguaje, $version= NULL) {
    if ($version) { //si  hay algo almencenado en la variable versión imprimir esto de lo contrario
       return "Bienvenido al lenguaje $lenguaje, versión: $version";
    }else {
        return "Bienvenido al lenguaje $lenguaje";
    }
}); */

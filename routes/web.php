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

Route::get('/', HomeController::class);



//OTRA MANERA DE DEFINIR RUTAS  luego de haberlas creado es la siguiente
//ademàs tambien le asigna mètodos como get, post, put y delete se puede saber 
//llendo a consola y colocando
//php artisan r:l
//listar las rutas
Route::resource('modelos', LenguajeController::class)->parameters(['modelos'=>'lenguaje'])->names('lenguajes');
//de esta manera puedo cambiar la ruta principal y no tener problemas con al secundario
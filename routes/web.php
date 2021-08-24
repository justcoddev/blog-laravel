<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LenguajeController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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
Route::get('/', HomeController::class)->name('home');
//OTRA MANERA DE DEFINIR RUTAS  luego de haberlas creado es la siguiente
//ademàs tambien le asigna mètodos como get, post, put y delete se puede saber 
//llendo a consola y colocando
//php artisan r:l
//listar las rutas
Route::resource('lenguajes', LenguajeController::class);
Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos',function (){
  $correo = new ContactanosMailable;

  Mail::to('edisonpaulcrz@gmail.com')->send($correo);
  return "mensaje enviado";
});
 
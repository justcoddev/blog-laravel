<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    } 
    
    public function store(Request $request)
    {
        $request-> validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]); 

        $correo = new ContactanosMailable($request->all());

        Mail::to('edisonpaulcrz@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
/* Aqui voy a agregar texto para hacer tiempo para subir el ultimo post XD acerca del blog.
Bueno, he tomano notas, hubieron cosas que si fueron complejas de entender, pero al final
de cada commit me daba satisfacción el poder completar este pequeño curso, me encanta el reto
de aprender dia dia por mi mismo, es emocionante y a la vez difícil.
Gracias Totales!!!
 */

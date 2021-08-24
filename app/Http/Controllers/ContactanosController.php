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
    
    public function store()
    {
        $correo = new ContactanosMailable;

        Mail::to('edisonpaulcrz@gmail.com')->send($correo);
        return "mensaje enviado";
    }
}

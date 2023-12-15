<?php

namespace App\Http\Controllers;

use App\Mail\MisCorreos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactoController extends Controller
{
    public function index(){
        return view('contacto');
    }

    public function sendEmail(Request $request)
    {
        // Lógica para obtener los datos del formulario
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        // Envío del correo utilizando la clase MisCorreos
        Mail::to('jesusestudillo123@gmail.com')->send(new MisCorreos($name, $email, $phone, $message));

        // Redirigir o devolver una respuesta según sea necesario
    }

}



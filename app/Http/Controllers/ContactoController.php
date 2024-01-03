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

    public function store(Request $request)
    {
        $request->validate([
          'name'=> 'required',
          'telefono'=>'numeric',
          'mensaje'=>'required'
        ]);

        // Envío del correo utilizando la clase MisCorreos
        Mail::to('jesusestudillo123@gmail.com')->send(new MisCorreos($request->all()));
       
      
        toastify()->success('¡El correo se envío correctamente!', ['duration' => 5000]);
        

        return view('contacto');

    }

}



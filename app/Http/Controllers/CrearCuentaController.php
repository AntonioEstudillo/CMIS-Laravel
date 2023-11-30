<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;

class CrearCuentaController extends Controller
{
    public function index(){
        return view('auth.crearCuenta');
    }

    public function store(Request $request){

        $request->request->add(['username' => Str::slug($request->username)]);
        
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password'=> $request->password
        // ]);

        auth()->attempt($request->only('email','password'));

        
        return redirect()->route('servicios');
    }
}

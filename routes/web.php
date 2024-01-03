<?php

use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ServiciosController;
use App\Mail\MisCorreos;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('/acercaDe', [AcercaDeController::class, 'index'])->name('acercaDe');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store']);
Route::get('/galeria', [GaleriaController::class, 'index'])->name('galeria');

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('crear-cuenta',[CrearCuentaController::class, 'index'])->name('registrar');
Route::post('/crear-cuenta', [CrearCuentaController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


/**Route::get('/correo',function(){
     
     Mail::to('jesusestudillo123@gmail.com')
        ->send(new MisCorreos);
     
        return "Mensaje enviado";
    
})->name('correo');*/




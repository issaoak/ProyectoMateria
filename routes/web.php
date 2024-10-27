<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\BusquedaController;

Route::get('/', function () {
    return view('autenticacion.iniciar_sesion');
})->name('iniciar_sesion');

Route::get('/registro', [AutenticacionController::class, 'mostrarFormularioRegistro'])->name('registro');
Route::post('/registro', [AutenticacionController::class, 'registrarUsuario']);

Route::post('/iniciar_sesion', [AutenticacionController::class, 'iniciarSesion'])->name('iniciar_sesion.submit');

Route::get('/buscar', [BusquedaController::class, 'index'])->name('buscar');
Route::post('/buscar', [BusquedaController::class, 'buscar'])->name('buscar.submit');

Route::get('/perfil', [PerfilController::class, 'mostrar'])->name('perfil');

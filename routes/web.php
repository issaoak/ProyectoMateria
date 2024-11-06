<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\BusquedaController;

// Ruta para la página de inicio como la predeterminada
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Rutas de autenticación
Route::get('/registro', [AutenticacionController::class, 'mostrarFormularioRegistro'])->name('registro');
Route::post('/registro', [AutenticacionController::class, 'registrarUsuario']);
Route::post('/iniciar_sesion', [AutenticacionController::class, 'iniciarSesion'])->name('iniciar_sesion.submit');

// Ruta para la página de iniciar sesión
Route::get('/iniciar_sesion', function () {
    return view('autenticacion.iniciar_sesion');
})->name('iniciar_sesion');

// Rutas de búsqueda
Route::get('/buscar', [BusquedaController::class, 'index'])->name('buscar');
Route::post('/buscar', [BusquedaController::class, 'buscar'])->name('buscar.submit');

// Ruta para el perfil del usuario
Route::get('/perfil', [PerfilController::class, 'mostrar'])->name('perfil');

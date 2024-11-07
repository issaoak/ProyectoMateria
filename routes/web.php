<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\AdminController;


// Ruta para la página de inicio como la predeterminada
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Rutas de autenticación
Route::get('/registro', [AutenticacionController::class, 'mostrarFormularioRegistro'])->name('registro');
Route::post('/registro', [AutenticacionController::class, 'registrarUsuario']);
Route::post('/iniciar_sesion', [AutenticacionController::class, 'iniciarSesion'])->name('iniciar_sesion.submit');

// Ruta para la página de iniciar sesión
Route::post('/iniciar_sesion', [AutenticacionController::class, 'iniciarSesion'])->name('iniciar_sesion.submit');

// Ruta para la página de iniciar sesión
Route::get('/iniciar_sesion', function () {
    return view('autenticacion.iniciar_sesion');
})->name('iniciar_sesion');






// Rutas de búsqueda
Route::get('/buscar', [BusquedaController::class, 'index'])->name('buscar');
Route::post('/buscar', [BusquedaController::class, 'buscar'])->name('buscar.submit');

// Ruta para el perfil del usuario
Route::middleware('auth')->group(function () {
    Route::get('/perfil', [PerfilController::class, 'mostrar'])->name('perfil.mostrar');
});
Route::get('/perfil', [PerfilController::class, 'mostrar'])->name('perfil.mostrar');

Route::get('/login', [AutenticacionController::class, 'mostrarFormularioLogin'])->name('login');

// Ruta para confirmacion de correo y de telefono
Route::get('/confirmacioncorreo', [AutenticacionController::class, 'confirmacioncorreo'])->name('confirmacorreo');
Route::get('/confirmaciontelefono', [AutenticacionController::class, 'confirmaciontelefono'])->name('confirmaciontelefono');

//Ruta para cerrar sesion
Route::post('/logout', [AutenticacionController::class, 'logout'])->name('logout');

//Ruta para busqueda de hotel
Route::get('/busqueda_hoteles', [BusquedaController::class, 'busqueda_hoteles'])->name('busqueda_hoteles');

//Ruta para pagar el hotel
Route::get('/reserva_pagar', [BusquedaController::class, 'reserva_pagar'])->name('reserva_pagar');


//Ruta hotel seleccionado detalles no mover 
Route::get('/confirpagohotel', [BusquedaController::class, 'confirpagohotel'])->name('confirpagohotel');

//Ruta para resultado de busqueda de hotel



//Ruta para escoger habitacion

//Ruta para busqueda de vuelo


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/usuarios', [AdminController::class, 'gestionarUsuarios'])->name('admin.usuarios');
    Route::get('/admin/configuraciones', [AdminController::class, 'configuraciones'])->name('admin.configuraciones');
    Route::get('/admin/reportes', [AdminController::class, 'verReportes'])->name('admin.reportes');
});
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/usuarios', [AdminController::class, 'gestionarUsuarios'])->name('admin.usuarios');










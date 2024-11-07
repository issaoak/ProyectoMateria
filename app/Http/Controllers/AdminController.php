<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function gestionarUsuarios()
    {
        return view('admin.usuarios');
        // Lógica para gestionar usuarios
    }

    public function configuraciones()
    {
        // Lógica para configuraciones
    }

    public function verReportes()
    {
        // Lógica para ver reportes
    }
}

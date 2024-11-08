<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;


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

    public function vuelos(){
        return view('admin.vuelos');
        
    }
    
   

    public function verReportes()
    {
        // Lógica para ver reportes
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function index()
    {
       
        return view('busqueda.resultados');
    }

    public function buscar(Request $request)
    {
        
        return redirect()->route('buscar')->with('success', 'Resultados encontrados');
    }
}

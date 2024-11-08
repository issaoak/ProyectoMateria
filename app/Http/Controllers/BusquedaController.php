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
    //ruta busqueda hoteles
    public function busqueda_hoteles(){
        return view('/busqueda/busqueda_hoteles'); 
    }

    //ruta pagar reserva
    public function reserva_pagar(){
        return view('/busqueda/reserva_pagar');
    }

    //ruta confirmar pago hotel seleccionado no mover
    public function confirpagohotel(){
        return view('/busqueda/confirpagohotel');
        
    }

        
}

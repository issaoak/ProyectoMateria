<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
class PerfilController extends Controller
{
    public function mostrar()
    {
        $usuario = Auth::user(); // Obtiene el usuario autenticado
        return view('perfil.mostrar', compact('usuario'));
    }
}
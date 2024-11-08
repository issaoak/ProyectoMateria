<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutenticacionController extends Controller
{
    public function mostrarFormularioRegistro()
    {
        return view('autenticacion.registro');
    }

    public function registrarUsuario(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('iniciar_sesion')->with('success', 'Registro exitoso');
    }

    public function iniciarSesion(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $user = User::where('email', $email)->first();

    if ($user && Hash::check($password, $user->password)) {
        Auth::login($user); // Autentica manualmente al usuario
        \Log::info('Usuario autenticado manualmente: ' . $user->name . ', Rol: ' . $user->role);

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('perfil.mostrar');
        }
    } else {
        \Log::warning('Fallo en autenticación: Credenciales incorrectas');
        return back()->withErrors(['email' => 'Las credenciales no coinciden']);
    }
}

    

   

    //redirige a confirmar correo
    public function confirmacioncorreo()
    {
        return view('autenticacion.confirmacioncorreo');
    }

    //redirige a confirmar con telefono
    public function confirmaciontelefono()
    {
        //editado
        return view('autenticacion.confirmaciontelefono');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }   
    public function mostrarFormularioLogin()
    {
        return view('autenticacion.iniciar_sesion'); // Cambia 'autenticacion.iniciar_sesion' según la ubicación de tu vista
    }
}
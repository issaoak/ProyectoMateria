@extends('layouts.plantilla')

@section('titulo', 'Iniciar Sesión - Turista sin Maps')

@section('contenido')
<style>
    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }

    .login-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333;
    }

    .login-container input[type="email"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-container .btn-primary {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
    }

    .login-container a {
        display: block;
        text-align: center;
        margin-top: 10px;
        color: #007bff;
        text-decoration: none;
    }

    .login-container a:hover {
        text-decoration: underline;
    }
</style>

<div class="login-container">
    <h2>Bienvenido de nuevo</h2>
    <form action="{{ route('iniciar_sesion.submit') }}" method="POST">
        @csrf
        <label>Correo Electrónico:</label>
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <label>Contraseña:</label>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
    <a href="{{ route('registro') }}">¿Aún no tienes cuenta? Regístrate aquí</a>
</div>
@endsection

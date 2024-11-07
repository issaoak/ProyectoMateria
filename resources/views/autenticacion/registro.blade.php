
@extends('layouts.plantilla')

@section('titulo', 'Registro - Turista sin Maps')

@section('contenido')
<style>
    .register-container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .register-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    form input {
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    form a {
        text-align: center;
        color: #007bff;
        text-decoration: none;
        margin-top: 10px;
    }

    form a:hover {
        text-decoration: underline;
    }
    .register-container a:last-child {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #007bff;
        text-decoration: none;
    }

    .register-container a:last-child:hover {
        text-decoration: underline;
    }
</style>

<div class="register-container">
    <h2>Bienvenido, comencemos con tu registro</h2>
    <form action="{{ route('registro') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="text" name="surname" placeholder="Apellido" required>
        <input type="tel" name="phone" placeholder="Teléfono" required>
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required>
        <a href="{{ route('confirmacorreo') }}">Registrarse</a>
    </form>
    <a href="{{ route('iniciar_sesion') }}">¿Ya tienes una cuenta? Ingresa aquí</a>
</div>
@endsection

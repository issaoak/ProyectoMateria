
@extends('layouts.plantilla')

@section('titulo', 'Iniciar Sesión - Turista sin Maps')

@section('contenido')
<div class="login-container">
    <h2>Bienvenido de nuevo</h2>
    <form action="{{ route('iniciar_sesion.submit') }}" method="POST">
        @csrf
        <label>Correo Electrónico:</label>
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <label>Contraseña:</label>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Iniciar sesión</button>
    </form>
    <a href="{{ route('registro') }}">¿Aún no tienes cuenta? Regístrate aquí</a>
</div>
@endsection

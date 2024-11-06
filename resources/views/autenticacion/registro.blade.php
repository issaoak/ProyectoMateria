
@extends('layouts.plantilla')

@section('titulo', 'Registro - Turista sin Maps')

@section('contenido')
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
        <button type="submit">Registrarse</button>
    </form>
    <a href="{{ route('iniciar_sesion') }}">¿Ya tienes una cuenta? Ingresa aquí</a>
</div>
@endsection

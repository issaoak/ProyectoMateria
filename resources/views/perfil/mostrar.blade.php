@extends('layouts.plantilla')

@section('titulo', 'Perfil - Turista sin Maps')

@section('contenido')
<div class="profile-container">
    <div class="profile-info">
        <h1>
            <span class="profile-icon">👤</span> 
            {{ $usuario->name }} <!-- Muestra el nombre del usuario autenticado -->
            <span class="edit-icon-name">✎</span>
        </h1>
        <p>Entusiasta viajero y explorador que ha dedicado gran parte de su vida a descubrir nuevas culturas y destinos alrededor del mundo...</p>
        <button class="history-button">Historial de Reservación</button>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Cerrar Sesión</button>
        </form>
    </div>
</div>
@endsection

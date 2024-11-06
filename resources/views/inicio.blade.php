
@extends('layouts.plantilla')

@section('titulo', 'Inicio - Turista sin Maps')

@section('contenido')
<div class="text-center">
    <h2 class="my-4">Bienvenido a Turista sin Maps</h2>
    <p>Encuentra las mejores ofertas en vuelos y hoteles, y planifica tu próximo viaje con facilidad.</p>
    <div class="d-flex justify-content-center mt-4">
        
        <a href="#" class="btn btn-primary mx-2">Búsqueda de Hoteles</a>
        <a href="{{ route('buscar') }}" class="btn btn-secondary mx-2">Búsqueda de vuelos</a>
        <a href="{{ route('iniciar_sesion') }}" class="btn btn-outline-dark mx-2">Iniciar Sesión / Registrarse</a>
    </div>
</div>
@endsection

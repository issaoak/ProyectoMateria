@extends('layouts.plantilla')

@section('titulo', 'Inicio - Turista sin Maps')

@section('contenido')
<div class="text-start"> <!-- Cambiado a text-start para alinear a la izquierda -->
    <h2 class="display-4 my-4">¡Las mejores ofertas te esperan!</h2> <!-- Texto más grande -->
    <p class="lead">Encuentra vuelos y hoteles perfectos y planifica tu próximo viaje sin complicaciones.</p> <!-- Texto más pequeño -->
    
    <div class="d-flex justify-content-start mt-4"> <!-- Cambiado a justify-content-start para alinear los botones a la izquierda -->
        <a href="{{ route('busqueda_hoteles') }}" class="btn btn-primary mx-2">Búsqueda de Hoteles</a>
        <a href="{{ route('buscar') }}" class="btn btn-secondary mx-2">Búsqueda de vuelos</a>
    </div>

    <div class="search-bar mt-4">
        <input type="text" class="form-control" placeholder="Buscar..."> <!-- Añadido form-control de Bootstrap -->
    </div>

    <!-- Carrusel de Imágenes -->
    <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/Cabosan.jpg') }}" class="d-block w-100" alt="Imagen de Vuelo 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/hotel1.jpg') }}" class="d-block w-100" alt="Imagen de Hotel 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/vuelo2.jpg') }}" class="d-block w-100" alt="Imagen de Vuelo 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>
@endsection

<!-- resources/views/historialReservaciones.blade.php NUEVO
 -->
@extends('layouts.plantilla1')

@section('titulo', 'Historial de Reservaciones')

@section('contenido')
<div class="container mt-4">
    <h1 class="text-center mb-4">Historial de reservaciones</h1>

    <!-- Primer Elemento de la Reservación -->
    <div class="d-flex border p-3 mb-3">
        <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación Deluxe Stadia Suits" class="img-fluid me-3" style="width: 150px; height: auto;">
        <div class="flex-grow-1">
            <h4><a href="#" class="text-decoration-none">Habitación Deluxe Stadia Suits</a></h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis, justo at facilisis consectetur, nisl lorem bibendum elit, et ultricies sem justo nec felis.</p>
        </div>
        <div class="text-end">
            <h5 class="mb-2">$2109.60</h5>
            <div class="mb-2">
                <!-- Estrellas de Calificación -->
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-muted">&#9733;</span>
            </div>
            <button class="btn btn-primary">Agregar un comentario</button>
        </div>
    </div>

    <!-- Segundo Elemento de la Reservación -->
    <div class="d-flex border p-3 mb-3">
        <img src="{{ asset('images/habitacion2.jpg') }}" alt="Habitación VIP Stadia Suits" class="img-fluid me-3" style="width: 150px; height: auto;">
        <div class="flex-grow-1">
            <h4><a href="#" class="text-decoration-none">Habitación VIP Stadia Suits</a></h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis, justo at facilisis consectetur, nisl lorem bibendum elit, et ultricies sem justo nec felis.</p>
        </div>
        <div class="text-end">
            <h5 class="mb-2">$1730.60</h5>
            <div class="mb-2">
                <!-- Estrellas de Calificación -->
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
                <span class="text-warning">&#9733;</span>
            </div>
            <button class="btn btn-primary">Agregar un comentario</button>
        </div>
    </div>
</div>
@endsection

<!-- http://127.0.0.1:8000/historial-reservaciones -->
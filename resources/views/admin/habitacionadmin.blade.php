<!-- resources/views/inicioadmin.blade.php NUEVO-->
@extends('layouts.plantilla1')

@section('titulo', 'Vista Admin - Inicio')

@section('contenido')
<div class="container mt-4">
    <h1 class="text-center mb-4">Inicio</h1>
    
    <!-- Botón de referencia "Admin" -->
    <div class="text-end mb-3">
        <button class="btn btn-secondary" disabled>Admin</button>
    </div>

    <!-- Primer Elemento de la Reservación -->
    <div class="d-flex border p-3 mb-3">
        <img src="{{ asset('images/habitacion1.jpg') }}" alt="Habitación Deluxe Stadia Suits" class="img-fluid me-3" style="width: 150px; height: auto;">
        <div class="flex-grow-1">
            <h4><a href="#" class="text-decoration-none">Habitación Deluxe Stadia Suits</a></h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis, justo at facilisis consectetur, nisl lorem bibendum elit, et ultricies sem justo nec felis.</p>
        </div>
        <div class="text-end">
            <h5 class="mb-2">$2109.60</h5>
            <!-- Ícono de editar -->
            <a href="#" class="text-primary me-2"><i class="bi bi-pencil"></i></a>
            <div class="d-flex flex-column">
                <button class="btn btn-primary mb-2">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </div>
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
            <!-- Ícono de editar -->
            <a href="#" class="text-primary me-2"><i class="bi bi-pencil"></i></a>
            <div class="d-flex flex-column">
                <button class="btn btn-primary mb-2">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- http://127.0.0.1:8000/inicioadmin -->
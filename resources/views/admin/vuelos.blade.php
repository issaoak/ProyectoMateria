@extends('layouts.plantilla')

@section('titulo', 'Lista de Vuelos')

@section('contenido')
<div class="container my-4">
    <h2 class="mb-4">Lista de Vuelos</h2>

    <!-- Primer vuelo -->
    <div class="card mb-4">
        <div class="card-body d-flex align-items-center">
            <!-- Imagen de la aerolínea -->
            <div class="me-3" style="flex-shrink: 0; width: 100px; height: 100px;">
                <img src="{{ asset('images/Aeromexico.jpg') }}" alt="Logo Aerolínea" class="img-fluid" style="max-width: 100%; max-height: 100%; object-fit: cover;">
            </div>

            <!-- Información del vuelo -->
            <div class="flex-grow-1">
                <h5 class="card-title mb-0">QRO ⇔ TIJ</h5>
                <p class="text-muted">Vie., 7 feb. - Jue., 13 feb.</p>
            </div>

            <!-- Precio y botones -->
            <div class="text-end" style="min-width: 150px;">
                <h4 class="mb-2">$6432.90</h4>
                <button class="btn btn-sm btn-secondary me-2">Editar</button>
                <button class="btn btn-sm btn-danger">Eliminar</button>
            </div>
        </div>
    </div>

    <!-- Segundo vuelo -->
    <div class="card mb-4">
        <div class="card-body d-flex align-items-center">
            <!-- Imagen de la aerolínea -->
            <div class="me-3" style="flex-shrink: 0; width: 100px; height: 100px;">
                <img src="{{ asset('images/volaris.png') }}" alt="Logo Aerolínea" class="img-fluid" style="max-width: 100%; max-height: 100%; object-fit: cover;">
            </div>

            <!-- Información del vuelo -->
            <div class="flex-grow-1">
                <h5 class="card-title mb-0">QRO ⇔ CD. JUAREZ</h5>
                <p class="text-muted">Sáb., 15 feb. - Sáb., 8 mar.</p>
            </div>

            <!-- Precio y botones -->
            <div class="text-end" style="min-width: 150px;">
                <h4 class="mb-2">$5670.88</h4>
                <button class="btn btn-sm btn-secondary me-2">Editar</button>
                <button class="btn btn-sm btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection

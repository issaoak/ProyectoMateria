<!-- resources/views/vuelos.blade.php NUEVO-->
@extends('layouts.plantilla')

@section('titulo', 'Lista de Vuelos')

@section('contenido')
<div class="container my-4">
    <div class="row">
        <!-- Card de ejemplo para cada vuelo -->
        @foreach ($vuelos as $vuelo)
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <!-- Imagen de la aerolínea -->
                        <div class="me-3" style="flex-shrink: 0; width: 100px; height: 100px;">
                            <img src="{{ asset('images/' . $vuelo->logo) }}" alt="Logo Aerolínea" class="img-fluid" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                        </div>

                        <!-- Información del vuelo -->
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">{{ $vuelo->origen }} ⇔ {{ $vuelo->destino }}</h5>
                            <p class="text-muted">{{ \Carbon\Carbon::parse($vuelo->fecha_inicio)->format('D., d M.') }} - {{ \Carbon\Carbon::parse($vuelo->fecha_fin)->format('D., d M.') }}</p>
                        </div>

                        <!-- Precio y acciones -->
                        <div class="text-end" style="min-width: 150px;">
                            <h4 class="mb-2">${{ number_format($vuelo->precio, 2) }}</h4>
                            <div class="d-flex">
                                <a href="{{ route('vuelos.edit', $vuelo->id) }}" class="btn btn-sm btn-secondary me-2">Editar</a>
                                <form action="{{ route('vuelos.destroy', $vuelo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layouts.plantilla')

@section('titulo', 'Lista de Usuarios')

@section('contenido')
<div class="container mt-4">
    <div class="search-bar text-center mb-3">
        <input type="text" class="form-control" placeholder="Buscar...">
    </div>

    <div class="list-group">
        <div class="d-flex justify-content-between align-items-center list-group-item">
            <span><i class="bi bi-person-circle"></i> Mauricio Aleman Sosa</span>
            <div>
                <button class="btn btn-sm btn-primary">Editar</button>
                <button class="btn btn-sm btn-danger">Eliminar</button>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center list-group-item">
            <span><i class="bi bi-person-circle"></i> Alejandro Martínez</span>
            <div>
                <button class="btn btn-sm btn-primary">Editar</button>
                <button class="btn btn-sm btn-danger">Eliminar</button>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center list-group-item">
            <span><i class="bi bi-person-circle"></i> Sofía García</span>
            <div>
                <button class="btn btn-sm btn-primary">Editar</button>
                <button class="btn btn-sm btn-danger">Eliminar</button>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center list-group-item">
            <span><i class="bi bi-person-circle"></i> Carlos Hernández</span>
            <div>
                <button class="btn btn-sm btn-primary">Editar</button>
                <button class="btn btn-sm btn-danger">Eliminar</button>
            </div>
        </div>

        <!-- Continúa con más elementos similares -->
    </div>
</div>
@endsection

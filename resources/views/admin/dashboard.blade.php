@extends('layouts.plantilla')

@section('titulo', 'Panel de Administración')

@section('contenido')
<style>
    .admin-button {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.admin-button:hover {
    background-color: #0056b3;
}

.logout-button {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.logout-button:hover {
    background-color: #c82333;
}

</style>
<div class="admin-dashboard">
    <h1>Bienvenido al Panel de Administración</h1>
    <p>Aquí puedes gestionar usuarios, realizar búsquedas y administrar configuraciones.</p>
    
    <!-- Ejemplo de botones o enlaces de administración -->
    <div class="admin-options">
        <a href="{{ route('admin.usuarios') }}" class="admin-button">Gestionar Usuarios</a>
        <a href="{{ route('admin.vuelos') }}" class="admin-button">Editar Vuelos</a>
        <a href="{{ route('admin.hoteles') }}" class="admin-button">Editar Hoteles</a>
        <a href="{{ route('admin.habitaciones') }}" class="admin-button">Editar Habitacion</a>


        <form action="{{ route('logout') }}" method="POST" class="logout-form" style="margin-top: 20px;">
        @csrf
        <button type="submit" class="logout-button">Cerrar Sesión</button>
    </form>
    </div>
</div>
@endsection

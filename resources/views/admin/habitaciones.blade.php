@extends('layout.plantilla')

@section('titulo', 'Editar Habitación de Hotel')

@section('contenido')
    <div class="navbar">
        <div class="navbar-left">
            <a href="{{ route('inicio') }}">
                <img src="{{ asset('images/Logo.webp') }}" alt="Logo">
            </a>
            <p class="welcome-text">Tourist Without Maps</p>
        </div>
        <div class="navbar-right">
            @if (Auth::check())
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('images/Perfil.jpg') }}" alt="Perfil Admin" style="width: 60px; height: 60px;">
                    </a>
                @else
                    <a href="{{ route('perfil.mostrar') }}">
                        <img src="{{ asset('images/Perfil.jpg') }}" alt="Perfil Usuario" style="width: 60px; height: 60px;">
                    </a>
                @endif
            @else
                <a href="{{ route('iniciar_sesion') }}" class="btn btn-outline-dark" style="margin-left: 15px;">Iniciar Sesión / Registrarse</a>
            @endif
            <img src="{{ asset('images/Carrito.png') }}" alt="Carrito" class="cart-icon" style="width: 60px; height: 60px; margin-left: 15px;">
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="main-container">
        <div class="search-bar">
            <input type="text" placeholder="Buscar...">
        </div>

        <div class="room-container">
            <form action="{{ route('habitacion.actualizar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="room-image">
                    <label for="imagen">Actualizar imagen de la habitación:</label>
                    <input type="file" id="imagen" name="imagen" class="form-control">
                </div>
                <div class="room-details">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Nombre de la habitación:</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Ej. Habitación Deluxe" value="{{ old('titulo', 'Habitación Deluxe Stadia Suites') }}">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción de la habitación:</label>
                        <textarea id="descripcion" name="descripcion" class="form-control" rows="4" placeholder="Escriba una breve descripción">{{ old('descripcion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et turpis non dolor auctor gravida. Proin ac ligula id metus sodales faucibus.') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_habitacion" class="form-label">Tipo de habitación:</label>
                        <select id="tipo_habitacion" name="tipo_habitacion" class="form-control">
                            <option value="suite" {{ old('tipo_habitacion') == 'suite' ? 'selected' : '' }}>Suite</option>
                            <option value="deluxe" {{ old('tipo_habitacion') == 'deluxe' ? 'selected' : '' }}>Deluxe</option>
                            <option value="estándar" {{ old('tipo_habitacion') == 'estándar' ? 'selected' : '' }}>Estándar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio por noche:</label>
                        <input type="number" id="precio" name="precio" class="form-control" value="{{ old('precio', '2109.60') }}" step="0.01" placeholder="Ej. 2000.00">
                    </div>
                    <div class="mb-3">
                        <label for="disponibilidad" class="form-label">Disponibilidad:</label>
                        <input type="date" id="disponibilidad" name="disponibilidad" class="form-control" value="{{ old('disponibilidad') }}" style="width: 50%;">
                    </div>
                    <div class="update-button mt-4">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layout.plantilla')

@section('titulo', 'Reserva de Habitación')

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
            <div class="room-image">
                <img src="{{ asset('images/Habitacion.jpg') }}" alt="Habitación Deluxe" class="img-fluid">
            </div>
            <div class="room-details">
                <a href="#" class="room-title">Habitación Deluxe Stadia Suites</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et turpis non dolor auctor gravida. Proin ac ligula id metus sodales faucibus.</p>
                <div class="calendar-container">
                    <label for="calendar">Seleccione su fecha:</label>
                    <input type="date" id="calendar" class="form-control" style="width: 50%;">
                </div>
                <div class="price-container">
                    $2109.60
                </div>
                <div class="cancel-button">
                    <button class="btn btn-danger">Cancelar reserva</button>
                </div>
            </div>
        </div>
    </div>
@endsection

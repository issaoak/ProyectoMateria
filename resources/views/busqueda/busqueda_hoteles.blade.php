@extends('layouts.plantilla') <!-- Asume que tu plantilla principal está en un archivo llamado layout.blade.php -->

@section('titulo', 'Hoteles en Guadalajara')

@section('contenido')
<div class="container mt-5">
    <h2 class="text-center mb-4">Hoteles en Guadalajara, Escoge tu Favorito:</h2>
    
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Primer hotel -->
        <div class="col">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/Hilton.jpeg') }}" class="card-img-top" alt="Hotel 1">
                <div class="card-body">
                    <h5 class="card-title">Hotel Hilton</h5>
                    <p class="card-text">Dirección</p>
                    <p class="card-text"><strong>$400 la noche</strong></p>
                    <p class="card-text">Check in: 15:00</p>
                    <a href="{{ route('reserva_pagar') }}" class="btn btn-info btn-sm mb-2">Más información</a>
                    <form action="{{ route('confirpagohotel') }}" method="GET">
                        <button type="submit" class="btn btn-primary">Ir a Confirmación</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Segundo hotel -->
        <div class="col">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/Fiestainn.jpeg') }}" class="card-img-top" alt="Hotel 2">
                <div class="card-body">
                    <h5 class="card-title">Hotel Fiesta Inn</h5>
                    <p class="card-text">Dirección</p>
                    <p class="card-text"><strong>$400 la noche</strong></p>
                    <p class="card-text">Check in: 15:00</p>
                    <a href="{{ route('reserva_pagar') }}" class="btn btn-info btn-sm mb-2">Más información</a>
                    <form action="{{ route('confirpagohotel') }}" method="GET">
                        <button type="submit" class="btn btn-primary">Ir a Confirmación</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tercer hotel -->
        <div class="col">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/Expressinn.avif') }}" class="card-img-top" alt="Hotel 3">
                <div class="card-body">
                    <h5 class="card-title">Hotel Express In</h5>
                    <p class="card-text">Dirección</p>
                    <p class="card-text"><strong>$400 la noche</strong></p>
                    <p class="card-text">Check in: 15:00</p>
                    <a href="{{ route('reserva_pagar') }}" class="btn btn-info btn-sm mb-2">Más información</a>
                    <form action="{{ route('confirpagohotel') }}" method="GET">
                        <button type="submit" class="btn btn-primary">Ir a Confirmación</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Cuarto hotel -->
        <div class="col">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('images/Dumon.jpeg') }}" class="card-img-top" alt="Hotel 4">
                <div class="card-body">
                    <h5 class="card-title">Hotel Dumon</h5>
                    <p class="card-text">Dirección</p>
                    <p class="card-text"><strong>$400 la noche</strong></p>
                    <p class="card-text">Check in: 15:00</p>
                    <a href="{{ route('reserva_pagar') }}" class="btn btn-info btn-sm mb-2">Más información</a>
                    <form action="{{ route('confirpagohotel') }}" method="GET">
                        <button type="submit" class="btn btn-primary">Ir a Confirmación</button>
                    </form>
                    
                    <!-- <<button class="btn btn-primary btn-sm">Agregar al carrito</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

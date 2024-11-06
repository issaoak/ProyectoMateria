
@extends('layouts.plantilla')

@section('titulo', 'Resultados de Búsqueda - Turista sin Maps')

@section('contenido')
<div class="items-container">
    <div class="item">
        <img src="{{ asset('images/Guadalajara.jpeg') }}" alt="Guadalajara">
        <div class="item-info">
            <h4>De Querétaro a Guadalajara</h4>
            <p>VivaAerobus</p>
            <div class="price">$1,100</div>
            <div class="dates">De ida y vuelta | 4 Oct a 9 Oct</div>
            <button class="add-to-cart">Agregar al carrito</button>
        </div>
    </div>
    
</div>
@endsection

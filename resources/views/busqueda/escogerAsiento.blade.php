<!-- resources/views/escogerAsiento.blade.php NUEVO-->
@extends('layouts.plantilla1')

@section('titulo', 'Escoger Asiento')

@section('contenido')
<div class="container mt-4 text-center">
    <h1 class="mb-4">Vuelo a Guadalajara, Escoge tu asiento</h1>

    <!-- Indicadores de Asientos -->
    <div class="d-flex justify-content-center mb-3">
        <div class="me-3">
            <span class="badge" style="background-color: #28a745;">&nbsp;&nbsp;&nbsp;</span> Asiento disponible
        </div>
        <div class="me-3">
            <span class="badge" style="background-color: #ffc107;">&nbsp;&nbsp;&nbsp;</span> Asiento recomendable
        </div>
        <div>
            <span class="badge" style="background-color: #ffffff; border: 1px solid #ccc;">&nbsp;&nbsp;&nbsp;</span> Asiento ocupado
        </div>
    </div>

    <!-- Sección de Selección de Asientos -->
    <div class="seat-map d-flex justify-content-center flex-wrap" style="max-width: 600px; margin: 0 auto;">
        <!-- Filas de Asientos -->
        @for($row = 1; $row <= 5; $row++)
            <div class="d-flex justify-content-center mb-2">
                @foreach(['A', 'B', 'C', 'D', 'E', 'F'] as $seat)
                    <div class="seat me-2" data-seat="{{ $row . $seat }}" 
                         style="width: 40px; height: 40px; background-color: #28a745; border: 1px solid #ccc; cursor: pointer;">
                        {{ $row . $seat }}
                    </div>
                @endforeach
            </div>
        @endfor
    </div>

    <!-- Botón para Confirmar la Selección -->
    <div class="mt-4">
        <button class="btn btn-primary" id="confirmSeat">Escoger asiento</button>
    </div>

    <!-- Mostrar Asiento Seleccionado -->
    <div class="mt-3" id="selectedSeat">
        <strong>Asiento seleccionado:</strong> Ninguno
    </div>
</div>

<!-- Script para Interactividad -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let selectedSeat = null;

        // Manejar la selección de asientos
        document.querySelectorAll('.seat').forEach(function(seat) {
            seat.addEventListener('click', function() {
                // Deseleccionar el asiento anterior
                if (selectedSeat) {
                    selectedSeat.style.backgroundColor = '#28a745';
                }
                
                // Seleccionar el asiento actual
                selectedSeat = this;
                this.style.backgroundColor = '#ffc107'; // Color de selección

                // Actualizar el texto del asiento seleccionado
                document.getElementById('selectedSeat').innerText = "Asiento seleccionado: " + this.dataset.seat;
            });
        });

        // Manejar la confirmación de asiento
        document.getElementById('confirmSeat').addEventListener('click', function() {
            if (selectedSeat) {
                alert("Has seleccionado el asiento: " + selectedSeat.dataset.seat);
            } else {
                alert("Por favor, selecciona un asiento.");
            }
        });
    });
</script>
@endsection

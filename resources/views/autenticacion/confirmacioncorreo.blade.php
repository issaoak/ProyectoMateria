<!-- resources/views/perfil.blade.php -->
@extends('layouts.plantilla')

@section('titulo', 'Perfil - Turista sin Maps')

@section('contenido')
    <div class="container">
        <h2>Por favor, confirma tu dirección de correo electrónico:</h2>
        <p>Enviamos un código de verificación a user1@gmail.com</p>
        <p>Escribe el código de verificación:</p>

        <!-- Código de verificación con campos individuales -->
        <div class="input-code">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
            <input type="text" maxlength="1">
        </div>

        <!-- Botón para confirmar -->
        <button class="btn btn-primary btn-confirm">Confirmar</button>

        <!-- cambiar a la ruta del telefono -->
        <a href="{{ route('confirmaciontelefono') }}">Prueba con tu número de teléfono</a>

    </div>

    <style>
        /* Estilos específicos de esta página */
        body {
            background-color: #f5f5f5;
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin-top: 20px;
        }
        .input-code {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        .input-code input {
            width: 50px;
            height: 50px;
            font-size: 24px;
            text-align: center;
            border: 2px solid #ddd;
            border-radius: 5px;
        }
        .btn-confirm {
            margin-top: 20px;
            font-size: 18px;
            padding: 10px 20px;
        }
        .link {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
    </style>

    <script>
        document.querySelectorAll('.input-code input').forEach((input, index, inputs) => {
            input.addEventListener('input', (e) => {
                if (e.target.value.length === 1 && inputs[index + 1]) {
                    inputs[index + 1].focus();
                }
            });
        });
    </script>
@endsection

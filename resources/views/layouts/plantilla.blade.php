<!-- resources/views/layouts/plantilla.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet"> 


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .navbar {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #ddd;
            border-bottom: 1px solid #ccc;
        }

        .navbar img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .navbar input[type="text"] {
            flex: 1;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin: 0 15px;
        }

        .cart-icon {
            width: 24px;
            height: 24px;
        }
    </style>
</head>
<body>
    
    <div class="navbar">
        <a href="{{ route('inicio') }}">
            <img src="{{ asset('images/home_icon.png') }}" alt="Inicio" class="home-icon"> 
        </a>
        <a href="{{ route('perfil') }}">
            <img src="{{ asset('images/Perfil.jpg') }}" alt="Perfil">
        </a>
        <input type="text" placeholder="Buscar...">
        <img src="{{ asset('images/Carrito.png') }}" alt="Carrito" class="cart-icon">
    </div>

    @yield('contenido')
</body>
</html>

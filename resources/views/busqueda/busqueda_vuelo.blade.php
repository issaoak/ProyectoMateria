<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de vuelos</title>
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
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }

        .cart-icon {
            width: 60px;
            height: 60px;
        }

        .container {
            text-align: center;
            margin-top: 20px;
        }

        .search-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            max-width: 300px;
            text-align: center;
        }

        .calendar, .seat-select {
            max-width: 300px;
            margin: 0 auto;
        }

        .btn-search {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-search:hover {
            background-color: #0056b3;
        }

        .link-hotels {
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .link-hotels:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('inicio') }}">
            <img src="{{ asset('images/Logo.webp') }}" alt="Inicio" class="home-icon"> 
        </a>
        <a href="{{ route('perfil') }}">
            <img src="{{ asset('images/Perfil.jpg') }}" alt="Perfil">
        </a>
        <input type="text" placeholder="Buscar destinos" class="form-control">
        <img src="{{ asset('images/Carrito.png') }}" alt="Carrito" class="cart-icon">
    </div>

    <div class="container">
        <h2>Búsqueda de vuelos</h2>
        
        <div class="search-section">
            <input type="text" placeholder="¿A dónde quieres viajar?" class="form-control">
            
            <div>
                <label for="fecha" class="form-label">Fechas:</label>
                <input type="date" id="fecha" class="form-control" style="max-width: 200px;">
            </div>

            <div class="seat-select">
                <label for="asientos" class="form-label">Número de asientos:</label>
                <select id="asientos" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6+</option>
                </select>
            </div>

            <a href="#" class="btn-search">Buscar vuelo</a>

            <a href="{{ route('hoteles') }}" class="link-hotels">¿Quieres buscar Hoteles?</a>
        </div>
    </div>
</body>
</html>

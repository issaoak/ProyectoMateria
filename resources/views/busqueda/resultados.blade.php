<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda - Turista sin Maps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .navbar {
            display: flex;
            align-items: center;
            background-color: #ddd;
            padding: 10px;
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

        .navbar .cart-icon {
            width: 24px;
            height: 24px;
        }

        .items-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            margin-top: 20px;
        }

        .item {
            width: calc(50% - 10px); /* Ajusta cada tarjeta para ocupar el 50% del contenedor */
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            display: flex;
            align-items: center;
            padding: 10px;
            box-sizing: border-box;
        }

        .item img {
            width: 100px;
            height: 100px;
            border-radius: 5px;
            margin-right: 15px;
            object-fit: cover;
        }

        .item-info {
            flex-grow: 1;
        }

        .item-info h4 {
            font-size: 16px;
            margin: 5px 0;
            font-weight: bold;
        }

        .item-info p {
            font-size: 14px;
            color: #666;
            margin: 5px 0;
        }

        .price {
            font-size: 16px;
            color: #333;
            font-weight: bold;
            margin-top: 5px;
        }

        .dates {
            font-size: 14px;
            color: #666;
        }

        .add-to-cart {
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            width: fit-content;
        }

        .add-to-cart:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
    <a href="{{ route('perfil') }}">
    <img src="{{ asset('images/Perfil.jpg') }}" alt="Perfil">
    </a>

        <input type="text" placeholder="Buscar...">
        <img src="{{ asset('images/cart_icon.png') }}" alt="Carrito" class="cart-icon">
    </div>

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

        <div class="item">
            <img src="{{ asset('images/Monterrey.jpg') }}" alt="Guadalajara">
            <div class="item-info">
                <h4>De Querétaro a Monterrey</h4>
                <p>VivaAerobus</p>
                <div class="price">$1,100</div>
                <div class="dates">De ida y vuelta | 3 Sep a 4 Oct</div>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('images/Ciudadmexico.webp') }}" alt="Guadalajara">
            <div class="item-info">
                <h4>De Querétaro a Ciudad de México</h4>
                <p>Volaris</p>
                <div class="price">$1,199</div>
                <div class="dates">De ida y vuelta | 12 Oct a 16 Oct</div>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('images/Cabo.jpeg') }}" alt="Guadalajara">
            <div class="item-info">
                <h4>De Querétaro a Cabo San Lucas</h4>
                <p>VivaAerobus</p>
                <div class="price">$1,100</div>
                <div class="dates">De ida y vuelta | 4 Oct a 9 Oct</div>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>
        </div>
    </div>
</body>
</html>

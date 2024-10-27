<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Turista sin Maps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        /* Barra de navegación */
        .navbar {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            background-color: #ddd;
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

        /* Contenedor de perfil */
        .profile-container {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Imagen de perfil grande */
        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 100px;
            color: #888;
            position: relative;
        }

        .edit-icon {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 16px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }

        /* Información del perfil */
        .profile-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .profile-info h1 {
            font-size: 24px;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-info h1 .edit-icon-name {
            font-size: 16px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }

        .profile-info p {
            font-size: 16px;
            color: #666;
            margin: 10px 0 20px;
            line-height: 1.5;
        }

        /* Botón de historial de reservación */
        .history-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: fit-content;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="{{ asset('images/home_icon.png') }}" alt="Inicio">
        <input type="text" placeholder="Buscar...">
        <img src="{{ asset('images/cart_icon.png') }}" alt="Carrito" class="cart-icon">
    </div>

    <div class="profile-container">
        <div class="profile-image">
            👤
            <span class="edit-icon">✎</span>
            <p style="text-align: center; margin-top: 10px;"></p>
        </div>
        <div class="profile-info">
            <h1>
                Mauricio Aleman Sosa
                <span class="edit-icon-name">✎</span>
            </h1>
            <p>Entusiasta viajero y explorador que ha dedicado gran parte de su vida a descubrir nuevas culturas y destinos alrededor del mundo. Con una pasión innata por el turismo y la aventura, Mauricio ha desarrollado un profundo conocimiento en la planificación de viajes, optimizando cada experiencia para aprovechar al máximo cada lugar visitad.</p>
            <button class="history-button">Historial de Reservación</button>
        </div>
    </div>
</body>
</html>

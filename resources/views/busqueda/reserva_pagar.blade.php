<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Reserva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }
        header {
            background-color: #333;
            padding: 15px;
            color: #fff;
            text-align: center;
            font-size: 20px;
        }
        .container {
            padding: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
        .card-info {
            flex: 1;
            margin-left: 20px;
        }
        .card-info h3 {
            margin: 0 0 10px;
            color: #333;
        }
        .card-info p {
            margin: 5px 0;
            color: #666;
        }
        .price {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .payment-options {
            display: flex;
            gap: 5px;
            margin-top: 10px;
        }
        .payment-options img {
            width: 30px;
        }
        .btn-pagar {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-pagar:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<header>
    Resumen de Reserva
</header>

<div class="container">
    <div class="card">
        <img src="https://via.placeholder.com/150" alt="Imagen de la habitación">
        <div class="card-info">
            <h3>Habitación Deluxe Stadia Suite</h3>
            <p>Descripción breve de la habitación con todos sus servicios y comodidades.</p>
            <p>Check-in: 3:00 PM | Check-out: 12:00 PM</p>
            <p>Capacidad: 2 adultos, 1 niño</p>
            <div class="price">$2109.60 MXN</div>
            <div class="payment-options">
                <img src="https://via.placeholder.com/30?text=VISA" alt="VISA">
                <img src="https://via.placeholder.com/30?text=PayPal" alt="PayPal">
                <img src="https://via.placeholder.com/30?text=MC" alt="MasterCard">
                <img src="https://via.placeholder.com/30?text=AMEX" alt="American Express">
            </div>
            <button class="btn-pagar">Pagar</button>
        </div>
    </div>
</div>

</body>
</html>

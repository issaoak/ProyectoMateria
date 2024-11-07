<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Habitación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css" rel="stylesheet">
    <style>
        .room-detail-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .room-image-carousel {
            width: 100%;
            max-width: 400px;
            display: flex;
            align-items: center;
        }
        .room-image-carousel img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .room-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .room-price {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .payment-methods img {
            width: 40px;
            margin-right: 10px;
        }
        .confirm-button {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Detalle de Habitación</h1>
            <input type="text" placeholder="Buscar..." class="form-control w-25">
        </div>

        <div class="room-detail-container">
            <!-- Carrusel de imágenes -->
            <div class="room-image-carousel">
                <button onclick="previousImage()">&#x276E;</button>
                <img id="roomImage" src="https://via.placeholder.com/400" alt="Imagen de la habitación">
                <button onclick="nextImage()">&#x276F;</button>
            </div>

            <!-- Información de la habitación -->
            <div class="room-info">
                <h3><a href="#">Habitación Deluxe Stadia Suites</a></h3>
                <p>
                    Descripción detallada de la habitación. Incluye comodidades, vista y características especiales.
                </p>

                <!-- Calendario de selección de fechas -->
                <div class="mb-3">
                    <label for="calendar" class="form-label">Seleccione su fecha de estadía:</label>
                    <input type="text" id="calendar" class="form-control">
                </div>

                <!-- Precio y métodos de pago -->
                <div class="room-price">$2109.60</div>
                <div class="payment-methods">
                    <img src="https://via.placeholder.com/40x20?text=VISA" alt="Visa">
                    <img src="https://via.placeholder.com/40x20?text=PayPal" alt="PayPal">
                    <img src="https://via.placeholder.com/40x20?text=Mastercard" alt="Mastercard">
                    <img src="https://via.placeholder.com/40x20?text=Amex" alt="Amex">
                </div>
                <p>Información adicional de pago y términos.</p>

                <!-- Botón de confirmación de pago -->
                <button class="btn btn-primary confirm-button">Confirmar Pago</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
    <script>
        // Función para inicializar el calendario
        flatpickr("#calendar", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today"
        });

        // Simulación de un carrusel de imágenes
        const images = [
            "https://via.placeholder.com/400",
            "https://via.placeholder.com/400?text=Imagen+2",
            "https://via.placeholder.com/400?text=Imagen+3"
        ];
        let currentImageIndex = 0;

        function updateImage() {
            document.getElementById("roomImage").src = images[currentImageIndex];
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex > 0) ? currentImageIndex - 1 : images.length - 1;
            updateImage();
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex < images.length - 1) ? currentImageIndex + 1 : 0;
            updateImage();
        }
    </script>
</body>
</html>

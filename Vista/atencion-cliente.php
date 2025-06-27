<?php
session_start();
require_once '../Modelo/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atención al Cliente - Ranti</title>
    <link rel="stylesheet" href="../Vista/Style/atencion-cliente.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include('../Vista/navbar.php'); ?>

    <main class="atencion-container">
        <!-- Banner superior -->
        <section class="atencion-banner">
            <div class="banner-content">
                <h1>Atención al Cliente</h1>
                <p>Estamos aquí para ayudarte en lo que necesites</p>
            </div>
        </section>

        <!-- Tarjetas de servicios -->
        <section class="servicios-grid">
            <!-- Contacto -->
            <div class="servicio-card">
                <div class="servicio-img">
                    <img src="../Vista/Complementos/imgs/atencion-contacto.jpg" alt="Contacto">
                </div>
                <div class="servicio-content">
                    <h2><i class="fas fa-headset"></i> Contacto</h2>
                    <p>Comunícate directamente con nuestro equipo de atención al cliente</p>
                    <ul class="contacto-info">
                        <li><i class="fas fa-phone"></i> (01) 123-4567</li>
                        <li><i class="fas fa-whatsapp"></i> +51 987 654 321</li>
                        <li><i class="fas fa-envelope"></i> atencion@ranti.com</li>
                        <li><i class="fas fa-clock"></i> Lunes a Sábado: 8am - 8pm</li>
                    </ul>
                    <a href="contacto.php" class="servicio-btn">Contáctanos <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <!-- Preguntas frecuentes -->
            <div class="servicio-card">
                <div class="servicio-img">
                    <img src="../Vista/Complementos/imgs/atencion-faq.jpg" alt="Preguntas Frecuentes">
                </div>
                <div class="servicio-content">
                    <h2><i class="fas fa-question-circle"></i> Preguntas Frecuentes</h2>
                    <p>Encuentra respuestas rápidas a las preguntas más comunes</p>
                    <div class="faq-preview">
                        <div class="faq-item">
                            <h3>¿Cómo realizo un pedido?</h3>
                            <p>Selecciona tus productos, ve al carrito y completa tus datos.</p>
                        </div>
                        <div class="faq-item">
                            <h3>¿Cuáles son los métodos de pago?</h3>
                            <p>Aceptamos tarjetas, transferencias y PayPal.</p>
                        </div>
                    </div>
                    <a href="preguntas-frecuentes.php" class="servicio-btn">Ver todas <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <!-- Devoluciones -->
            <div class="servicio-card">
                <div class="servicio-img">
                    <img src="../Vista/Complementos/imgs/atencion-devoluciones.jpg" alt="Devoluciones">
                </div>
                <div class="servicio-content">
                    <h2><i class="fas fa-exchange-alt"></i> Devoluciones</h2>
                    <p>Proceso fácil y rápido para devoluciones o cambios</p>
                    <ul class="devoluciones-info">
                        <li><i class="fas fa-check-circle"></i> 30 días para devoluciones</li>
                        <li><i class="fas fa-box"></i> Producto en empaque original</li>
                        <li><i class="fas fa-receipt"></i> Recibo o comprobante</li>
                        <li><i class="fas fa-truck"></i> Recojo a domicilio disponible</li>
                    </ul>
                    <a href="devoluciones.php" class="servicio-btn">Conocer más <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <!-- Garantías -->
            <div class="servicio-card">
                <div class="servicio-img">
                    <img src="../Vista/Complementos/imgs/atencion-garantias.jpg" alt="Garantías">
                </div>
                <div class="servicio-content">
                    <h2><i class="fas fa-shield-alt"></i> Garantías</h2>
                    <p>Protección para tus productos según las condiciones del fabricante</p>
                    <div class="garantias-info">
                        <div class="garantia-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h3>Garantía estándar</h3>
                                <p>1 año en todos nuestros productos</p>
                            </div>
                        </div>
                        <div class="garantia-item">
                            <i class="fas fa-star"></i>
                            <div>
                                <h3>Garantía extendida</h3>
                                <p>Disponible para productos seleccionados</p>
                            </div>
                        </div>
                    </div>
                    <a href="garantias.php" class="servicio-btn">Detalles <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </section>

    </main>

    <?php include('../Vista/footer.php'); ?>

    <script>
    // Puedes añadir interacciones aquí si es necesario
    </script>
</body>
</html>
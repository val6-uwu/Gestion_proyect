<?php
session_start();
require_once '../Modelo/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas - Ranti</title>
    <link rel="stylesheet" href="../Vista/Style/politicas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../Vista/Complementos/imgs/banner-politicas.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <?php include('../Vista/navbar.php'); ?>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="banner-content">
            <h1>Nuestras Políticas</h1>
            <p>Conoce los términos que rigen nuestra relación con los clientes</p>
        </div>
    </section>

    <!-- Sección principal de políticas -->
    <main class="politicas-container">
        <!-- Tarjetas de políticas -->
        <div class="politicas-grid">
            <!-- Términos y Condiciones -->
            <div class="politica-card">
                <div class="politica-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h2>Términos y Condiciones</h2>
                <p>Documento legal que establece los derechos y obligaciones entre Ranti y nuestros clientes.</p>
                <ul class="politica-highlights">
                    <li><i class="fas fa-check-circle"></i> Uso del sitio web</li>
                    <li><i class="fas fa-check-circle"></i> Proceso de compra</li>
                    <li><i class="fas fa-check-circle"></i> Derechos del consumidor</li>
                </ul>
                <a href="terminos-condiciones.php" class="politica-btn">Leer completo <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Política de Privacidad -->
            <div class="politica-card">
                <div class="politica-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h2>Política de Privacidad</h2>
                <p>Cómo protegemos y utilizamos la información personal que nos proporcionas.</p>
                <ul class="politica-highlights">
                    <li><i class="fas fa-check-circle"></i> Protección de datos</li>
                    <li><i class="fas fa-check-circle"></i> Uso de cookies</li>
                    <li><i class="fas fa-check-circle"></i> Derechos ARCO</li>
                </ul>
                <a href="privacidad.php" class="politica-btn">Leer completo <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Política de Envíos -->
            <div class="politica-card">
                <div class="politica-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h2>Política de Envíos</h2>
                <p>Toda la información sobre plazos, costos y cobertura de nuestros envíos.</p>
                <ul class="politica-highlights">
                    <li><i class="fas fa-check-circle"></i> Tiempos de entrega</li>
                    <li><i class="fas fa-check-circle"></i> Zonas de cobertura</li>
                    <li><i class="fas fa-check-circle"></i> Seguimiento de pedidos</li>
                </ul>
                <a href="envios.php" class="politica-btn">Leer completo <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Métodos de Pago -->
            <div class="politica-card">
                <div class="politica-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h2>Métodos de Pago</h2>
                <p>Opciones seguras para realizar tus pagos y políticas relacionadas.</p>
                <ul class="politica-highlights">
                    <li><i class="fas fa-check-circle"></i> Tarjetas aceptadas</li>
                    <li><i class="fas fa-check-circle"></i> Pago contra entrega</li>
                    <li><i class="fas fa-check-circle"></i> Seguridad en pagos</li>
                </ul>
                <a href="metodos-pago.php" class="politica-btn">Leer completo <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Sección de preguntas frecuentes -->
        <section class="faq-section">
            <h2><i class="fas fa-question-circle"></i> Preguntas Frecuentes sobre Políticas</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question">
                        ¿Puedo devolver un producto si no estoy satisfecho?
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Sí, aceptamos devoluciones dentro de los 15 días posteriores a la recepción del producto, siempre que esté en su empaque original y con todos sus accesorios. Consulta nuestra política de devoluciones para más detalles.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        ¿Cómo protegen mis datos personales?
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Utilizamos cifrado SSL para todas las transacciones y no compartimos tu información con terceros sin tu consentimiento. Todos los datos se almacenan en servidores seguros.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        ¿Qué métodos de pago son más seguros?
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>Todos nuestros métodos de pago son seguros. Las transacciones con tarjeta se procesan a través de pasarelas de pago certificadas PCI DSS. También ofrecemos pagos a través de PayPal para mayor seguridad.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('../Vista/footer.php'); ?>

    <script>
    // Script para el acordeón de preguntas frecuentes
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('i');
                
                // Cerrar otras respuestas
                document.querySelectorAll('.faq-answer').forEach(item => {
                    if (item !== answer && item.classList.contains('active')) {
                        item.classList.remove('active');
                        item.previousElementSibling.querySelector('i').classList.replace('fa-chevron-up', 'fa-chevron-down');
                    }
                });
                
                // Alternar la respuesta actual
                answer.classList.toggle('active');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });
        });
    });
    </script>
</body>
</html>
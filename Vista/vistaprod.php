<?php
session_start();
require_once '../Modelo/conexion.php';
// Validar ID del producto
$productoId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if(!$productoId || $productoId <= 0) {
    header("Location: index.php");
    exit();
}
$conexion = new Conexion();
$producto = $conexion->getProductoById($productoId);

if(!$producto) {
    header("Location: index.php");
    exit();
}
$productosRelacionados = $conexion->getProductosRelacionados(
    $producto['categoria'], 
    $producto['id'],
    4
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($producto['nombre']) ?> - Ranti</title>
    <link rel="stylesheet" href="../Vista/Style/vistaprod.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include('../Vista/navbar.php'); ?>

    <main class="producto-container">
        <div class="producto-grid">
            <!-- Columna izquierda - Imagen del producto -->
            <div class="producto-imagen-container">
                <img src="<?= htmlspecialchars($producto['imagen_url']) ?>" 
                     alt="<?= htmlspecialchars($producto['nombre']) ?>"
                     class="producto-imagen">
            </div>
            
            <!-- Columna derecha - Información del producto -->
            <div class="producto-info-container">
                <h1 class="producto-nombre"><?= htmlspecialchars($producto['nombre']) ?></h1>
                <p class="producto-precio">S/ <?= number_format($producto['precio'], 2) ?></p>
                
                <div class="producto-meta">
                    <p><i class="fas fa-check-circle"></i> <strong>Saldo:</strong> <?= htmlspecialchars($producto['variante'] ?? 'Natural') ?></p>
                    <p><i class="fas fa-box"></i> <strong>Presentación:</strong> <?= htmlspecialchars($producto['presentacion'] ?? '12 unidades') ?></p>
                </div>
                
                <div class="producto-acciones">
                    <div class="quantity-selector">
                        <button class="quantity-btn minus"><i class="fas fa-minus"></i></button>
                        <input type="number" value="1" min="1" max="<?= $producto['stock'] ?? 1 ?>" class="quantity-input">
                        <button class="quantity-btn plus"><i class="fas fa-plus"></i></button>
                    </div>
                    
                    <button class="add-to-cart-btn" <?= (!isset($producto['stock']) || $producto['stock'] <= 0 ? 'disabled' : '') ?>>
                        <i class="fas fa-shopping-cart"></i> Añadir al carrito
                    </button>
                </div>
                
                <div class="envio-info">
                    <p><i class="fas fa-truck"></i> Envío gratis por compras mayores a S/ 1000</p>
                    <a href="#" class="envio-link">Conoce los tiempos y formas de envío <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Sección de características (debajo de las dos columnas) -->
        <div class="producto-caracteristicas">
            <h2>Características del producto</h2>
            <div class="caracteristicas-grid">
                <div class="caracteristica-item">
                    <h3><i class="fas fa-tag"></i> Marca</h3>
                    <p><?= htmlspecialchars($producto['marca'] ?? 'El churre') ?></p>
                </div>
                <div class="caracteristica-item">
                    <h3><i class="fas fa-align-left"></i> Descripción</h3>
                    <p><?= nl2br(htmlspecialchars($producto['descripcion'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua')) ?></p>
                </div>
            </div>
        </div>
        
        <!-- Resto de las secciones -->
        <div class="producto-opiniones">
            <h2>Opiniones del producto</h2>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <span class="rating-value">5.0</span>
                <span class="rating-count">(0 calificaciones)</span>
            </div>
        </div>

        <div class="medios-pago">
            <h2>Medios de pago</h2>
            <div class="pago-info">
                <p><i class="fas fa-credit-card"></i> Tarjetas de crédito y débito</p>
                <p><i class="fas fa-percentage"></i> Cuotas sin interés con bancos seleccionados</p>
            </div>
            <div class="tarjetas">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
                <i class="fab fa-cc-paypal"></i>
            </div>
        </div>

        <?php if(!empty($productosRelacionados)): ?>
        <div class="productos-recomendados">
            <h2>Productos recomendados</h2>
            <div class="recomendados-grid">
                <?php foreach($productosRelacionados as $relacionado): ?>
                <a href="vistaprod.php?id=<?= $relacionado['id'] ?>" class="producto-card">
                    <div class="producto-imagen-sugerencia">
                        <img src="<?= htmlspecialchars($producto['imagen_url']) ?>" 
                        alt="<?= htmlspecialchars($producto['nombre']) ?>"
                        class="sugerencia-imagen">
                    </div>
                    <h3><?= htmlspecialchars($relacionado['nombre']) ?></h3>
                    <p class="precio">S/ <?= number_format($relacionado['precio'], 2) ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

    </main>

    <?php include('../Vista/footer.php'); ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Selector de cantidad
        const minusBtn = document.querySelector('.quantity-btn.minus');
        const plusBtn = document.querySelector('.quantity-btn.plus');
        const quantityInput = document.querySelector('.quantity-input');
        const addToCartBtn = document.querySelector('.add-to-cart-btn');
        
        // Manejar clic en botón menos
        if(minusBtn) {
            minusBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                if(value > 1) {
                    quantityInput.value = value - 1;
                }
            });
        }
        
        // Manejar clic en botón más
        if(plusBtn) {
            plusBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                const max = parseInt(quantityInput.max);
                if(value < max) {
                    quantityInput.value = value + 1;
                }
            });
        }
        
        // Manejar añadir al carrito
        if(addToCartBtn) {
            addToCartBtn.addEventListener('click', function() {
                const productId = <?= $producto['id'] ?>;
                const quantity = parseInt(quantityInput.value);
                
                // Aquí iría la lógica AJAX para añadir al carrito
                console.log(`Añadiendo ${quantity} unidades del producto ${productId} al carrito`);
                
                // Feedback visual
                const originalText = addToCartBtn.innerHTML;
                addToCartBtn.innerHTML = '<i class="fas fa-check"></i> Añadido';
                addToCartBtn.style.backgroundColor = '#4CAF50';
                
                setTimeout(function() {
                    addToCartBtn.innerHTML = originalText;
                    addToCartBtn.style.backgroundColor = '';
                }, 2000);
            });
        }
    });
    </script>
</body>
</html>
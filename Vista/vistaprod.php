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

// Si el producto no existe, redirigir
if(!$producto) {
    header("Location: index.php");
    exit();
}

// Obtener productos relacionados
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

    <main class="vistaprod-container">
        <div class="vistaprod-main">
            <div class="vistaprod-gallery">
                <div class="vistaprod-main-img">
                    <img src="<?= htmlspecialchars($producto['imagen_url']) ?>" 
                         alt="<?= htmlspecialchars($producto['nombre']) ?>">
                </div>
                <!-- Puedes agregar miniaturas aquí si tienes más imágenes -->
            </div>
            
            <div class="vistaprod-details">
                <h1><?= htmlspecialchars($producto['nombre']) ?></h1>
                
                <div class="vistaprod-meta">
                    <span class="vistaprod-category">
                        <?= htmlspecialchars($producto['categoria_nombre']) ?>
                        <?php if(isset($producto['subcategoria_nombre'])): ?>
                        / <?= htmlspecialchars($producto['subcategoria_nombre']) ?>
                        <?php endif; ?>
                    </span>
                    
                    <div class="vistaprod-rating">
                        <span class="stars">★★★★★</span>
                        <span class="review-count">(0 reseñas)</span>
                    </div>
                </div>
                
                <p class="vistaprod-price">S/ <?= number_format($producto['precio'], 2) ?></p>
                
                <?php if(isset($producto['stock']) && $producto['stock'] > 0): ?>
                <p class="vistaprod-stock in-stock">Disponible (<?= $producto['stock'] ?> unidades)</p>
                <?php else: ?>
                <p class="vistaprod-stock out-stock">Agotado</p>
                <?php endif; ?>
                
                <div class="vistaprod-description">
                    <h3>Descripción</h3>
                    <p><?= nl2br(htmlspecialchars($producto['descripcion'] ?? 'Sin descripción disponible')) ?></p>
                </div>
                
                <div class="vistaprod-actions">
                    <div class="quantity-selector">
                        <button class="quantity-btn minus"><i class="fas fa-minus"></i></button>
                        <input type="number" value="1" min="1" max="<?= $producto['stock'] ?? 1 ?>" class="quantity-input">
                        <button class="quantity-btn plus"><i class="fas fa-plus"></i></button>
                    </div>
                    
                    <button class="add-to-cart-btn" <?= (!isset($producto['stock']) || $producto['stock'] <= 0 ? 'disabled' : '') ?>>
                        <i class="fas fa-shopping-cart"></i> Añadir al carrito
                    </button>
                </div>
                
                <div class="vistaprod-additional-info">
                    <!-- Puedes agregar más información del producto aquí -->
                </div>
            </div>
        </div>
        
        <?php if(!empty($productosRelacionados)): ?>
        <section class="related-products">
            <h2>Productos Relacionados</h2>
            <div class="related-products-grid">
                <?php foreach($productosRelacionados as $relacionado): ?>
                <a href="vistaprod.php?id=<?= $relacionado['id'] ?>" class="related-product-card">
                    <div class="related-product-img">
                        <img src="<?= htmlspecialchars($relacionado['imagen_url']) ?>" 
                             alt="<?= htmlspecialchars($relacionado['nombre']) ?>">
                    </div>
                    <h3><?= htmlspecialchars($relacionado['nombre']) ?></h3>
                    <p class="related-product-price">S/ <?= number_format($relacionado['precio'], 2) ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
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
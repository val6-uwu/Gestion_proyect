 
    <link rel="stylesheet" href="../Vista/Style/sliderprod.css">
 <!-- Productos en descuento -->
     <div class="slider-container">
    <h2 class="slider-title">Productos Destacados</h2>
    <div class="slider">
        <div class="slides">
            <?php foreach (array_chunk($productosSlider, 3) as $group): ?>
            <div class="slide-group">
                <?php foreach ($group as $producto): ?>
                <div class="product-card">
                    <div class="product-img-container">
                        <img src=" <?= htmlspecialchars($producto['imagen_url']) ?>" 
                             alt="<?= htmlspecialchars($producto['nombre']) ?>"
                             class="product-img">
                        <div class="product-overlay">
    <a href="vistaprod.php?id=<?= $producto['id'] ?>" class="quick-view-btn">Vista rápida</a>
</div>
                    </div>
                    <div class="product-info">
                        <h3><?= htmlspecialchars($producto['nombre']) ?></h3>
                        <p class="price">S/ <?= number_format($producto['precio'], 2) ?></p>
                        <button class="add-to-cart-btn">Añadir al carrito</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <button class="slider-nav prev" aria-label="Anterior"><i class="fas fa-chevron-left"></i></button>
        <button class="slider-nav next" aria-label="Siguiente"><i class="fas fa-chevron-right"></i></button>
    </div>
    <div class="slider-dots"></div>
</div>


<script src="../Vista/Scripts/sliderprod.js"></script>
    <script src="../Vista/Js/sliderprod.js"></script>
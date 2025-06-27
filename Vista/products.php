<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Mi Sitio Web</title>
    <link rel="stylesheet" href="../Vista/Style/filtro.css" />
    <link rel="stylesheet" href="../Vista/Style/products.css" />
</head>

<body>
    <?php include('../Vista/navbar.php'); ?>
    <section class="father-container">
    <!-- COLUMNA DE FILTROS (IZQUIERDA) -->
    <article class="filter">
        <div class="filter-header">
            <h2>Snacks y Aperitivos</h2>
            <p>212 Productos encontrados</p>
        </div>

        <div class="filter-section">
            <h2>Categoría</h2>
            <ul class="category-list">
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="alimentos_bebidas">▶</span>
                    <a href="#">Alimentos y Bebidas (304)</a>
                    
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="ropa_accesorios">▶</span>
                    <a href="#">Ropa y Accesorios (121)</a>
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="artesanias_regalos">▶</span>
                    <a href="#">Artesanías y Regalos (78)</a>
                    
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="belleza">▶</span>
                    <a href="#">Belleza (45)</a>
                    
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="tecnologia_electronicos">▶</span>
                    <a href="#">Tecnología (86)</a>
                    
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="mascotas">▶</span>
                    <a href="#">Mascotas (103)</a>
                    
                </li>
            </ul>
        </div>

        <div class="filter-section">
            <h2>Precios</h2>
            <ul class="price-list">
                <li><a href="#">Menor a s/10 (101)</a></li>
                <li><a href="#">Entre s/10 - s/50 (111)</a></li>
                <li><a href="#">Menor a s/100 (212)</a></li>
            </ul>
            <div class="price-range">
                <label for="min-price">Rango:</label>
                <div class="range-inputs">
                    <input type="number" id="min-price" placeholder="s/ 0">
                    <span>-</span>
                    <input type="number" id="max-price" placeholder="s/ 50">
                </div>
            </div>
        </div>

        <div class="filter-section">
            <a href="#" class="discount-filter">En Descuento (100)</a>
        </div>
    </article>

    <!-- CONTENEDOR DE PRODUCTOS (DERECHA) -->
    <article class="products">
        <nav class="header">
            <h1>Alimentos y bebidas > <span>Snacks y aperitivos</span></h1>
        </nav>

        <div class="products-container">
            <!-- Producto Normal -->
            <div class="product-card">
                <img src="../Vista/Complementos/imgs/Productos/chifletocino.jpeg" alt="Chifles Redondos">
                <div class="product-info">
                    <h3>Chifles - Redondos</h3>
                    <p>Sabor tocino, 100% piuranos</p>
                    <div class="product-price">
                        <span>S/ 12.50</span>
                    </div>
                </div>
            </div>

            <!-- Producto en Oferta -->
            <div class="product-card on-sale">
                <div class="sale-tag">En oferta</div>
                <img src="../Vista/Complementos/imgs/Productos/chifleceviche.jpg" alt="Chifles Redondos en oferta">
                <div class="product-info">
                    <h3>Chifles sabor ceviche</h3>
                    <p>Sabor ceviche, 100% piuranos</p>
                    <div class="product-price">
                        <span class="original-price">S/ 12.50</span>
                        <span class="sale-price">S/ 8.00</span>
                    </div>
                </div>
            </div>
            
            <!-- Repite más tarjetas de producto aquí -->
            <div class="product-card">
                <img src="../Vista/Complementos/imgs/Productos/carneseca.png" alt="Carne Seca">
                <div class="product-info">
                    <h3>Carne Seca</h3>
                    <p>100% carne de res, deshidratada y sazonada</p>
                    <div class="product-price">
                        <span>S/ 12.50</span>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="../Vista/Complementos/imgs/Productos/dulcetamarindo.png" alt="Dulce de tamarindo">
                <div class="product-info">
                    <h3>Dulce de tamarindo</h3>
                    <p>100% natural, sin conservantes</p>
                    <div class="product-price">
                        <span>S/ 12.50</span>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="../Vista/Complementos/imgs/Productos/natilla.png" alt="Natilla">
                <div class="product-info">
                    <h3>Natilla</h3>
                    <p>100% natural, sin conservantes</p>
                    <div class="product-price">
                        <span>S/ 12.50</span>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="../Vista/Complementos/imgs/Productos/chifleschurre.png" alt="Chifles Churre">
                <div class="product-info">
                    <h3>Chifles - EL CHURRE</h3>
                    <p>100% piuranos, sabor único</p>
                    <div class="product-price">
                        <span>S/ 12.50</span>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="../Vista/Complementos/imgs/Productos/chifleschurre.png" alt="Chifles Churre">
                <div class="product-info">
                    <h3>Chifles - EL CHURRE</h3>
                    <p>100% piuranos, sabor único</p>
                    <div class="product-price">
                        <span>S/ 12.50</span>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <img src="../Vista/Complementos/imgs/Productos/chifleschurre.png" alt="Chifles Churre">
                <div class="product-info">
                    <h3>Chifles - EL CHURRE</h3>
                    <p>100% piuranos, sabor único</p>
                    <div class="product-price">
                        <span>S/ 12.50</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Paginación o mensaje de scroll -->
        <footer class="products-footer">
            <nav class="pagination">
                <a href="#" class="arrow"><</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <span>...</span>
                <a href="#" class="arrow">></a>
            </nav>
        </footer>
    </article>
</section>
<?php include 'footer.php'; ?>
<script src="../Vista/Scripts/Filtro-categorias.js"></script>
</body>
</html>

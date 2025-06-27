<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Vista/Style/filtro.css" />
    <link rel="stylesheet" href="/Vista/Style/packofertas.css">
</head>
<body>
    <?php include('../Vista/navbar.php'); ?>
    <div id="filters-overlay"></div>
    <section class="father-container">

    <article class="filter">
        <h2>Filtro de ofertas</h2>
        <div class="filter-header">
            <h2>Snacks y aperitivos</h2>
            <p>159 Productos encontrados</p>

        </div>
        <div class="filter-section">
            <h2>Tipo de oferta</h2>
            <ul class="offer-type">
                    <li><label><input type="checkbox" checked>Packs</label></li>
                    <li><label><input type="checkbox" checked>Combos</label></li>
                    <li><label><input type="checkbox" checked> Descuento Individual</label></li>
            </ul>
        </div>
        <div class="filter-section">
            <h2>Categoría</h2>
            <ul class="category-list">
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="alimentos_bebidas">▶</span>
                    <a href="#">Alimentos y Bebidas (80)</a>
                    
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="ropa_accesorios">▶</span>
                    <a href="#">Ropa y Accesorios (20)</a>
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="artesanias_regalos">▶</span>
                    <a href="#">Artesanías y Regalos (18)</a>
                    
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="belleza">▶</span>
                    <a href="#">Belleza (21)</a>
                    
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="tecnologia_electronicos">▶</span>
                    <a href="#">Tecnología (8)</a>
                    
                </li>
                <li class="CategoryItem">
                    <span class="toggle-subcategory" data-category="mascotas">▶</span>
                    <a href="#">Mascotas (12)</a>
                    
                </li>
            </ul>
        </div>

        <div class="filter-section">
            <h2>Porcentaje de descuento</h2>
            <ul class="price-list">
                <li><a href="#">10% a 20%</a></li>
                <li><a href="#">21% a 30%</a></li>
                <li><a href="#">Más de 40%</a></li>
            </ul>
            <div class="price-range">
                <label for="min-price">Rango:</label>
                <div class="range-inputs">
                    <input type="number" id="min-price" placeholder="s/ 0">
                    <span>-</span>
                    <input type="number" id="max-price" placeholder="s/ 50">
                    <button class="filters-btn">➜</button>
                </div>
            </div>
        </div>

        
    </article>
    <article class="products">
        <div class="header-button">
            <button id="show-filters-btn">
                    <img src="/Vista/Complementos/icons/filtrar.png" alt="">
            </button>
        </div>
        <nav class="header"> 
            <!-- Título modificado para la sección de ofertas -->
            <h1>Ofertas Especiales > <span>Packs, Combos, Descuentos individuales</span></h1>
        </nav>

        <div class="products-container">

            <!-- PACK DE PRODUCTOS (Ej: Chifles + Carne Seca) -->
            <!-- Usamos una nueva clase "pack-card" para un estilo especial de imagen -->
            <div class="product-card pack-card on-sale">
                <div class="sale-tag">Combo</div>
                <!-- Contenedor especial para las dos imágenes del pack -->
                <div class="pack-images">
                    <img src="../Vista/Complementos/imgs/Productos/chifletocino.jpeg" alt="Chifles">
                    <span class="plus-icon">+</span>
                    <img src="../Vista/Complementos/imgs/Productos/carneseca.png" alt="Carne Seca">
                </div>
                <div class="product-info">
                    <h3>Pack: 2 Chifles + Carne Seca</h3>
                    <p>La combinación perfecta para tu tarde.</p>
                    <div class="product-price">
                        <span class="original-price">S/ 25.00</span>
                        <span class="sale-price">S/ 20.00</span>
                    </div>
                </div>
            </div>

            <!-- OFERTA 2x1 (Ej: 2 Chifles por un precio especial) -->
            <div class="product-card on-sale">
                <div class="sale-tag">¡Oferta 2x1!</div>
                <img src="../Vista/Complementos/imgs/Productos/chifleceviche.jpg" alt="Chifles sabor ceviche">
                <div class="product-info">
                    <h3>Oferta 2x1: Chifles sabor ceviche</h3>
                    <p>Lleva 2 y paga menos. 100% piuranos.</p>
                    <div class="product-price">
                        <!-- El precio original sería el de dos productos -->
                        <span class="original-price">S/ 20.00</span> 
                        <span class="sale-price">S/ 14.00</span>
                    </div>
                </div>
            </div>
            
            <!-- PRODUCTO INDIVIDUAL EN OFERTA -->
            <div class="product-card on-sale">
                <div class="sale-tag">En oferta</div>
                <img src="../Vista/Complementos/imgs/Productos/natilla.png" alt="Natilla">
                <div class="product-info">
                    <h3>Natilla Piurana</h3>
                    <p>100% natural, sin conservantes.</p>
                    <div class="product-price">
                        <span class="original-price">S/ 15.00</span>
                        <span class="sale-price">S/ 7.50</span>
                    </div>
                </div>
            </div>

            <!-- OTRO PACK (Ej: Gaseosa + Chifles) -->
            <div class="product-card pack-card on-sale">
                <div class="sale-tag">Combo</div>
                <div class="pack-images">
                    <img src="../Vista/Complementos/imgs/Productos/gaseosa.png" alt="Gaseosa">
                    <span class="plus-icon">+</span>
                    <img src="../Vista/Complementos/imgs/Productos/chifleschurre.png" alt="Chifles">
                </div>
                <div class="product-info">
                    <h3>Combo: Gaseosa personal + Chifles "El Churre"</h3>
                    <p>¡El combo que no puede faltar!</p>
                    <div class="product-price">
                        <span class="original-price">S/ 20.00</span>
                        <span class="sale-price">S/ 12.00</span>
                    </div>
                </div>
            </div>
            
            <!-- Puedes seguir agregando más tarjetas de oferta aquí -->
            <div class="product-card on-sale">
                <div class="sale-tag">En oferta</div>
                <img src="../Vista/Complementos/imgs/Productos/dulcetamarindo.png" alt="Dulce de tamarindo">
                <div class="product-info">
                    <h3>Dulce de tamarindo</h3>
                    <p>100% natural, sin conservantes</p>
                    <div class="product-price">
                        <span class="original-price">S/ 12.50</span>
                        <span class="sale-price">S/ 9.90</span>
                    </div>
                </div>
            </div>
            <div class="product-card on-sale">
                <div class="sale-tag">En oferta</div>
                <img src="../Vista/Complementos/imgs/Productos/chifleschurre.png" alt="Chifles Churre">
                <div class="product-info">
                    <h3>Chifles - EL CHURRE</h3>
                    <p>100% piuranos, sabor único</p>
                    <div class="product-price">
                        <span class="original-price">S/ 10.00</span>
                        <span class="sale-price">S/ 7.00</span>
                    </div>
                </div>
            </div>
            <div class="product-card on-sale">
                <div class="sale-tag">MEGA-COMBO!</div>
                <img src="../Vista/Complementos/imgs/Productos/supercombo.png" alt="Super Combo">
                <div class="product-info">
                    <h3>Combo: Natilla+Rosquitas+King Kong</h3>
                    <p>100% piuranos, sabor único</p>
                    <div class="product-price">
                        <span class="original-price">S/ 30.00</span>
                        <span class="sale-price">S/ 15.00</span>
                    </div>
                </div>
            </div>
            <div class="product-card on-sale">
                <div class="sale-tag">MEGA-COMBO!</div>
                <img src="../Vista/Complementos/imgs/Productos/supercombo.png" alt="Super Combo">
                <div class="product-info">
                    <h3>Combo: Manjar Blanco+Rosquitas+King Kong</h3>
                    <p>100% piuranos, sabor único</p>
                    <div class="product-price">
                        <span class="original-price">S/ 30.00</span>
                        <span class="sale-price">S/ 15.00</span>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="products-footer">
            <nav class="pagination">
                <a href="#" class="arrow"><</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <span>...</span>
                <a href="#" class="arrow">></a>
            </nav>
        </footer>
</article>
</section>
<?php include 'footer.php'; ?>
<script src="/Vista/Scripts/Filtro-categorias.js"></script>
</body>
</html>
<link rel="stylesheet" href="../Vista/Style/navbar.css" />
<link rel="stylesheet" href="../Vista/Style/sub-navbar.css" />
<!--Barra Principal--> 
<nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="../Vista/Complementos/imgs/logo.png" alt="logo" class="logo"></a>
        </div>
        <!-- Formulario de búsqueda -->
         <div>
            <form class="search-form" method="GET" action="">
                <input type="text" name="q" placeholder="Buscar..." />
                <button type="submit" aria-label="Buscar">
                    <img src="../Vista/Complementos/icons/lupa.png" alt="Buscar" class="search-icon" />
                </button>
            </form>
         </div>
        
        <!-- Botones -->
        <div class="nav-buttons">
            <button class="btn-celeste" onclick="window.location.href='iniciosesion.php';">
                <img src="../Vista/Complementos/icons/user.png" alt="icono1" class="btn-icon">
                <div class="btn-text">
                    <span class="btn-title">¡Bienvenido!</span><br>
                    <span class="btn-subtext">Identifica / Regístrate</span>
                </div>
            </button>

            <button class="btn-rosa" onclick="window.location.href='iniciosesion-vend.php';">
                <img src="../Vista/Complementos/icons/work.png" alt="icono2" class="btn-icon">
                <div class="btn-text">
                    <span class="btn-title">Emprende</span><br>
                    <span class="btn-subtext">con nosotros</span>
                </div>
            </button>
        </div>        
    </nav>
    <!--Sugunda barra de navegación-->
    <nav class="sub-navbar">
        <div class="sub-navbar-container">
            <!--DESPLEGAR-->
            <div class="dropdown-container">


    <button class="btn-categorias" onclick="DesplegarMenu();">
        <img src="../Vista/Complementos/icons/menu.png" alt="izq" class="cat-icon">
        <span>Todas las categorías</span>
        <img src="../Vista/Complementos/icons/abajo.png" alt="der" class="cat-icon">
    </button>

   
    <div class="menu-desplegable">
        <ul class="categorias">
            <li class="listItem" data-categoria="alimentos_bebidas">Alimentos y bebidas</li>
            <li class="listItem" data-categoria="ropa_accesorios">Ropa y Accesorios</li>
            <li class="listItem" data-categoria="artesanias_regalos">Artesanias y Regalos</li>
            <li class="listItem" data-categoria="belleza">Belleza</li>
            <li class="listItem" data-categoria="tecnologia_electronicos">Tecnología y Electrónicos</li>
            <li class="listItem" data-categoria="mascotas">Mascotas</li>
        </ul>
        
        
        <div class="subcategorias">
            <ul></ul>
        </div>
    </div>

</div> <!-- Fin del contenedor padre -->

            <ul class="sub-nav-links">
                <li><a href="#">Conoce más de Piura</a></li>
                <li><a href="#">Packs de ofertas</a></li>
                <li><a href="products.php">Productos</a></li>
                <li><a href="#">Negocios</a></li>
                <li><a href="emprendedores.php">Emprendedores</a></li>
            </ul>
        </div>
        <button class="cart-btn" aria-label="Carrito">
            <img src="../Vista/Complementos/icons/carrito.png" alt="Carrito">Vista Admin
        </button>
        <button class="cart-btn" aria-label="Carrito">
            <img src="../Vista/Complementos/icons/carrito.png" alt="Carrito">
        </button>
    </nav>

    <script src="../Vista/Scripts/boton-categorias.js"></script>
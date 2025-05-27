<link rel="stylesheet" href="../navbar.css" />
<link rel="stylesheet" href="../sub-navbar.css" />
<!--Barra Principal--> 
<nav class="navbar">
        <div class="logo">
            <img src="../Complementos/imgs/logo.png" alt="logo" class="logo">
        </div>
        <!-- Formulario de búsqueda -->
         <div>
            <form class="search-form" method="GET" action="">
                <input type="text" name="q" placeholder="Buscar..." />
                <button type="submit" aria-label="Buscar">
                    <img src="../Complementos/icons/lupa.png" alt="Buscar" class="search-icon" />
                </button>
            </form>
         </div>
        
        <!-- Botones -->
        <div class="nav-buttons">
            <button class="btn-celeste">
                <img src="../Complementos/icons/user.png" alt="icono1" class="btn-icon">
                <div class="btn-text">
                    <span class="btn-title">¡Bienvenido!</span><br>
                    <span class="btn-subtext">Identifica / Regístrate</span>
                </div>
            </button>
    
            <button class="btn-rosa">
                <img src="../Complementos/icons/work.png" alt="icono2" class="btn-icon">
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
            <button class="btn-categorias">
                <img src="../Complementos/icons/menu.png" alt="izq" class="cat-icon">
                <span>Todas las categorías</span>
                <img src="../Complementos/icons/abajo.png" alt="der" class="cat-icon">
            </button>

            <ul class="sub-nav-links">
                <li><a href="#">Conoce más de Piura</a></li>
                <li><a href="#">Packs de ofertas</a></li>
                <li><a href="#">Favoritos</a></li>
                <li><a href="#">Negocios</a></li>
            </ul>
        </div>
        <button class="cart-btn" aria-label="Carrito">
            <img src="../Complementos/icons/carrito.png" alt="Carrito">
        </button>
    </nav>
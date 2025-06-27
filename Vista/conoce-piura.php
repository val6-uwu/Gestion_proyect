<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conoce Piura</title>
    <link rel="stylesheet" href="Style/sobre-piura.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('../Vista/navbar.php'); ?>
    <!-- Encabezado (sin modificar) -->
    <section class="Header">
        <h1>CONOCE MÁS DE PIURA, SUS DESTINOS Y MANJARES</h1>
        <p>Descubre la calidez de su gente, la belleza de sus playas 
        y el sabor único de su gastronomía. Un viaje por la cultura 
        y tradición del norte peruano.</p>
    </section>
    <!-- Sección de Sobre Piura -->
    <section class="About_Piura">
        <img class="img1" src="Complementos/imgs/Sobre-Piura/PLAZA_DE_ARMAS_DE_PIURA_-_PIURA.jpg" alt="">
        <img class="img2" src="Complementos/imgs/Sobre-Piura/sechura.png" alt="">
        <div class="About_Piura_description">
            <h2><b><span>Piu</span>ra</b>, la ciudad del eterno calor</h2>
            <p>Ubicada al norte del Perú, Piura es una región que combina historia, biodiversidad y creatividad. Su geografía diversa, que abarca desde playas doradas hasta valles agrícolas y zonas de sierra, la convierte en un punto clave para el turismo y la producción. Más allá de sus paisajes, Piura destaca por su gente: trabajadora, alegre y profundamente ligada a sus raíces. Aquí nacen productos auténticos, cargados de identidad y sabor, que reflejan una cultura viva y un espíritu emprendedor que se siente en cada rincón.
            </p>
        </div>
        <img class="img3" src="Complementos/imgs/Sobre-Piura/playaPiura.jpg" alt="">
        
        

    </section>
    <!-- Sección de Destinos Turísticos (carousel) -->
    <section class="destinations">
        <h2>Principales Destinos Turísticos</h2>
        <article class="destinations_carousel-wrapper">
        <div class="destinations_carousel">
            <!-- Items del carousel (6 en total) -->
            <div class="slide"> 
                <img src="Complementos/imgs/Sobre-Piura/mancora.jpg" alt="Máncora"> 
                <div class="slide-description"> 
                    <h3>Máncora</h3><p>Playas de arena blanca, olas perfectas para el surf y una vibrante vida nocturna. El paraíso para los amantes del sol.</p> 
                </div> 
            </div>
            <div class="slide"> 
                <img src="Complementos/imgs/Sobre-Piura/catacaos.png" alt="Catacaos"> 
                <div class="slide-description"> 
                    <h3>Catacaos</h3><p>Cuna de la artesanía piurana. Descubre su famosa filigrana de plata y la deliciosa gastronomía de sus picanterías.</p> 
                </div> 
            </div>
            <div class="slide"> 
                <img src="Complementos/imgs/Sobre-Piura/colan.png" alt="Colán"> 
                <div class="slide-description"> 
                    <h3>Colán</h3><p>Un balneario con historia. Disfruta de sus casonas de madera y de las puestas de sol más espectaculares.</p> 
                </div> 
            </div>
            <div class="slide"> 
                <img src="Complementos/imgs/Sobre-Piura/sechura2.png" alt="Sechura"> 
                <div class="slide-description"> 
                    <h3>Sechura</h3><p>Explora el impresionante desierto, sus dunas doradas y la tranquilidad de la bahía. Una aventura inolvidable.</p> 
                </div> 
            </div>
            <div class="slide"> 
                <img src="Complementos/imgs/Sobre-Piura/canchaque.png" alt="Canchaque"> 
                <div class="slide-description"> 
                    <h3>Canchaque</h3><p>Conocida como la "Suiza Piurana", ofrece paisajes de sierra, cascadas y un clima fresco ideal para el trekking.</p> 
                </div> 
            </div>
            <div class="slide"> 
                <img src="Complementos/imgs/Sobre-Piura/lashuaringas.png" alt="Las Huaringas"> 
                <div class="slide-description"> 
                    <h3>Las Huaringas</h3><p>En Huancabamba, descubre lagunas sagradas con propiedades curativas. Un destino de misticismo y naturaleza.</p> 
                </div> 
            </div>
        </article>
        </div>
    </section>

    <!-- Sección de Principales Atractivos (Diseño modificado) -->
    <section class="attractions_container">
        <!-- Columna de Introducción -->
        <article class="attractions_grid">
        <div class="introduction_container">
            <h2>Lo que Piura Ofrece al Mundo</h2>
            <p>Piura no es solo un destino, es una experiencia sensorial. 
                Su riqueza se manifiesta en sabores que enamoran, en la 
                maestría de sus artesanos y en productos únicos que nacen 
                de una tierra bendecida por el sol.</p>
        </div>
        <!-- Columna con las slides de atractivos -->
        <div class="attractions">
            <div class="slide"> <img src="Complementos/imgs/Sobre-Piura/ceviche.png" alt="Gastronomía"> <div class="slide-description_b"> <h3>Gastronomía</h3> <p>Desde el ceviche de conchas negras hasta el seco de chabelo. Sabores que cuentan historias y conquistan paladares.</p> </div> </div>
            <div class="slide"> <img src="Complementos/imgs/Sobre-Piura/artesania.jpg" alt="Artesanía"> <div class="slide-description_b"> <h3>Artesanía</h3> <p>Manos que transforman la paja toquilla y la plata en arte. Llévate un recuerdo único hecho con el corazón.</p> </div> </div>
            <div class="slide"> <img src="Complementos/imgs/Sobre-Piura/chifleschurre.png" alt="Productos Locales"> <div class="slide-description_b"> <h3>Productos Locales</h3> <p>Descubre la versatilidad de la algarrobina, el dulzor del mango ciruelo y el crocante sabor de los chifles.</p> </div> </div>
        </div>
        </article>
    </section>

    <!-- Sección de Voces de Piura (sin cambios estructurales) -->
    <section class="makers">
        <h2>Voces de Piura</h2>
        <div class="makers_container">
             <div class="makers_item"> <img src="Complementos/imgs/Sobre-Piura/Elvis.png" alt="Elvis Stive"> <div> <p>Mis chifles son el resultado de la pasión y el esfuerzo. Cada bocado cuenta una historia.</p> <b>Elvis Stive, <i>Emprendedor Piurano</i></b> </div> </div>
             <div class="makers_item"> <img src="Complementos/imgs/Sobre-Piura/Captura de pantalla 2025-06-24 003523.png" alt="Carla Seminario"> <div> <p>Nuestra cocina es el reflejo de una tierra generosa. Usamos ingredientes frescos para llevar el auténtico sabor norteño.</p> <b>Carla Seminario, <i>Chef y Productora Local</i></b> </div> </div>
        </div>
    </section>

    <!-- SCRIPT PARA EL carousel AUTOMÁTICO -->
    <script src="Scripts/sobre-piura.js"></script>
    <?php include 'footer.php'; ?>
</body>
</html>
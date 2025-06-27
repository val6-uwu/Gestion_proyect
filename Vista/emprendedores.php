<?php
require_once '../Modelo/conexion.php';
session_start();
$conexion = new Conexion();
$emprendedores = $conexion->getEmprendedores();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Emprendedores | Ranti</title>
    <link rel="stylesheet" href="../Vista/Style/emprendedores.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <main class="emprendedores-section">
        <h1 class="section-title">Conoce a nuestros emprendedores</h1>
        
        <div class="emprendedores-container">
            <?php foreach ($emprendedores as $emprendedor): ?>
            <div class="emprendedor-card">
                <?php if (!empty($emprendedor['foto_perfil'])): ?>
                    <img src="../uploads/perfiles/<?php echo htmlspecialchars($emprendedor['foto_perfil']); ?>" alt="<?php echo htmlspecialchars($emprendedor['nombre']); ?>" class="emprendedor-img">
                <?php else: ?>
                    <img src="../Vista/Images/default-profile.jpg" alt="Foto predeterminada" class="emprendedor-img">
                <?php endif; ?>
                
                <div class="emprendedor-info">
                    <h3><?php echo htmlspecialchars($emprendedor['nombre']); ?></h3>
                    <p><span class="negocio-tag"><?php echo htmlspecialchars($emprendedor['negocio']); ?></span></p>
                    <p class="emprendedor-email"><strong>Contacto:</strong> <?php echo htmlspecialchars($emprendedor['email']); ?></p>
                    <p class="emprendedor-ciudad"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($emprendedor['ciudad']); ?></p>
                    <p><strong>Sobre el negocio:</strong><br><?php echo htmlspecialchars($emprendedor['descripcion']); ?></p>
                    
                    <a href="product-vend.php?vendedor_id=<?php echo $emprendedor['user_id']; ?>" class="btn-ver-productos">
                        Ver Productos <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>
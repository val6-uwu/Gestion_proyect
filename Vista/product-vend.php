<?php
require_once '../Modelo/conexion.php';
session_start();

if (!isset($_GET['vendedor_id'])) {
    header('Location: emprendedores.php');
    exit();
}

$vendedor_id = $_GET['vendedor_id'];
$conexion = new Conexion();

// Obtener información del vendedor
$vendedor = $conexion->getVendedorById($vendedor_id);

// Obtener productos del vendedor
$productos = $conexion->getProductosByVendedor($vendedor_id);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de <?php echo htmlspecialchars($vendedor['nombre']); ?> | Ranti</title>
    <link rel="stylesheet" href="../Vista/Style/product-vend.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <main class="productos-vendedor-section">
        <div class="vendedor-header">
            <?php if (!empty($vendedor['foto_perfil'])): ?>
                <img src="../uploads/perfiles/<?php echo htmlspecialchars($vendedor['foto_perfil']); ?>" alt="<?php echo htmlspecialchars($vendedor['nombre']); ?>" class="vendedor-img">
            <?php else: ?>
                <img src="../Vista/Images/default-profile.jpg" alt="Foto predeterminada" class="vendedor-img">
            <?php endif; ?>
            
            <div class="vendedor-info">
                <h1><?php echo htmlspecialchars($vendedor['nombre']); ?></h1>
                <h2><?php echo htmlspecialchars($vendedor['negocio']); ?></h2>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($vendedor['ciudad']); ?></p>
                <p class="vendedor-descripcion"><?php echo htmlspecialchars($vendedor['descripcion']); ?></p>
            </div>
        </div>
        
        <h2 class="productos-title">Productos disponibles</h2>
        
        <div class="productos-container">
            <?php if (count($productos) > 0): ?>
                <?php foreach ($productos as $producto): ?>
                <div class="producto-card">
                    <img src="../uploads/productos/<?php echo htmlspecialchars($producto['imagen_url']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>" class="producto-img">
                    <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
                    <p class="producto-precio">S/ <?php echo number_format($producto['precio'], 2); ?></p>
                    <a href="vistaprod.php?id=<?= $producto['id'] ?>" class="btn-ver-detalle">Ver detalle</a>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-productos">Este vendedor no tiene productos disponibles actualmente.</p>
            <?php endif; ?>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>
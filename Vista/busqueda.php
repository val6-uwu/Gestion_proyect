<?php
require_once '../Modelo/conexion.php';
session_start();

$conexion = new Conexion();
$searchTerm = isset($_GET['q']) ? trim($_GET['q']) : '';

if (!empty($searchTerm)) {
    $query = "SELECT p.*, c.name_categoria as categoria_nombre 
              FROM productos p
              JOIN categoria c ON p.categoria = c.categoria_id
              WHERE p.nombre LIKE ? OR p.description LIKE ? OR c.name_categoria LIKE ?
              AND p.stock > 0
              ORDER BY p.fecha_creado DESC
              LIMIT 20";
    
    $searchParam = "%$searchTerm%";
    $stmt = $conexion->getConexion()->prepare($query);
    $stmt->bind_param('sss', $searchParam, $searchParam, $searchParam);
    $stmt->execute();
    $result = $stmt->get_result();
    $productos = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda: <?php echo htmlspecialchars($searchTerm); ?> | Ranti</title>
    <link rel="stylesheet" href="../Vista/Style/navbar.css">
    <link rel="stylesheet" href="../Vista/Style/sub-navbar.css">
    <link rel="stylesheet" href="../Vista/Style/busqueda.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <main class="search-results">
        <h1>Resultados de búsqueda para "<?php echo htmlspecialchars($searchTerm); ?>"</h1>
        
        <?php if (!empty($searchTerm) && !empty($productos)): ?>
            <div class="productos-grid">
                <?php foreach ($productos as $producto): ?>
                <div class="producto-card">
                    <img src="../uploads/productos/<?php echo htmlspecialchars($producto['imagen_url']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                    <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
                    <p class="precio">S/ <?php echo number_format($producto['precio'], 2); ?></p>
                    <p class="categoria"><?php echo htmlspecialchars($producto['categoria_nombre']); ?></p>
                    <a href="vistaprod.php?id=<?= $producto['id'] ?>" class="ver-detalle">Ver detalle</a>
                </div>
                <?php endforeach; ?>
            </div>
        <?php elseif (!empty($searchTerm)): ?>
            <p class="no-results">No se encontraron resultados para "<?php echo htmlspecialchars($searchTerm); ?>"</p>
        <?php else: ?>
            <p class="no-results">Ingrese un término de búsqueda</p>
        <?php endif; ?>
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>
<?php
session_start();
require_once '../Modelo/conexion.php';
$con = new Conexion();
$productos = $con->getProductos();
$productosSlider = array_slice($productos, 0, 6);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Mi Sitio Web</title>
    <!-- Agrega estos en el head -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>
<body>

    <?php include('../Vista/navbar.php'); ?>
    <?php include('../Vista/anuncios.php'); ?>
    <?php include('../Vista/sliderprod.php'); ?>
    <?php include('../Vista/footer.php'); ?>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
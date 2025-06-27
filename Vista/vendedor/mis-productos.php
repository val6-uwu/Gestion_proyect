<?php session_start();
include("template/navbar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Productos | Ranti</title>
    <link rel="stylesheet" href="./Style/mis-productos.css">
    <link rel="stylesheet" href="./Style/aside.css">
    <link rel="stylesheet" href="./Style/product-modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <?php include("template/aside.php"); ?>
    </aside>

    <!-- Main Content -->
    <main class="main-content-with-sidebar">
        <div class="products-header">
            <div class="header-text">
                <h1>Mis productos</h1>
                <p>Administra tu catálogo de productos</p>
            </div>
            <button class="btn-add-product">
                <i class="fas fa-plus"></i> Nuevo producto
            </button>
        </div>

        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Buscar productos...">
            <button class="btn-filter">
                <i class="fas fa-filter"></i> Filtrar
            </button>
        </div>

        <div class="products-table-container">
            <table class="products-table">
                <thead>
                    <tr>
                        <th>Productos</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chifles Largos</td>
                        <td>Chifles y snacks</td>
                        <td>S/ 3.00</td>
                        <td>20</td>
                        <td><span class="status-badge active">Active</span></td>
                        <td class="actions">
                            <button class="btn-edit"><i class="fas fa-edit"></i></button>
                            <button class="btn-delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Chifles redondos - sabor tocino</td>
                        <td>Chifles y snacks</td>
                        <td>S/ 3.00</td>
                        <td>0</td>
                        <td><span class="status-badge out-of-stock">Agotado</span></td>
                        <td class="actions">
                            <button class="btn-edit"><i class="fas fa-edit"></i></button>
                            <button class="btn-delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Chifles Largos</td>
                        <td>Chifles y snacks</td>
                        <td>S/ 3.00</td>
                        <td>20</td>
                        <td><span class="status-badge active">Active</span></td>
                        <td class="actions">
                            <button class="btn-edit"><i class="fas fa-edit"></i></button>
                            <button class="btn-delete"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal para añadir/editar producto -->
        <?php include("./product-modal.php"); ?>
    </main>

    <script src="./JS/productos.js"></script>
</body>
</html>
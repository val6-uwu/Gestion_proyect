<?php session_start();
include("template/navbar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Vendedor | Ranti</title>
    <link rel="stylesheet" href="./Style/pedidos.css">
    <link rel="stylesheet" href="./Style/pedidos-modal.css">
    <link rel="stylesheet" href="./Style/aside.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <?php include("template/aside.php"); ?>
    </aside>

    <!-- Main Content -->
    <main class="main-content-with-sidebar">
        <div class="pedidos-header">
            <h1>Pedidos</h1>
            <p>Gestiona los pedidos de tus productos.</p>
        </div>

        <div class="search-filter">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Buscar pedidos...">
            </div>
            <div class="filter-tabs">
                <button class="filter-tab active">Todos</button>
                <button class="filter-tab">Pendientes</button>
                <button class="filter-tab">En Proceso</button>
                <button class="filter-tab">Entregados</button>
                <button class="filter-tab">Cancelados</button>
            </div>
        </div>

        <div class="pedidos-table-container">
            <table class="pedidos-table">
                <thead>
                    <tr>
                        <th>ID Pedido</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Productos</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P-00001</td>
                        <td>Nintas Activo Cronigo</td>
                        <td>09/04/2025</td>
                        <td>S/ 36.00</td>
                        <td>3</td>
                        <td><span class="status-badge delivered">Entregado</span></td>
                        <td class="actions">
                            <button class="btn-view"><i class="fas fa-eye"></i></button>
                            <button class="btn-print"><i class="fas fa-print"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>P-00002</td>
                        <td>Luis Guillermo Jiménez Arévalo</td>
                        <td>12/04/2025</td>
                        <td>S/ 36.00</td>
                        <td>3</td>
                        <td><span class="status-badge canceled">Cancelado</span></td>
                        <td class="actions">
                            <button class="btn-view"><i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>P-00003</td>
                        <td>Freddy Lopez Atiante</td>
                        <td>27/04/2025</td>
                        <td>S/ 36.00</td>
                        <td>3</td>
                        <td><span class="status-badge in-process">En proceso</span></td>
                        <td class="actions">
                            <button class="btn-view"><i class="fas fa-eye"></i></button>
                            <button class="btn-process"><i class="fas fa-truck"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal para detalles del pedido -->
        <?php include("./pedido-modal.php"); ?>
    </main>

    <script src="./JS/pedido.js"></script>
</body>
</html>
<?php session_start();
include("template/navbar.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Vendedor | Ranti</title>
    <link rel="stylesheet" href="./Style/perfil-vendedor.css">
    <link rel="stylesheet" href="./Style/aside.css">
    <link rel="stylesheet" href="./Style/modales.css"> <!-- CSS para modales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <?php include("template/aside.php"); ?>
    </aside>

    <!-- Main Content -->
    <main class="main-content-with-sidebar">
        <div class="profile-header">
            <h1>Perfil de Vendedor</h1>
            <p>Administra tu información personal y de tu negocio</p>
        </div>

        <form class="profile-form" id="profileForm">
            <!-- Sección Información Personal -->
            <section class="form-section">
                <h2 class="section-title">Información Personal</h2>
                
                <div class="photo-upload">
                    <div class="profile-photo">
                        <img src="./uploads/perfiles/default-profile.jpg" alt="Foto de perfil" id="profileImage">
                        <label for="fileInput" class="change-photo-btn">
                            <i class="fas fa-camera"></i> Cambiar foto
                        </label>
                        <input type="file" id="fileInput" accept="image/*" style="display: none;">
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" value="María Fernández" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="mfernandez@snackcriollo.com" class="form-input" disabled>
                    </div>
                    
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" value="+51 987 654 321" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="ubicacion">Ubicación</label>
                        <select id="ubicacion" name="ubicacion" class="form-input" required>
                            <option value="lima">Lima</option>
                            <option value="piura" selected>Piura</option>
                            <option value="trujillo">Trujillo</option>
                            <option value="arequipa">Arequipa</option>
                            <option value="cusco">Cusco</option>
                        </select>
                    </div>
                </div>
            </section>

            <!-- Sección Información del Negocio -->
            <section class="form-section">
                <h2 class="section-title">Información del Negocio</h2>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="negocio">Nombre del negocio</label>
                        <input type="text" id="negocio" name="negocio" value="Snack Criollo" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="tipo-negocio">Tipo de negocio</label>
                        <select id="tipo-negocio" name="tipo-negocio" class="form-input" required>
                            <option value="alimentos">Alimentos</option>
                            <option value="artesanias" selected>Artesanías</option>
                            <option value="ropa">Ropa y Accesorios</option>
                            <option value="tecnologia">Tecnología</option>
                            <option value="servicios">Servicios</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label for="descripcion">Descripción del Negocio</label>
                    <textarea id="descripcion" name="descripcion" class="form-input" rows="4" required>Especialistas en snacks peruanos tradicionales con ingredientes 100% naturales y de la más alta calidad.</textarea>
                </div>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="sitio-web">Sitio Web</label>
                        <input type="url" id="sitio-web" name="sitio-web" placeholder="https://tunegocio.com" class="form-input">
                    </div>
                    
                    <div class="form-group">
                        <label for="redes-sociales">Redes Sociales</label>
                        <input type="text" id="redes-sociales" name="redes-sociales" placeholder="@tunegocio" class="form-input">
                    </div>
                </div>
            </section>

            <div class="form-actions">
                <button type="button" class="btn-cancelar">Cancelar</button>
                <button type="submit" class="btn-guardar">Guardar Cambios</button>
            </div>
        </form>
    </main>

    <?php include("modales.php"); ?>
    
    <!-- Scripts -->
    <script src="./JS/modales.js"></script>
    <script>
        // Script para cambiar la foto de perfil
        document.getElementById('fileInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if(file.size > 2 * 1024 * 1024) { // 2MB máximo
                    alert('La imagen es demasiado grande. Máximo 2MB permitido.');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('profileImage').src = event.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Validación básica del formulario
        document.getElementById('profileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Aquí iría la lógica para guardar los datos
            // Por ahora solo mostramos el modal de éxito
            mostrarModal('modalExito');
        });
    </script>
</body>
</html>
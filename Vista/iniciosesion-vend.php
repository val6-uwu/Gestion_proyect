<link rel="stylesheet" href="../Vista/Style/inicio_sesion.css" />
<?php 
session_start();
include('../Vista/navbar.php'); 
?>
<div class="contenedor-formulario">
    <div class="frm-inicio-sesion">
        <h2>Emprende con nosotros</h2>
        <span>¿Es tu primer vez con nosotros?</span><a href="registro_vendedor.php">Registrate</a>
        
        <form action="../Controllers/login-user.php?accion=login" method="post" class="formulario" method="POST">
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" required>

            <label for="contrasena">Contraseña*</label>
            <input type="password" id="contrasena" name="contrasena" required oninput="togglePasswordIconVisibility('contrasena')">

            <input type="submit" value="Ingresar">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </form>
    </div>
</div>


<link rel="stylesheet" href="../Vista/Style/inicio_sesion.css" />
<?php include('../Vista/navbar.php'); ?>
<div class="contenedor-formulario">
    <div class="frm-inicio-sesion">
        <h2>Iniciar Sesión</h2>
        <span>¿Es tu primer vez con nosotros?</span><a href="">Registrate</a>
        
        <form action="procesar_login.php" method="POST">
            <label>Email*</label>
            <input type="email" name="email" required><br><br>

            <label>Contraseña*</label>
            <input type="password" name="contraseña" required><br><br>

            <input type="submit" value="Ingresar">
            <a href="">¿Olvidaste tu contraseña?</a>
        </form>
    </div>
</div>


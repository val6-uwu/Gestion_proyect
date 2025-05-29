<link rel="stylesheet" href="../Vista/Style/registro_vendedor.css" />
<script src="../Vista/Scripts/registro_vendedor.js" defer></script>
<?php include('../Vista/navbar.php'); ?>

<div class="contenedor-formulario">
  <div class="frm-registro-vendedor">
    <h2>Registro de Vendedor</h2>
    <span>¿Ya tienes cuenta?</span><a href="">Inicia sesión</a>

    <form id="form-vendedor" action="procesar_registro_vendedor.php" method="POST">
      <label>Nombre del negocio o vendedor*</label>
      <input type="text" name="nombre_vendedor" required>

      <label>Email*</label>
      <input type="email" name="email" required>

      <label>Contraseña*</label>
      <input type="password" name="contraseña" required>

      <label>Ciudad*</label>
      <input type="text" name="ciudad" required>

      <label>Descripción del negocio*</label>
      <textarea name="descripcion" rows="4" required></textarea>

      <p>Se requiere el pago de <strong>S/5.00</strong> para completar tu registro como vendedor.</p>
      <button type="button" onclick="simularPago()">Registrarse y Pagar</button>
    </form>
  </div>
</div>
<div id="modal-pago" class="modal">
  <div class="modal-contenido">
    <h3>Simulación de pago</h3>
    <p>¿Confirmas el pago de <strong>S/5.00</strong> para activar tu cuenta?</p>
    <button onclick="confirmarPago()">Confirmar pago</button>
    <button onclick="cerrarModal()">Cancelar</button>
  </div>
</div>

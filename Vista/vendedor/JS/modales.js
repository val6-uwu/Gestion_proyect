// scripts/modales.js
document.addEventListener('DOMContentLoaded', function() {
    // Mostrar modal de éxito al guardar
    const btnGuardar = document.querySelector('.btn-guardar');
    if (btnGuardar) {
        btnGuardar.addEventListener('click', function(e) {
            e.preventDefault();
            mostrarModal('modalExito');
        });
    }

    // Mostrar modal de confirmación al cancelar
    const btnCancelar = document.querySelector('.btn-cancelar');
    if (btnCancelar) {
        btnCancelar.addEventListener('click', function() {
            mostrarModal('modalCancelar');
        });
    }

    // Cerrar modales
    document.querySelectorAll('.close-modal, .btn-aceptar').forEach(btn => {
        btn.addEventListener('click', function() {
            cerrarModales();
        });
    });

    // Confirmar cancelación
    const btnConfirm = document.querySelector('.btn-confirm');
    if (btnConfirm) {
        btnConfirm.addEventListener('click', function() {
            // Aquí puedes redirigir o limpiar el formulario
            cerrarModales();
            alert('Cambios cancelados'); // Ejemplo temporal
        });
    }

    // Continuar editando
    const btnCancel = document.querySelector('.btn-cancel');
    if (btnCancel) {
        btnCancel.addEventListener('click', function() {
            cerrarModales();
        });
    }
});

function mostrarModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Evitar scroll
    }
}

function cerrarModales() {
    document.querySelectorAll('.modal').forEach(modal => {
        modal.style.display = 'none';
    });
    document.body.style.overflow = 'auto'; // Restaurar scroll
}

// Cerrar modal al hacer clic fuera del contenido
window.addEventListener('click', function(event) {
    if (event.target.classList.contains('modal')) {
        cerrarModales();
    }
});
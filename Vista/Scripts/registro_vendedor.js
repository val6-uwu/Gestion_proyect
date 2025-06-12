function simularPago() {
    document.getElementById("modal-pago").style.display = "block";
}

function cerrarModal() {
    document.getElementById("modal-pago").style.display = "none";
}

function confirmarPago() {
    cerrarModal();
    document.getElementById("form-vendedor").submit();
}


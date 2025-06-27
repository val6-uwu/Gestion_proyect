document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM completamente cargado'); // Verificación de carga

    // 1. Configuración del evento para los botones de vista
    document.querySelectorAll('.btn-view').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Botón view clickeado'); // Confirmación de evento

            // Obtener datos de la fila
            const row = this.closest('tr');
            const pedidoData = {
                id: row.cells[0].textContent.trim(),
                cliente: row.cells[1].textContent.trim(),
                fecha: row.cells[2].textContent.trim(),
                total: row.cells[3].textContent.trim(),
                productos: row.cells[4].textContent.trim(),
                estado: row.querySelector('.status-badge').textContent.trim(),
                estadoClass: row.querySelector('.status-badge').className.trim()
            };

            console.log('Datos del pedido:', pedidoData);

            // Mostrar el modal
            const modal = document.getElementById('pedidoModal');
            if (modal) {
                console.log('Modal encontrado');

                // Cargar datos en el modal
                document.getElementById('pedidoId').textContent = pedidoData.id;
                document.getElementById('clienteNombre').textContent = pedidoData.cliente;
                document.getElementById('pedidoFecha').textContent = pedidoData.fecha;

                // Configurar estado
                const estadoElement = document.getElementById('pedidoEstado');
                estadoElement.textContent = pedidoData.estado;
                estadoElement.className = 'status-badge ' + pedidoData.estadoClass.split(' ')[1];

                // Configurar total
                document.querySelector('.total-amount').textContent = pedidoData.total;

                // Configurar productos (ejemplo básico)
                const productosTable = document.querySelector('#pedidoModal .productos-list tbody');
                if (productosTable) {
                    productosTable.innerHTML = `
                        <tr>
                            <td>Producto de ejemplo</td>
                            <td>${pedidoData.productos}</td>
                            <td>S/ 12.00</td>
                            <td>${pedidoData.total}</td>
                        </tr>
                    `;
                }

                // Mostrar el modal
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';

                // Configurar evento para cerrar modal
                const closeButtons = modal.querySelectorAll('.close-modal, .btn-close');
                closeButtons.forEach(btn => {
                    btn.addEventListener('click', function() {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    });
                });

                // Cerrar al hacer clic fuera del contenido
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });

            } else {
                console.error('Modal no encontrado');
            }
        });
    });

    // 2. Otras funcionalidades (filtros, búsqueda, etc.)
    document.querySelectorAll('.filter-tab').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            const status = this.textContent.toLowerCase();
            filterPedidos(status);
        });
    });

    const searchInput = document.querySelector('.search-box input');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            filterPedidos(null, searchTerm);
        });
    }
});

function filterPedidos(status = null, searchTerm = '') {
    document.querySelectorAll('.pedidos-table tbody tr').forEach(row => {
        const rowStatus = row.querySelector('.status-badge').textContent.toLowerCase();
        const rowText = row.textContent.toLowerCase();
        const statusMatch = !status || status === 'todos' || rowStatus.includes(status);
        const searchMatch = rowText.includes(searchTerm);
        row.style.display = statusMatch && searchMatch ? '' : 'none';
    });
}
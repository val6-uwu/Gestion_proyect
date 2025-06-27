<div id="pedidoModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        
        <div class="modal-header">
            <h2><i class="fas fa-receipt"></i> Detalles del Pedido <span id="pedidoId" class="badge-id">--</span></h2>
            <div id="pedidoEstado" class="status-badge-large">--</div>
        </div>
        
        <div class="pedido-grid">
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-user"></i>
                    <h3>Información del Cliente</h3>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label"><i class="fas fa-user-tag"></i> Nombre:</span>
                        <span id="clienteNombre" class="info-value">--</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label"><i class="fas fa-phone"></i> Teléfono:</span>
                        <span id="clienteTelefono" class="info-value">--</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label"><i class="fas fa-map-marker-alt"></i> Dirección:</span>
                        <span id="clienteDireccion" class="info-value">--</span>
                    </div>
                </div>
            </div>
            
            <div class="info-card">
                <div class="card-header">
                    <i class="fas fa-clipboard-list"></i>
                    <h3>Detalles del Pedido</h3>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label"><i class="far fa-calendar-alt"></i> Fecha:</span>
                        <span id="pedidoFecha" class="info-value">--</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label"><i class="fas fa-truck"></i> Método de envío:</span>
                        <span class="info-value">Delivery</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label"><i class="far fa-credit-card"></i> Pago:</span>
                        <span id="pedidoPago" class="info-value">--</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="productos-card">
            <div class="card-header">
                <i class="fas fa-box-open"></i>
                <h3>Productos</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="productos-table">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>P. Unitario</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Los productos se cargarán aquí -->
                        </tbody>
                        <tfoot>
                            <tr class="total-row">
                                <td colspan="3">Total</td>
                                <td id="total-amount" class="total-amount">S/ 0.00</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-close">
                <i class="fas fa-times"></i> Cerrar
            </button>
            <button type="button" class="btn btn-primary btn-print-modal">
                <i class="fas fa-print"></i> Imprimir Comprobante
            </button>
        </div>
    </div>
</div>
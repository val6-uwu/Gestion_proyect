<div id="productModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2 id="modalTitle">Nuevo Producto</h2>
        
        <form id="productForm">
            <div class="form-group">
                <label for="productName">Nombre del Producto</label>
                <input type="text" id="productName" name="productName" required>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="productCategory">Categoría</label>
                    <select id="productCategory" name="productCategory" required>
                        <option value="">Seleccionar categoría</option>
                        <option value="chifles">Chifles y snacks</option>
                        <option value="bebidas">Bebidas</option>
                        <option value="dulces">Dulces</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="productPrice">Precio (S/)</label>
                    <input type="number" id="productPrice" name="productPrice" step="0.01" min="0" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="productStock">Stock</label>
                    <input type="number" id="productStock" name="productStock" min="0" required>
                </div>
                
                <div class="form-group">
                    <label for="productStatus">Estado</label>
                    <select id="productStatus" name="productStatus" required>
                        <option value="active">Activo</option>
                        <option value="inactive">Inactivo</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="productDescription">Descripción</label>
                <textarea id="productDescription" name="productDescription" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="productImage">Imagen del Producto</label>
                <input type="file" id="productImage" name="productImage" accept="image/*">
            </div>
            
            <div class="form-actions">
                <button type="button" class="btn-cancel">Cancelar</button>
                <button type="submit" class="btn-save">Guardar Producto</button>
            </div>
        </form>
    </div>
</div>
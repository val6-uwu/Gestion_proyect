document.addEventListener('DOMContentLoaded', function() {
    // Elementos del modal
    const modal = document.getElementById('productModal');
    const btnAddProduct = document.querySelector('.btn-add-product');
    const closeModal = document.querySelector('.close-modal');
    const btnCancel = document.querySelector('.btn-cancel');

    // Función para abrir el modal
    function openModal() {
        document.getElementById('modalTitle').textContent = 'Nuevo Producto';
        document.getElementById('productForm').reset();
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Función para cerrar el modal
    function closeModalFunc() {
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Evento para abrir modal al hacer clic en "Nuevo producto"
    if (btnAddProduct) {
        btnAddProduct.addEventListener('click', openModal);
    }

    // Eventos para cerrar el modal
    if (closeModal) {
        closeModal.addEventListener('click', closeModalFunc);
    }

    if (btnCancel) {
        btnCancel.addEventListener('click', closeModalFunc);
    }

    // Cerrar modal al hacer clic fuera del contenido
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModalFunc();
        }
    });

    // Manejar el envío del formulario
    const productForm = document.getElementById('productForm');
    if (productForm) {
        productForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validar formulario
            const productName = document.getElementById('productName').value.trim();
            if (!productName) {
                alert('Por favor ingresa el nombre del producto');
                return;
            }

            // Aquí iría la lógica para guardar el producto
            console.log('Formulario enviado:', {
                name: productName,
                category: document.getElementById('productCategory').value,
                price: document.getElementById('productPrice').value,
                stock: document.getElementById('productStock').value,
                status: document.getElementById('productStatus').value,
                description: document.getElementById('productDescription').value
            });

            // Cerrar el modal después de guardar
            closeModalFunc();

            // Mostrar mensaje de éxito (puedes implementar un toast o modal de éxito)
            alert('Producto guardado exitosamente');
        });
    }

    // Eventos para editar y eliminar productos (opcional)
    document.querySelectorAll('.btn-edit').forEach(btn => {
        btn.addEventListener('click', function() {
            // Lógica para cargar datos del producto a editar
            document.getElementById('modalTitle').textContent = 'Editar Producto';
            openModal();
        });
    });

    document.querySelectorAll('.btn-delete').forEach(btn => {
        btn.addEventListener('click', function() {
            if (confirm('¿Estás seguro de eliminar este producto?')) {
                this.closest('tr').remove();
            }
        });
    });
});
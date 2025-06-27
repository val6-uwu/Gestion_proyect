const BotonDesplazar = document.querySelectorAll('.toggle-subcategory');
const showFiltersBtn = document.getElementById('show-filters-btn');
const filtersColumn = document.querySelector('.filter');
const overlay = document.getElementById('filters-overlay');

function RemoverLista() {
    BotonDesplazar.forEach(boton => {
        const ul = boton.parentNode.querySelector('ul');
        if (ul) {
            ul.remove();
        }
    });
}

for(let i = 0; i < BotonDesplazar.length; i++) {
    
    BotonDesplazar[i].addEventListener('click', function(event) {
    const ElementoPadre = this.parentNode;
    //Remover ul en caso se de click otra vez a la misma categoria
    const existente = ElementoPadre.querySelector('ul');
    if (existente) {
        existente.remove();
        return; // evita volver a cargarlo si ya estaba
    }

     RemoverLista(); // Elimina las listas anteriores


    const ul = document.createElement('ul');
   
    fetch("../DATA/subcategories.json").
    then(response => response.json()).
    then(data => {
        data.forEach(Element => {
           const subcategories = Element.subcategorias;
           const categoria = BotonDesplazar[i].dataset.category
              // Verifica si la categoria coincide con la del boton
           if(Element.categoria === categoria){

            //Recorre las subcategorias y las agrega a la lista
            subcategories.forEach(subcategory => {
                const li = document.createElement('li');
                li.innerHTML = `<a href="#">${subcategory.nombre}</a>`;
                li.classList.add('subcategory-item');
                ul.appendChild(li);
            });

            ElementoPadre.appendChild(ul);
           }
        });
    })         
});
}
// Función para mostrar los filtros
function openFilters() {
    filtersColumn.classList.add('is-visible');
    overlay.classList.add('is-visible');
    document.body.style.overflow = 'hidden'; // Evita el scroll del fondo
}

        // Función para ocultar los filtros
function closeFilters() {
    filtersColumn.classList.remove('is-visible');
    overlay.classList.remove('is-visible');
    document.body.style.overflow = ''; // Restaura el scroll
}
        // Asignar los eventos a los botones
showFiltersBtn.addEventListener('click', openFilters);
overlay.addEventListener('click', closeFilters); // También cierra al hacer clic en el fondo oscuro

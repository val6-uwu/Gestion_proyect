let BotonDesplazar = document.querySelectorAll('.toggle-subcategory');

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

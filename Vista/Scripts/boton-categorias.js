const listItem = document.querySelectorAll(".listItem");
const subcategorias= document.querySelector('.subcategorias');
const menu = document.querySelector('.menu-desplegable');
const categoryButton = document.querySelector('.btn-categorias');

document.addEventListener('click', function(event) {
  if (!menu.contains(event.target) && !categoryButton.contains(event.target)) {
    menu.style.display = 'none';
  }
});

function EliminarSubCategorias(){
    subcategorias.innerHTML = ''; // Elimina el contenido actual
}
function DesplegarMenu(){

   if (menu.style.display === "none") {
       menu.style.display = "grid";

       return;
   } 
       menu.style.display = "none";
       EliminarSubCategorias();
}
//Asignamos el evento click a cada elemento de la lista categorias
for (let i = 0; i < listItem.length; i++) {
   listItem[i].addEventListener("click", function(event) {
       //Primero eliminamos las subcategorías existentes
       EliminarSubCategorias();
       //Ahora agregamos la clase active al elemento seleccionado,
       //Pero antes eliminamos la clase active de los demás elementos
       listItem.forEach(item => item.classList.remove("active"));
       listItem[i].classList.add("active");

         //Llamamos a la función para renderizar las subcategorías
       RenderizarSubCategoria(listItem[i].dataset.categoria)
   });
}

function RenderizarSubCategoria(category) {

    const subcategoriasContainer = document.querySelector('.subcategorias');    
    const unorderedList = document.createElement('ul');

    fetch('subcategories.json')
        .then(response => response.json())
        .then(data => {
            data.forEach(Element => {
                if (Element.categoria === category) {
                    const subcategorias = Element.subcategorias;

                    subcategorias.forEach(subcategoria => {
                        const ul = document.createElement('ul');

                        // Primer li con nombre en negrita
                        const tituloLi = document.createElement('li');
                        tituloLi.innerHTML = `<b>${subcategoria.nombre}</b>`;
                        ul.appendChild(tituloLi);

                        subcategoria.items.forEach(item => {
                            const li = document.createElement('li');
                            li.innerHTML = `<a href="#">${item}</a>`;
                            ul.appendChild(li);
                        });

                        subcategoriasContainer.appendChild(ul);
                    });
                }
            });
        });
}


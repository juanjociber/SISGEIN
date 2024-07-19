document.addEventListener('DOMContentLoaded', () => {
    const rootAccordion = document.getElementById('contenedor-accordion');
  
    // Evento para guardar una nueva actividad
    document.getElementById('guardarActividad').addEventListener('click', function() {
      const nombreActividad = document.querySelector('#nombreActId').value;
      console.log('Nuevo nombre: ', nombreActividad);
      // Agregar nueva actividad al acordeón
      crearAccordion(rootAccordion, `${nombreActividad}`, 1);
      document.querySelector('#nombreActId').value = '';
      const modal = bootstrap.Modal.getInstance(document.getElementById('actividadModal'));
      modal.hide();
    });
  });
  
  const crearAccordion = (parentElement, actividad, level) => {
    const idUnico = Math.random().toString(36).substring(2, 7); // ID único para evitar colisiones
  
    const accordionItem = document.createElement('div');
    accordionItem.className = 'accordion-item';
  
    const header = document.createElement('h2');
    header.className = 'accordion-header accordion-header--mod';
    header.id = `heading-${idUnico}`;
  
    const button = document.createElement('div');
    button.className = 'accordion-button accordion-button--mod collapsed';
    button.setAttribute('data-bs-toggle', 'collapse');
    button.setAttribute('data-bs-target', `#collapse-${idUnico}`);
    button.setAttribute('aria-expanded', 'false');
    button.setAttribute('aria-controls', `collapse-${idUnico}`);
  
    const actividadDiv = document.createElement('div');
    actividadDiv.className = 'accordion-actividad col-8 text-uppercase';
    actividadDiv.textContent = actividad;
  
    button.appendChild(actividadDiv);
  
    const botonesDiv = document.createElement('div');
    botonesDiv.className = 'accordion-botones';
    botonesDiv.innerHTML = `
      <i class="bi bi-plus-lg icono icono-agregar" data-id="${idUnico}" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
      <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
      <div id="cargar-archivo${idUnico}" style="display: none;">
        <input type="file" id="file-input${idUnico}" accept="image/*" />
      </div>
      <i class="bi bi-paperclip icono icono-cargar" data-id="file-input${idUnico}"></i>
      <i class="bi bi-trash3 icono"></i>
    `;
  
    const itemActividad = document.createElement('div');
    itemActividad.className = 'item-actividad';
    itemActividad.appendChild(button);
    itemActividad.appendChild(botonesDiv);
  
    header.appendChild(itemActividad);
    accordionItem.appendChild(header);
  
    const collapseDiv = document.createElement('div');
    collapseDiv.id = `collapse-${idUnico}`;
    collapseDiv.className = 'accordion-collapse collapse';
    collapseDiv.setAttribute('aria-labelledby', `heading-${idUnico}`);
  
    const bodyDiv = document.createElement('div');
    bodyDiv.className = 'accordion-body accordion-body--mod';
  
    bodyDiv.innerHTML = '<div class="imagenes-actividad"></div>'; // Contenedor para las imágenes
  
    collapseDiv.appendChild(bodyDiv);
    accordionItem.appendChild(collapseDiv);
    parentElement.appendChild(accordionItem);
  
    // Agregar evento para agregar subactividades
    const addSubActivityIcon = botonesDiv.querySelector('.icono-agregar');
    addSubActivityIcon.addEventListener('click', function() {
      crearAccordion(bodyDiv, `Subactividad ${level + 1}`, level + 1);
    });
  
    // Verificar si el input existe antes de agregar el event listener
    const fileInput = document.getElementById(`file-input${idUnico}`);
    if (fileInput) {
      fileInput.addEventListener('change', function(e) {
        const fileList = e.target.files;
        const imageContainer = bodyDiv.querySelector('.imagenes-actividad');
        for (let i = 0; i < fileList.length; i++) {
          const file = fileList[i];
          const reader = new FileReader();
          reader.onload = function(event) {
            const imgDiv = document.createElement('div');
            imgDiv.className = 'image-wrapper';
            imgDiv.style.position = 'relative';
            imgDiv.style.display = 'inline-block';
            imgDiv.style.margin = '10px';
  
            const img = document.createElement('img');
            img.src = event.target.result;
            img.className = 'img-thumbnail';
  
            const removeIcon = document.createElement('i');
            removeIcon.className = 'bi bi-x-circle-fill remove-icon';
            removeIcon.style.position = 'absolute';
            removeIcon.style.top = '5px';
            removeIcon.style.right = '5px';
            removeIcon.style.cursor = 'pointer';
  
            removeIcon.addEventListener('click', function() {
              imgDiv.remove();
            });
  
            imgDiv.appendChild(img);
            imgDiv.appendChild(removeIcon);
            imageContainer.appendChild(imgDiv);
          };
          reader.readAsDataURL(file);
        }
      });
    }
  };
  
  // Manejar el clic en el icono de cargar archivos
  document.addEventListener('click', (e) => {
    if (e.target.classList.contains('icono-cargar')) {
      const id = e.target.getAttribute('data-id');
      const fileInput = document.getElementById(id);
      if (fileInput) {
        fileInput.click();
      }
    }
  });
  
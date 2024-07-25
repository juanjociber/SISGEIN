const limpiarInputs = (selector) => {
    const inputs = document.querySelectorAll(selector);
    inputs.forEach(input => input.value = '');
  };
  
  const cerrarModal = (modalId) => {
    const modal = bootstrap.Modal.getInstance(document.getElementById(modalId));
    modal.hide();
  };
  
  const setValores = (campos) => {
    campos.forEach(({ id, value, isImage }) => {
      const elemento = document.querySelector(`#${id}`);
      if (elemento) {
        if (isImage) {
          elemento.src = value;
        } else {
          elemento.textContent = value;
        }
      }
    });
  };
  
  const fnGuardarActividad = (parentId = 'contenedor-accordion') => {
    // Obtener valores de los inputs
    const actividad = document.querySelector('#nombreActividadInput').value.trim();
    const diagnostico = document.querySelector('#diagnosticoInput').value.trim();
    const trabajo = document.querySelector('#trabajosInput').value.trim();
    const observacion = document.querySelector('#observacionesInput').value.trim();
  
    const campos = [
      { id: 'actividadId', value: actividad },
      { id: 'diagnosticoId', value: diagnostico },
      { id: 'trabajoId', value: trabajo },
      { id: 'observacionId', value: observacion }
    ];
  
    // SETEANDO CAMPOS DEPENDIENDO DEL TIPO DE ELEMENTO
    setValores(campos);
  
    // CREAR ID PARA NUEVO ACORDEÓN
    const idUnico = Date.now();
  
    // CREAR NUEVO ITEM DE ACORDEÓN 
    const nuevoItem = document.createElement('div');
    nuevoItem.classList.add('accordion-item');
    nuevoItem.id = `accordionId-${idUnico}`;
    nuevoItem.innerHTML = `
      <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-${idUnico}">
        <div class="item-actividad">
          <div class="accordion-button accordion-button--mod collapsed" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-${idUnico}" aria-expanded="false" aria-controls="collapseAcordion-${idUnico}" id="gpem${idUnico}">
            <div class="accordion-actividad col-8 text-uppercase" id="actividadId">${actividad}</div>
          </div>
          <div class="accordion-botones">
            <i class="bi bi-plus-lg icono icono-agregar" data-id="${idUnico}" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
            <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
            <i class="bi bi-paperclip icono icono-cargar" data-bs-toggle="modal" data-bs-target="#imagenModal"></i>
            <i class="bi bi-trash3 icono delete-activity" data-id="accordionId-${idUnico}"></i>
          </div>
        </div>
      </h2>
      <div id="collapseAcordion-${idUnico}" class="accordion-collapse collapse" aria-labelledby="accordionHeaderId-${idUnico}">
        <div class="accordion-body accordion-body--mod">
          <!-- CONTENEDOR-DIAGNÓSTICO-TRABAJO-OBSERVACIÓN -->
          <div class="row detalles">
            <div class="detalles-diagnostico col-6">
              <label for="diagnosticoId-${idUnico}" class="form-label mb-0">Diagnóstico</label>
              <p class="mb-1" id="diagnosticoId-${idUnico}">${diagnostico}</p>
            </div>
            <div class="detalles-trabajo col-6">
              <label for="trabajoId-${idUnico}" class="form-label mb-0">Trabajos</label>
              <p class="mb-1" id="trabajoId-${idUnico}">${trabajo}</p>
            </div>
            <div class="detalles-observacion col-12">
              <label for="observacionId-${idUnico}" class="form-label mb-0">Observaciones</label>
              <p class="mb-1" id="observacionId-${idUnico}">${observacion}</p>
            </div>
          </div>
          <!-- CONTENEDOR-IMAGENES -->
          <div class="imagenes-actividad">
            <!-- Aquí puedes agregar la lógica para mostrar las imágenes si es necesario -->
          </div>
          <!-- CONTENEDOR PARA SUBACTIVIDADES -->
          <div class="accordion" id="subAccordion-${idUnico}">
          </div>
        </div>
      </div>
    `;
  
    // Agregar el nuevo ítem al contenedor del acordeón
    document.getElementById(parentId).appendChild(nuevoItem);
  
    // Agregar evento para el icono de agregar subactividad
    const plusIcon = nuevoItem.querySelector('.icono-agregar');
    plusIcon.addEventListener('click', () => {
      // Cambiar el evento del botón de guardar en el modal
      const guardarBtn = document.querySelector('#guardarActividadBtn');
      guardarBtn.removeEventListener('click', guardarBtnClickHandler);
      guardarBtn.addEventListener('click', () => fnGuardarActividad(`subAccordion-${idUnico}`));
    });
  
    limpiarInputs('#modal-body input');
    cerrarModal('actividadModal');
  };
  
  // Guardar el manejador original del botón de guardar actividad
  const guardarBtnClickHandler = () => fnGuardarActividad();
  
  // Agregar evento inicial al botón de guardar actividad
  document.querySelector('#guardarActividadBtn').addEventListener('click', guardarBtnClickHandler);
  
  const fnGuardarDetallesActividad = () => {
    const basePath = "../img/";
  
    const imagen1Input = document.querySelector('#imagen1Input').files[0];
    const imagen2Input = document.querySelector('#imagen2Input').files[0];
  
    const campos = [
      { id: 'titulo1Id', value: document.querySelector('#titulo1Input').value.trim() },
      { id: 'descripcion1Id', value: document.querySelector('#descripcion1Input').value.trim() },
      { id: 'titulo2Id', value: document.querySelector('#titulo2Input').value.trim() },
      { id: 'descripcion2Id', value: document.querySelector('#descripcion2Input').value.trim() }
    ];
  
    if (imagen1Input) {
      const imagen1Path = basePath + imagen1Input.name;
      campos.push({ id: 'imagen1Id', value: imagen1Path, isImage: true });
    }
  
    if (imagen2Input) {
      const imagen2Path = basePath + imagen2Input.name;
      campos.push({ id: 'imagen2Id', value: imagen2Path, isImage: true });
    }
  
    setValores(campos);
    limpiarInputs('#modal-body-imagen input');
    cerrarModal('imagenModal');
  };
  
  const removerImagen = (targetId) => {
    const imageElement = document.getElementById(targetId);
    if (imageElement) {
      imageElement.src = '';
      const inputId = targetId.replace('Id', 'Input');
      const inputElement = document.getElementById(inputId);
      if (inputElement) {
        inputElement.value = '';
      }
    } else {
      console.warn(`Elemento con ID '${targetId}' no encontrado.`);
    }
  };
  
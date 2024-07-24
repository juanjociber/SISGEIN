      document.addEventListener('DOMContentLoaded', () => {
        const agregarActividadBtn = document.getElementById('agregarActividad');
        const guardarActividadBtn = document.getElementById('guardarActividad');
        const actividadForm = document.getElementById('actividadForm');
        const contenedorAccordion = document.getElementById('contenedor-accordion');
        const actividadModalLabel = document.getElementById('actividadModalLabel');
        const actividadNombre = document.getElementById('actividad-nombre');
        const actividadDescripcion = document.getElementById('actividad-descripcion');
        const actividadImagenes = document.getElementById('actividad-imagenes');
        const previewImagenes = document.getElementById('preview-imagenes');

        let editandoActividadId = null;

        agregarActividadBtn.addEventListener('click', () => {
          actividadModalLabel.textContent = 'Agregar Actividad';
          actividadForm.reset();
          previewImagenes.innerHTML = '';
          previewImagenes.style.display = 'none';
          editandoActividadId = null;
        });

        guardarActividadBtn.addEventListener('click', () => {
          const nombre = actividadNombre.value;
          const descripcion = actividadDescripcion.value;
          const imagenes = actividadImagenes.files;

          if (!nombre || !descripcion) {
            alert('Por favor, complete todos los campos.');
            return;
          }

          const actividadId = editandoActividadId ? editandoActividadId : new Date().getTime();

          let actividadHtml = `
            <div class="accordion-item" id="accordionId-${actividadId}">
              <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-${actividadId}">
                <div class="item-actividad">
                  <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-${actividadId}" aria-expanded="false" aria-controls="collapseAcordion-${actividadId}">
                    <div class="accordion-actividad col-8 text-uppercase">${nombre}</div>
                  </div>
                  <div class="accordion-botones">
                    <i class="bi bi-pencil icono icono-editar" data-id="${actividadId}" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                    <i class="bi bi-trash3 icono icono-borrar" data-id="${actividadId}"></i>
                  </div>
                </div>
              </h2>
              <div id="collapseAcordion-${actividadId}" class="accordion-collapse collapse" aria-labelledby="accordionHeaderId-${actividadId}" data-bs-parent="#contenedor-accordion">
                <div class="accordion-body accordion-body--mod">
                  <div class="col-12">${descripcion}</div>
                  <div class="col-12">
                    <div class="imagenes-actividad">`;

          for (let i = 0; i < imagenes.length; i++) {
            actividadHtml += `<div class="grid-imagen"><input type="text" class="form-control form-control-sm" readonly value="${imagenes[i].name}"></div>`;
          }

          actividadHtml += `</div></div></div></div></div>`;

          if (editandoActividadId) {
            const actividadExistente = document.getElementById(`accordionId-${actividadId}`);
            actividadExistente.outerHTML = actividadHtml;
          } else {
            contenedorAccordion.insertAdjacentHTML('beforeend', actividadHtml);
          }

          const actividadModal = bootstrap.Modal.getInstance(document.getElementById('actividadModal'));
          actividadModal.hide();
        });

        contenedorAccordion.addEventListener('click', (event) => {
          if (event.target.classList.contains('icono-borrar')) {
            const actividadId = event.target.getAttribute('data-id');
            const actividadElemento = document.getElementById(`accordionId-${actividadId}`);
            actividadElemento.remove();
          }

          if (event.target.classList.contains('icono-editar')) {
            const actividadId = event.target.getAttribute('data-id');
            editandoActividadId = actividadId;

            const actividadElemento = document.getElementById(`accordionId-${actividadId}`);
            const actividadNombreElemento = actividadElemento.querySelector('.accordion-actividad').textContent.trim();
            const actividadDescripcionElemento = actividadElemento.querySelector('.accordion-body .col-12').textContent.trim();
            const actividadImagenesElementos = actividadElemento.querySelectorAll('.imagenes-actividad input');

            actividadModalLabel.textContent = 'Editar Actividad';
            actividadNombre.value = actividadNombreElemento;
            actividadDescripcion.value = actividadDescripcionElemento;
            previewImagenes.innerHTML = '';
            previewImagenes.style.display = 'block';

            actividadImagenesElementos.forEach(imagenElemento => {
              const imagenNombre = imagenElemento.value;
              previewImagenes.insertAdjacentHTML('beforeend', `<p>${imagenNombre}</p>`);
            });
          }
        });

        actividadImagenes.addEventListener('change', () => {
          const files = actividadImagenes.files;
          previewImagenes.innerHTML = '';
          previewImagenes.style.display = 'block';

          for (let i = 0; i < files.length; i++) {
            previewImagenes.insertAdjacentHTML('beforeend', `<p>${files[i].name}</p>`);
          }
        });
      });



const fnActividades = () =>{
  const formData = new FormData();
  
  const padreActividad = document.querySelector('#gpem1').firstElementChild.textContent;

  console.log(padreActividad);
  const diagnostico = document.querySelector('#detalleDiagnosticoId-1').textContent;
  const trabajo     = document.querySelector('#detalleTrabajoId-1').textContent;
  const observacion = document.querySelector('#detalleObservacionId-1').textContent;
  const titulo1 = document.querySelector('#tituloImagenId1-1').textContent;
  const imagen1 = document.querySelector('#imagenId1-1').src;
  const descripcion1 = document.querySelector('#descripcionImagenId2-1').textContent; 
  const titulo2 = document.querySelector('#tituloImagenId2-1').textContent;
  const imagen2 = document.querySelector('#imagenId2-1').src;
  const descripcion2 = document.querySelector('#descripcionImagenId1-1').textContent; 

  formData.append('padreActividad', padreActividad);
  formData.append('diagnostico', diagnostico);
  formData.append('trabajo', trabajo);
  formData.append('observacion', observacion); 
  formData.append('titulo1', titulo1);
  formData.append('imagen1', imagen1);
  formData.append('descripcion1', descripcion1);
  formData.append('titulo2', titulo2);
  formData.append('imagen2', imagen2);
  formData.append('descripcion2', descripcion2);

  console.log('Datos a enviar: ', {padreActividad, diagnostico, trabajo, observacion,titulo1,imagen1,descripcion1,titulo2,imagen2,descripcion2 });
  console.log(formData);


  // const response = await fetch(``, {
  //   method: 'POST',
  //   body: formData
  // });
  // if (!response.ok) {
  //   throw new Error(response.status + ' ' + response.statusText);
  // }
  // const datos = await response.json();
  // if (!datos.res) {
  //   throw new Error(datos.msg);
  // }
};



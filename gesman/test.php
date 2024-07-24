<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/main.css">
    <title>Actividad</title>
    <style>
      /* Your CSS styles here */
    </style>
  </head>
  <body>
    <!-- START CONTAINER -->
    <div class="container">
      <!-- START CABECERA -->
      <div class="row border-bottom mb-3 fs-5">
        <div class="col-12 fw-bold d-flex justify-content-between">
          <p class="m-0 p-0">CLIENTE</p>
          <input type="text" class="d-none" id="txtIdOt" value="" readonly/>
          <p class="m-0 p-0 text-center text-secondary">GP-INF-1</p>
        </div>
      </div>
      <!-- END CABECERA -->

      <!-- START ENLACES -->
      <div class="row">
        <div class="col-12">
          <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E');" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item fw-bold"><a href="/sisgein/gesman/datoGeneral.php" class="text-decoration-none">INFORME</a></li>
              <li class="breadcrumb-item fw-bold"><a href="/sisgein/gesman/datoEquipo.php" class="text-decoration-none">EQUIPO</a></li>
              <li class="breadcrumb-item fw-bold"><a href="/sisgein/gesman/resumen.php" class="text-decoration-none">RESUMEN</a></li>
              <li class="breadcrumb-item active fw-bold" aria-current="page">ACTIVIDAD</li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- END ENLACES -->

      <div class="row mb-1 border-bottom">
        <div class="col-6 mb-2">
          <button type="button" class="btn btn-outline-primary form-control text-uppercase" data-bs-toggle="modal" data-bs-target="#actividadModal" id="agregarActividad"><i class="bi bi-plus-lg"></i> Agregar</button>
        </div>
      </div>

      <!-- START LISTA DE ACTIVIDADES-->
      <div class="row g-3">
        <div class="col-12 fw-bold d-flex justify-content-between">
          <p class="m-0 p-0 text-center text-secondary text-uppercase listadoActividades">Listado de actividades</p>
        </div>

        <!-- START ACCORDION   -->
        <div class="accordion" id="contenedor-accordion">
          <!-- Aquí se agregarán los ítems dinámicamente -->
        </div>
        <!-- END ACCORDION -->
      </div>
      <!-- END LISTA DE ACTIVIDADES-->
    </div>
    <!-- END CONTAINER -->

    <!-- Modal -->
    <div class="modal fade" id="actividadModal" tabindex="-1" aria-labelledby="actividadModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="actividadModalLabel">Agregar Actividad</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="actividadForm">
              <div class="mb-3">
                <label for="actividadNombre" class="form-label">Nombre de la Actividad</label>
                <input type="text" class="form-control" id="actividadNombre" required>
              </div>
              <div class="mb-3">
                <label for="actividadDescripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="actividadDescripcion" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+PmE5dK4E5pX1Vp4K5nAOv9FTO5W4" crossorigin="anonymous"></script>
    <script>
      document.addEventListener('DOMContentLoaded', (event) => {
    // Evento para agregar un ítem
    document.querySelectorAll('.icono-agregar').forEach(button => {
      button.addEventListener('click', () => {
        const id = button.getAttribute('data-id');
        const modal = document.getElementById('actividadModal');
        // Limpia el formulario del modal
        limpiarModal();
        // Configura el modal para agregar un nuevo ítem
        modal.setAttribute('data-mode', 'add');
        modal.setAttribute('data-id', id);
      });
    });

    // Evento para editar un ítem
    document.querySelectorAll('.bi-pencil-square').forEach(button => {
      button.addEventListener('click', () => {
        const id = button.getAttribute('data-id');
        const modal = document.getElementById('actividadModal');
        // Carga los datos del ítem en el formulario del modal
        cargarDatosModal(id);
        // Configura el modal para editar un ítem existente
        modal.setAttribute('data-mode', 'edit');
        modal.setAttribute('data-id', id);
      });
    });

    // Función para limpiar el formulario del modal
    function limpiarModal() {
      document.querySelector('#actividadModal input[name="titulo"]').value = '';
      document.querySelector('#actividadModal input[name="diagnostico"]').value = '';
      document.querySelector('#actividadModal input[name="trabajo"]').value = '';
      document.querySelector('#actividadModal textarea[name="observaciones"]').value = '';
      // Limpia otros campos según sea necesario
    }

    // Función para cargar datos en el modal
    function cargarDatosModal(id) {
      const actividad = document.getElementById(`accordionId-${id}`);
      const titulo = actividad.querySelector('.accordion-actividad').textContent.trim();
      const diagnostico = actividad.querySelector('.detalles-diagnostico p').textContent.trim();
      const trabajo = actividad.querySelector('.detalles-trabajo p').textContent.trim();
      const observaciones = actividad.querySelector('.detalles-observacion p').textContent.trim();

      document.querySelector('#actividadModal input[name="titulo"]').value = titulo;
      document.querySelector('#actividadModal input[name="diagnostico"]').value = diagnostico;
      document.querySelector('#actividadModal input[name="trabajo"]').value = trabajo;
      document.querySelector('#actividadModal textarea[name="observaciones"]').value = observaciones;
    }

    // Evento para guardar el ítem
    document.getElementById('guardarItem').addEventListener('click', () => {
      const modal = document.getElementById('actividadModal');
      const mode = modal.getAttribute('data-mode');
      const id = modal.getAttribute('data-id');

      const titulo = document.querySelector('#actividadModal input[name="titulo"]').value.trim();
      const diagnostico = document.querySelector('#actividadModal input[name="diagnostico"]').value.trim();
      const trabajo = document.querySelector('#actividadModal input[name="trabajo"]').value.trim();
      const observaciones = document.querySelector('#actividadModal textarea[name="observaciones"]').value.trim();

      if (mode === 'add') {
        agregarItem(titulo, diagnostico, trabajo, observaciones);
      } else if (mode === 'edit') {
        editarItem(id, titulo, diagnostico, trabajo, observaciones);
      }

      // Cierra el modal
      bootstrap.Modal.getInstance(modal).hide();
    });

    // Función para agregar un ítem
    function agregarItem(titulo, diagnostico, trabajo, observaciones) {
      const contenedorAccordion = document.getElementById('contenedor-accordion');
      const nuevoId = Date.now(); // Genera un ID único basado en la marca de tiempo

      const nuevoItem = document.createElement('div');
      nuevoItem.classList.add('accordion-item');
      nuevoItem.id = `accordionId-${nuevoId}`;

      nuevoItem.innerHTML = `
        <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-${nuevoId}">
          <div class="item-actividad">
            <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-${nuevoId}" aria-expanded="true" aria-controls="collapseAcordion-${nuevoId}" id="${nuevoId}">
              <div class="accordion-actividad col-8 text-uppercase">${titulo}</div>
            </div>
            <div class="accordion-botones">
              <i class="bi bi-plus-lg icono icono-agregar" data-id="${nuevoId}" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
              <i class="bi bi-pencil-square icono" data-id="${nuevoId}" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
              <div id="cargar-archivo-${nuevoId}" style="display: none;">
                  <input type="file" id="file-input-${nuevoId}" accept="image/*">
              </div>
              <i class="bi bi-paperclip icono icono-cargar" data-id="file-input-${nuevoId}"></i>
              <i class="bi bi-trash3 icono"></i>
            </div>
          </div>
        </h2>
        <div id="collapseAcordion-${nuevoId}" class="accordion-collapse collapse show" aria-labelledby="accordionHeaderId-${nuevoId}">
            <div class="accordion-body accordion-body--mod">
              <div class="row detalles">
                <div class="detalles-diagnostico col-6">
                  <label for="detalleDiagnosticoId-${nuevoId}" class="form-label mb-0">Diagnóstico</label>
                  <p class="mb-1" id="detalleDiagnosticoId-${nuevoId}">${diagnostico}</p>
                </div>
                <div class="detalles-trabajo col-6">
                  <label for="detalleTrabajoId-${nuevoId}" class="form-label mb-0">Trabajos</label>
                  <p class="mb-1" id="detalleTrabajoId-${nuevoId}">${trabajo}</p>
                </div>
                <div class="detalles-observacion col-12">
                  <label for="detalleObservacionId-${nuevoId}" class="form-label mb-0">Observaciones</label>
                  <p class="mb-1" id="detalleObservacionId-${nuevoId}">${observaciones}</p>
                </div>
              </div>
            </div>
        </div>
      `;

      contenedorAccordion.appendChild(nuevoItem);

      // Asigna eventos a los nuevos botones
      nuevoItem.querySelector('.icono-agregar').addEventListener('click', () => {
        limpiarModal();
        modal.setAttribute('data-mode', 'add');
        modal.setAttribute('data-id', nuevoId);
      });

      nuevoItem.querySelector('.bi-pencil-square').addEventListener('click', () => {
        cargarDatosModal(nuevoId);
        modal.setAttribute('data-mode', 'edit');
        modal.setAttribute('data-id', nuevoId);
      });

      nuevoItem.querySelector('.bi-trash3').addEventListener('click', () => {
        nuevoItem.remove();
      });
    }

    // Función para editar un ítem
    function editarItem(id, titulo, diagnostico, trabajo, observaciones) {
      const actividad = document.getElementById(`accordionId-${id}`);
      actividad.querySelector('.accordion-actividad').textContent = titulo;
      actividad.querySelector('.detalles-diagnostico p').textContent = diagnostico;
      actividad.querySelector('.detalles-trabajo p').textContent = trabajo;
      actividad.querySelector('.detalles-observacion p').textContent = observaciones;
    }
  });
    </script>
  </body>
</html>

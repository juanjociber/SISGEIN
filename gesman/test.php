<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Recursivas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Actividades</h2>
        <div id="accordion" class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Actividad Principal
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <button class="btn btn-primary mb-3" data-bs-toggle="collapse" data-bs-target="#subcollapse1" aria-expanded="false" aria-controls="subcollapse1">
                            Agregar Subactividad
                        </button>
                        <div id="subcollapse1" class="accordion-collapse collapse">
                            <div class="accordion" id="subactivities1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Subactividad Nivel 1
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#subactivities1">
                                        <div class="accordion-body">
                                            <button class="btn btn-primary mb-3" data-bs-toggle="collapse" data-bs-target="#subcollapse2" aria-expanded="false" aria-controls="subcollapse2">
                                                Agregar Subactividad
                                            </button>
                                            <div id="subcollapse2" class="accordion-collapse collapse">
                                                <div class="accordion" id="subactivities2">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="heading3">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                                Subactividad Nivel 2
                                                            </button>
                                                        </h2>
                                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#subactivities2">
                                                            <div class="accordion-body">
                                                                Aquí se puede agregar contenido de la subactividad de nivel 2.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Más subactividades de nivel 2 se pueden agregar aquí -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Más subactividades de nivel 1 se pueden agregar aquí -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Más actividades principales se pueden agregar aquí -->
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/js/bootstrap.min.js"></script>
</body>

</html>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/main.css">
    <title>Sistema GPEM S.A.C</title>
    <style>
      img{
        width: 100%;
      }
      ::placeholder{
        color: #cecccc !important;
        font-weight: 200;
        text-transform: uppercase;
      }
      /*ESTILOS CARGA DE IMAGEN*/
      .file-input-wrapper {
            position: relative;
            display: inline-block;
            cursor: pointer;    
      }

      .file-input-wrapper input[type="file"] {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          opacity: 0;
          cursor: pointer;
      }

      .custom-file-button {
          display: inline-flex;
          align-items: center;
          padding: 0.5em 1em;
          background-color: #6c757d;
          color: white;
          border: none;
          border-radius: 5px;
          font-size: 1em;
          text-align: center;
          cursor: pointer;
      }
      .custom-file-button i {
          margin-right: 0.5em;
      }
      .preview {
          width: 300px;
          height: auto;
          border: 2px solid #000;
          border-radius: 10px;
          box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
          display: none;
          margin-top: 1em;
      }
      .ocultarDiv{
        display: none
      }
      .accordion-body--mod{
        padding-right: 10px;
        padding-left: 10px;
      }
      .accordion-button::after{
        width: 0;
      }
      .accordion-button--mod{
        padding: 0.5rem;
        position: relative;
      }
      .accordion-botones{
        position:absolute;
        top:5px;
        right: 0;
        z-index: 1000;
        display:flex;
      }
      .accordion-botones i{
        font-size:20px;
        margin-right: 1rem;
        cursor: pointer;

      }
      .form-label{
        color:#212529;
        font-weight:300; 
      }
      @media(max-width:767px){
        .form-label{
          font-size: 13px;
        }
        .listadoAcvidades{
          font-size: 13px;
        }
        .accordion-actividad{
          font-size: 13px;
        }
      }
      @media(min-width:768px){
        .mt--mod{
          margin-top: 17px !important;
        }
        .accordion-actividad{
          margin-top: 0 !important;
        }
        .accordion-botones{
          margin-top: 3px;
        }
      }
      @media(min-width:992px){
        .form-label{
          font-size: 15px;
        }
        .listadoAcvidades{
          font-size: 15px;
        }
        .accordion-actividad{
          font-size: 15px;
        }
      }
      .form-control{
        border-radius:.25rem;
      }
      .btn-control{
        padding:.375rem .75rem;
      }
      .fixed-size-textarea {
        resize: none; /* Evita que el textarea se pueda redimensionar */
      }
      .accordion-actividad{
        color: #212529;
        font-weight: 300;
        margin-top: 1.5rem;
        text-align: justify;
      }
      .accordion-header--mod{
        border: none !important;
      }
      .item-actividad{
        position:relative;
      }
      .imagenes-actividad{
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 5px;
      }
      @media(min-width:992px){
        .imagenes-actividad{
          grid-template-columns: 1fr 1fr 1fr 1fr;
        }
      }
      .imagenes-actividad input{
        text-align: center;
      }
      .grid-imagen{
        padding-top:15px;
        padding-bottom:5px;
      }

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
              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/datoGeneral.php" class="text-decoration-none">INFORME</a></li>
                      <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/datoEquipo.php" class="text-decoration-none">EQUIPO</a></li>
                      <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/resumen.php" class="text-decoration-none">RESUMEN</a></li>
                      <li class="breadcrumb-item active fw-bold" aria-current="page">ACTIVIDAD</li>
                  </ol>
              </nav>
          </div>
      </div>
      <!-- END ENLACES -->

      <div class="row mb-1 border-bottom">
          <div class="col-6 mb-2">
              <button type="button" class="btn btn-outline-primary form-control text-uppercase" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo" id="agregarActividad"><i class="bi bi-plus-lg"></i> Agregar</button>
          </div>
      </div>

      <!-- START LISTA DE ACTIVIDADES-->
      <div class="row g-3">
        <div class="col-12 fw-bold d-flex justify-content-between">
          <p class="m-0 p-0 text-center text-secondary text-uppercase listadoActividades">Listado de actividades</p>
        </div>

        <!-- START ACCORDION   -->
        <div class="accordion" id="contenedor-accordion">
          
          <!-- CONTENEDOR DE CADA ITEM-ACCORDION -->
          <div class="accordion-item" id="accordionId-1">
            <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-1">
              <div class="item-actividad">
                <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-1" aria-expanded="false" aria-controls="collapseAcordion-1" id="gpem1">
                  <div class="accordion-actividad col-8 text-uppercase">ACTIVIDAD 1</div>
                </div>
                <div class="accordion-botones">
                  <i class="bi bi-plus-lg icono icono-agregar" data-id="1" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                  <i class="bi bi-pencil icono icono-editar" data-id="1" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                  <i class="bi bi-trash3 icono icono-borrar" data-id="1"></i>
                </div>
              </div>
            </h2>
            <div id="collapseAcordion-1" class="accordion-collapse collapse" aria-labelledby="accordionHeaderId-1" data-bs-parent="#contenedor-accordion">
              <div class="accordion-body accordion-body--mod">
                <div class="col-12">Descripción de la actividad 1.</div>
                <div class="col-12">
                  <div class="imagenes-actividad">
                    <div class="grid-imagen"><input type="text" class="form-control form-control-sm" readonly value="imagen1.jpg"></div>
                    <div class="grid-imagen"><input type="text" class="form-control form-control-sm" readonly value="imagen2.jpg"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN DEL CONTENEDOR DE CADA ITEM-ACCORDION -->

        </div>
        <!-- END ACCORDION -->

      </div>
      <!-- END LISTA DE ACTIVIDADES-->

    </div>
    <!-- END CONTAINER -->

    <!-- START MODAL AGREGAR ACTIVIDAD -->
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
                <label for="actividad-nombre" class="form-label">Nombre de la Actividad:</label>
                <input type="text" class="form-control" id="actividad-nombre" placeholder="Nombre de la actividad">
              </div>
              <div class="mb-3">
                <label for="actividad-descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control fixed-size-textarea" id="actividad-descripcion" rows="3" placeholder="Descripción de la actividad"></textarea>
              </div>
              <div class="mb-3">
                <label for="actividad-imagenes" class="form-label">Imágenes:</label>
                <div class="file-input-wrapper">
                  <div class="custom-file-button">
                    <i class="bi bi-upload"></i> Seleccionar imágenes
                  </div>
                  <input type="file" id="actividad-imagenes" accept="image/*" multiple>
                </div>
                <div id="preview-imagenes" class="preview"></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="guardarActividad">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL AGREGAR ACTIVIDAD -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
    </script>
  </body>
</html>

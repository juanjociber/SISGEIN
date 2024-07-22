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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

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
      @media(min-width:92px){
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
                  <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                  <div id="cargar-archivo-1" style="display: none;">
                    <input type="file" id="file-input-1" accept="image/*">
                  </div>
                  <i class="bi bi-paperclip icono icono-cargar" data-id="file-input-1"></i>
                  <i class="bi bi-trash3 icono"></i>
                </div>
              </div>
            </h2>
            <div id="collapseAcordion-1" class="accordion-collapse collapse show" aria-labelledby="accordionHeaderId-1" style="">
                <div class="accordion-body accordion-body--mod">
                  <!-- CONTENEDOR-DIAGNÓSTICO-TRABAJO-OBSERVACIÓN -->
                  <div class=" row detalles">
                    <div class="detalles-diagnostico col-6">
                      <label for="detalleDiagnosticoId-1" class="form-label mb-0">Diagnóstico</label>
                      <input type="text" class="form-control" id="detalleDiagnosticoId-1" placeholder="Ingrese el diagnóstico.">
                    </div>
                    <div class="detalles-trabajo col-6">
                      <label for="detalleTrabajoId-1" class="form-label mb-0">Trabajos</label>
                      <input type="text" class="form-control" id="detalleTrabajoId-1" placeholder="Ingrese el trabajo.">
                    </div>
                    <div class="detalles-observacion col-12">
                      <label for="detalleObservacionId-1" class="form-label mb-0">Observaciones</label>
                      <input type="text" class="form-control" id="detalleObservacionId-1" placeholder="Ingrese la observación.">
                    </div>
                  </div>
                  <!-- CONTENEDOR-IMAGENES -->
                  <div class="imagenes-actividad">
                    <div class="grid-imagen">
                      <div class="titulo-imagen">
                        <input type="text" class="form-control" id="tituloImagenId1-1" placeholder="Título 1">
                      </div>
                      <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                        <img src="../img/imagen1.png" id="imagenId1-1" class="img-thumbnail">
                        <i class="bi bi-x-circle-fill remove-icon" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                      </div>
                      <div class="descripcion-imagen">
                        <input type="text" class="form-control" id="descripcionImagenId1-1" placeholder="Descripción 1">
                      </div>
                    </div>
                    <div class="grid-imagen">
                      <div class="titulo-imagen">
                        <input type="text" class="form-control" id="tituloImagenId2-1" placeholder="Título 2">
                      </div>
                      <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                        <img src="../img/imagen2.png" id="imagenId2-1" class="img-thumbnail">
                        <i class="bi bi-x-circle-fill remove-icon" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                      </div>
                      <div class="descripcion-imagen">
                        <input type="text" class="form-control" id="descripcionImagenId2-1" placeholder="Descripción 2">
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item" id="accordionId-2">
                      <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-2">
                        <div class="item-actividad">
                          <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-2" aria-expanded="true" aria-controls="collapseAcordion-2" id="2">
                            <div class="accordion-actividad col-8 text-uppercase">SUBACTIVIDAD 1.1</div>
                          </div>
                          <div class="accordion-botones">
                            <i class="bi bi-plus-lg icono icono-agregar" data-id="2" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                            <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                            <div id="cargar-archivo-2" style="display: none;">
                                <input type="file" id="file-input-2" accept="image/*">
                            </div>
                            <i class="bi bi-paperclip icono icono-cargar" data-id="file-input-2"></i>
                            <i class="bi bi-trash3 icono"></i>
                          </div>
                        </div>
                      </h2>
                      <div id="collapseAcordion-2" class="accordion-collapse collapse show" aria-labelledby="accordionHeaderId-2" style="">
                          <div class="accordion-body accordion-body--mod">
                              <!-- CONTENEDOR-DIAGNÓSTICO-TRABAJO-OBSERVACIÓN -->
                              <div class=" row detalles">
                                <div class="detalles-diagnostico col-6">
                                  <label for="detalleDiagnosticoId-2" class="form-label mb-0">Diagnóstico</label>
                                  <input type="text" class="form-control" id="detalleDiagnosticoId-2" placeholder="Ingrese el diagnóstico.">
                                </div>
                                <div class="detalles-trabajo col-6">
                                  <label for="detalleTrabajoId" class="form-label mb-0">Trabajos</label>
                                  <input type="text" class="form-control" id="detalleTrabajoId-2" placeholder="Ingrese el trabajo.">
                                </div>
                                <div class="detalles-observacion col-12">
                                  <label for="detalleObservacionId" class="form-label mb-0">Observaciones</label>
                                  <input type="text" class="form-control" id="detalleObservacionId-2" placeholder="Ingrese la observación.">
                                </div>
                              </div>
                              <!-- CONTENEDOR-IMAGENES -->
                              <div class="imagenes-actividad">
                                <div class="grid-imagen">
                                  <div class="titulo-imagen">
                                    <input type="text" class="form-control" id="tituloImagenId1-2" placeholder="Título 1">
                                  </div>
                                  <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                                    <img src="../img/imagen3.png" id="imagenId1-2" class="img-thumbnail">
                                    <i class="bi bi-x-circle-fill remove-icon" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                                  </div>
                                  <div class="descripcion-imagen">
                                    <input type="text" class="form-control" id="descripcionImagenId1-2" placeholder="Descripción 1">
                                  </div>
                                </div>
                                <div class="grid-imagen">
                                  <div class="titulo-imagen">
                                    <input type="text" class="form-control" id="tituloImagenId2-2" placeholder="Título 2">
                                  </div>
                                  <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                                    <img src="../img/imagen4.png" id="imagenId2-2" class="img-thumbnail">
                                    <i class="bi bi-x-circle-fill remove-icon" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                                  </div>
                                  <div class="descripcion-imagen">
                                    <input type="text" class="form-control" id="descripcionImagenId2-2" placeholder="Descripción 2">
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item" id="accordionId-3">
                                  <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-3">
                                    <div class="item-actividad">
                                      <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-3" aria-expanded="true" aria-controls="collapseAcordion-3" id="3">
                                        <div class="accordion-actividad col-8 text-uppercase">SUBACTIVIDAD 1.1.1</div>
                                      </div>
                                      <div class="accordion-botones">
                                        <i class="bi bi-plus-lg icono icono-agregar" data-id="3" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                                        <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                                        <div id="cargar-archivo-3" style="display: none;">
                                            <input type="file" id="file-input-3" accept="image/*">
                                        </div>
                                        <i class="bi bi-paperclip icono icono-cargar" data-id="file-input-3"></i>
                                        <i class="bi bi-trash3 icono"></i>
                                      </div>
                                    </div>
                                  </h2>
                                  <div id="collapseAcordion-3" class="accordion-collapse collapse show" aria-labelledby="accordionHeaderId-3" style="">
                                      <div class="accordion-body accordion-body--mod">
                                          <!-- CONTENEDOR-DIAGNÓSTICO-TRABAJO-OBSERVACIÓN -->
                                          <div class=" row detalles">
                                            <div class="detalles-diagnostico col-6">
                                              <label for="detalleDiagnosticoId-3" class="form-label mb-0">Diagnóstico</label>
                                              <input type="text" class="form-control" id="detalleDiagnosticoId-3" placeholder="Ingrese el diagnóstico.">
                                            </div>
                                            <div class="detalles-trabajo col-6">
                                              <label for="detalleTrabajoId-3" class="form-label mb-0">Trabajos</label>
                                              <input type="text" class="form-control" id="detalleTrabajoId-3" placeholder="Ingrese el trabajo.">
                                            </div>
                                            <div class="detalles-observacion col-12">
                                              <label for="detalleObservacionId-3" class="form-label mb-0">Observaciones</label>
                                              <input type="text" class="form-control" id="detalleObservacionId-3" placeholder="Ingrese la observación.">
                                            </div>
                                          </div>
                                          <!-- CONTENEDOR-IMAGENES -->
                                          <div class="imagenes-actividad">
                                            <div class="grid-imagen">
                                              <div class="titulo-imagen">
                                                <input type="text" class="form-control" id="tituloImagenId1-3" placeholder="Título 1">
                                              </div>
                                              <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                                                <img src="../img/imagen5.png" id="imagenId1-3" class="img-thumbnail">
                                                <i class="bi bi-x-circle-fill remove-icon" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                                              </div>
                                              <div class="descripcion-imagen">
                                                <input type="text" class="form-control" id="descripcionImagenId1-3" placeholder="Descripción 1">
                                              </div>
                                            </div>
                                            <div class="grid-imagen">
                                              <div class="titulo-imagen">
                                                <input type="text" class="form-control" id="tituloImagenId2" placeholder="Título 2">
                                              </div>
                                              <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                                                <img src="../img/imagen6.png" id="imagenId2-3" class="img-thumbnail">
                                                <i class="bi bi-x-circle-fill remove-icon" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                                              </div>
                                              <div class="descripcion-imagen">
                                                <input type="text" class="form-control" id="descripcionImagenId2-3" placeholder="Descripción 2">
                                              </div>
                                            </div>
                                          </div> 
                                          <div class="accordion-item" id="accordionId-4">
                                              <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-4">
                                                  <div class="item-actividad">
                                                      <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-4" aria-expanded="false" aria-controls="collapseAcordion-4" id="4">
                                                        <div class="accordion-actividad col-8 text-uppercase">SUBACTIVIDAD 1.1.1.1</div>
                                                      </div>
                                                      <div class="accordion-botones">
                                                        <i class="bi bi-plus-lg icono icono-agregar" data-id="4" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                                                        <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                                                        <div id="cargar-archivo-4" style="display: none;">
                                                            <input type="file" id="file-input-4" accept="image/*">
                                                        </div>
                                                        <i class="bi bi-paperclip icono icono-cargar" data-id="file-input-4"></i>
                                                        <i class="bi bi-trash3 icono"></i>
                                                      </div>
                                                  </div>
                                              </h2>
                                              <div id="collapseAcordion-4" class="accordion-collapse collapse show" aria-labelledby="accordionHeaderId-4">
                                                  <div class="accordion-body accordion-body--mod">
                                                      <!-- CONTENEDOR-DIAGNÓSTICO-TRABAJO-OBSERVACIÓN -->
                                                      <div class=" row detalles">
                                                        <div class="detalles-diagnostico col-6">
                                                          <label for="detalleDiagnosticoId-4" class="form-label mb-0">Diagnóstico</label>
                                                          <input type="text" class="form-control" id="detalleDiagnosticoId-4" placeholder="Ingrese el diagnóstico.">
                                                        </div>
                                                        <div class="detalles-trabajo col-6">
                                                          <label for="detalleTrabajoId-4" class="form-label mb-0">Trabajos</label>
                                                          <input type="text" class="form-control" id="detalleTrabajoId-4" placeholder="Ingrese el trabajo.">
                                                        </div>
                                                        <div class="detalles-observacion col-12">
                                                          <label for="detalleObservacionId-4" class="form-label mb-0">Observaciones</label>
                                                          <input type="text" class="form-control" id="detalleObservacionId-4" placeholder="Ingrese la observación.">
                                                        </div>
                                                      </div>
                                                      <!-- CONTENEDOR-IMAGENES -->
                                                      <div class="imagenes-actividad">
                                                        <div class="grid-imagen">
                                                          <div class="titulo-imagen">
                                                            <input type="text" class="form-control" id="tituloImagenId1-4" placeholder="Título 1">
                                                          </div>
                                                          <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                                                            <img src="../img/imagen7.png" id="imagenId1-4" class="img-thumbnail">
                                                            <i class="bi bi-x-circle-fill remove-icon" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                                                          </div>
                                                          <div class="descripcion-imagen">
                                                            <input type="text" class="form-control" id="descripcionImagenId1-4" placeholder="Descripción 1">
                                                          </div>
                                                        </div>
                                                        <div class="grid-imagen">
                                                          <div class="titulo-imagen">
                                                            <input type="text" class="form-control" id="tituloImagenId2-4" placeholder="Título 2">
                                                          </div>
                                                          <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                                                            <img src="../img/imagen8.png" id="imagenId2-4" class="img-thumbnail">
                                                            <i class="bi bi-x-circle-fill remove-icon" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                                                          </div>
                                                          <div class="descripcion-imagen">
                                                            <input type="text" class="form-control" id="descripcionImagenId2-4" placeholder="Descripción 2">
                                                          </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- CONTENEDOR DE CADA ITEM-ACCORDION -->
        
        </div>
        <!-- FIN ACCORDION -->
          
        <div class="col-6">
          <button class="btn btn-primary text-uppercase fw-light" onclick="sendActividades()">Guardar <i class="bi bi-floppy"></i></button>
        </div>
      </div>
      <!-- END LISTA DE ACTIVIDADES-->

      <!-- START MODAL PARA AGREGAR ACTIVIDADES Y SUBACTIVIDADES -->
      <div class="modal fade" id="actividadModal" tabindex="-1" aria-labelledby="actividadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title fs-5 text-uppercase" id="actividadModalLabel">Actividad</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- START MODAL-BODY -->
            <div class="modal-body">
              <div class="row">
                <div id="campoactividad">
                  <label for="nombreActId" class="form-label mb-0">Nombre de la Actividad</label>
                  <input type="text" class="form-control" id="nombreActId" placeholder="Ingrese el nombre de la actividad.">
                </div>

                <div id="camposubactividad" class="mt-3" style="display: none;">
                  <label for="nombreSubActId" class="form-label">Nombre de la Subactividad</label>
                  <input type="text" class="form-control" id="nombreSubActId" placeholder="Ingrese el nombre de la subactividad.">
                </div>

                <div id="campoDiagnostico" class="col-md-12 mt-2">
                  <label for="diagnosticoId" class="form-label mb-0">Diagnóstico</label>
                  <textarea name="diagnosticos" class="form-control fixed-size-textarea" row="4" id="diagnosticoId" placeholder="Ingrese el diagnositico."></textarea>
                </div>

                <div id="campoTrabajo" class="col-md-12 mt-2">
                  <label for="trabajosId" class="form-label mb-0">Trabajos</label>
                  <textarea name="trabajos" class="form-control fixed-size-textarea" row="4" id="trabajosId" placeholder="Ingrese los trabajos realizados."></textarea>
                </div>

                <div id="campoObservacion" class ="col-md-12 mt-2">
                  <label for="observacionesId" class="form-label mb-0">Observación</label>
                  <textarea name="observaciones" class="form-control fixed-size-textarea" row="4" id="observacionesId" placeholder="Ingrese las observaciones encontradas."></textarea>
                </div>

                <div id="contenedorGuardarActividad" class="col-6 mt-4">
                  <button id="guardarActividad" class="btn btn-primary text-uppercase pt-2 pb-2 col-12" style="font-weight:200;">Guardar <i class="bi bi-floppy"></i></button>
                </div>
              </div>

            </div>
            <!-- END MODAL-BODY -->
          </div>
        </div>
      </div>
      <!-- END MODAL -->

    </div><!--FIN CONTAINER-->

    <script src="../js/actividad.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <!-- <script>

      let nombreActividad = null;

      document.addEventListener('DOMContentLoaded', () => {
        const rootAccordion = document.getElementById('contenedor-accordion');

        //ALGORIRMO PARA AGREGAR NUEVA ACTIVIDAD
        document.querySelector('#agregarActividad').addEventListener('click',() =>{
          document.querySelector('#contenedorGuardarActividad').style.display='block';
          document.querySelector('#contenedorGuardarSubActividad').style.display='none';
          document.querySelector('#nombreActId').removeAttribute('disabled','disabled');
        });

        // ALGORITMO PARA GUARDAR ACTIVIDAD
        document.getElementById('guardarActividad').addEventListener('click', function() {
          nombreActividad = document.querySelector('#nombreActId').value;
          if (nombreActividad.trim() === '') return; // No hacer nada si el campo está vacío

          // AGREGANDO NUEVA ACTIVIDAD
          crearAccordion(rootAccordion, `${nombreActividad}`, 1);

          document.querySelector('#nombreActId').value = '';
          const modal = bootstrap.Modal.getInstance(document.getElementById('actividadModal'));
          modal.hide();
        });

        // ALGORITMO PARA GUARDAR SUBACTIVIDAD
        document.getElementById('guardarSubactividad').addEventListener('click', function() {
          const nombreSubactividad = document.querySelector('#nombreSubActId').value;
          if (nombreSubactividad.trim() === '') return; // No hacer nada si el campo está vacío

          const currentActivityId = document.querySelector('#actividadModal').getAttribute('data-current-activity-id');
          const activityElement = document.querySelector(`#collapse-${currentActivityId} .accordion-body`);

          // AGREGAR SUBACTIVIDAD
          crearAccordion(activityElement, `${nombreSubactividad}`, 1);
          document.querySelector('#nombreSubActId').value = '';
          document.querySelector('#camposubactividad').style.display = 'none';
          document.querySelector('#nombreActId').value = '';
          // document.querySelector('#nombreActId').setAttribute('disabled','disabled');
          const modal = bootstrap.Modal.getInstance(document.getElementById('actividadModal'));
          modal.hide();
        });
      });

      const crearAccordion = (parentElement, actividad, level) => {
        const idUnico = Math.random().toString(36).substring(2, 7); // ID único para evitar colisiones

        const accordionItem = document.createElement('div');
        accordionItem.className = 'accordion-item';
        accordionItem.setAttribute('id',`accordion-item-${idUnico}`);

        const header = document.createElement('h2');
        header.className = 'accordion-header accordion-header--mod';
        header.id = `heading-${idUnico}`;

        const button = document.createElement('div');
        button.className = 'accordion-button accordion-button--mod collapsed';
        button.setAttribute('data-bs-toggle', 'collapse');
        button.setAttribute('data-bs-target', `#collapse-${idUnico}`);
        button.setAttribute('aria-expanded', 'false');
        button.setAttribute('aria-controls', `collapse-${idUnico}`);
        button.setAttribute('id',`${idUnico}` );

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

        // EVENTO PARA AGREGAR SUBACTIVIDAD
        const addSubActivityIcon = botonesDiv.querySelector('.icono-agregar');
        addSubActivityIcon.addEventListener('click', function(e) {
            // MOSTRAR CAMPO PARA INGRESAR SUBACTIVIDAD EN EL MODAL
            document.querySelector('#camposubactividad').style.display = 'block';
            // OCULTAR CAMPO ACTIVIDAD
            document.querySelector('#nombreActId').value =actividad;
            document.querySelector('#nombreActId').setAttribute('disabled','disabled');
            // OCULTAR BOTON GUARDAR ACTIVIDAD
            document.querySelector('#contenedorGuardarActividad').style.display='none';
            // MOSTRAR BOTON GUARAR SUBACTIVIDAD
            document.querySelector('#contenedorGuardarSubActividad').style.display='block';
            // ESTABLECER EL ID DE LA ACTIVIDAD ACTUAL EN EL MODAL
            document.querySelector('#actividadModal').setAttribute('data-current-activity-id', idUnico);

            console.log(e.target);
        });

        // VERIFICANDO SI EL INPUT EXISTE ANTES DE AGREGAR EL 'eventListener'
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
      // ALGORITMO PARA CARGAR IMAGEN 
      document.addEventListener('click', (e) => {
        if (e.target.classList.contains('icono-cargar')) {
          const id = e.target.getAttribute('data-id');
          const fileInput = document.getElementById(id);
          if (fileInput) {
            fileInput.click();
          }
        }
      });

    </script> -->
  
  </body>
</html>
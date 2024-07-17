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
          padding-right: 0 !important;
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
          top:0;
          right: 0;
        }
        .accordion-botones i{
          font-size:20px;
          margin-right: 1rem;
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
        }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row border-bottom mb-3 fs-5">
          <div class="col-12 fw-bold d-flex justify-content-between">
            <p class="m-0 p-0">CLIENTE</p>
              <input type="text" class="d-none" id="txtIdOt" value="" readonly/>
            <p class="m-0 p-0 text-center text-secondary">GP-INF-1</p>
          </div>
      </div>

      <div class="row">
          <div class="col-12">
              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/datoGeneral.php" class="text-decoration-none">INFORME</a></li>
                      <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/datoEquipo.php" class="text-decoration-none">EQUIPO</a></li>
                      <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/resumen.php" class="text-decoration-none">RESUMEN</a></li>
                      <li class="breadcrumb-item active fw-bold" aria-current="page">ACTIVIDADES</li>
                  </ol>
              </nav>
          </div>
      </div>

      <div class="row mb-1 border-bottom">
          <div class="col-6 mb-2">
              <button type="button" class="btn btn-outline-primary form-control text-uppercase" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"><i class="bi bi-plus-lg"></i> Crear actividad</button>
          </div>
      </div>

      <!--LISTA DE ACTIVIDADES-->
      <div class="row g-3">
        <div class="col-12 fw-bold d-flex justify-content-between">
          <p class="m-0 p-0 text-center text-secondary text-uppercase listadoActividades">Listado de actividades</p>
        </div>

         <!-- INICIO ACCORDION   -->
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <!-- ITEM 1  -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <!-- START BUTTON COLLAPSED -->
              <div class="accordion-button accordion-button--mod collapsed" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                <div class="accordion-botones">
                  <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                  <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                  <i class="bi bi-paperclip"></i>
                  <i class="bi bi-trash3"></i>
                </div>
                <div class="accordion-actividad">
                  Actividad1 Actividad1 Actividad1 Actividad1 Actividad1 Actividad1 Actividad1
                </div>
              </div><!-- FIN BUTTON COLLAPSED -->
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <!-- START BODY -->
              <div class="accordion-body accordion-body--mod">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <!-- START BUTTON COLLAPSED -->
                    <div class="accordion-button accordion-button--mod collapsed" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      <div class="accordion-botones">
                        <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                        <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                        <i class="bi bi-paperclip"></i>
                        <i class="bi bi-trash3"></i>
                      </div>
                      <div class="accordion-actividad">
                        Subactividad1
                      </div>
                    </div><!-- FIN BUTTON COLLAPSED -->
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body accordion-body--mod">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                          <!-- START BUTTON COLLAPSED -->
                          <div class="accordion-button accordion-button--mod collapsed" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <div class="accordion-botones">
                              <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                              <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                              <i class="bi bi-paperclip"></i>
                              <i class="bi bi-trash3"></i>
                            </div>
                            <div class="accordion-actividad">
                              Subactividad1
                            </div>
                          </div><!-- FIN BUTTON COLLAPSED -->
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- FINAL BODY -->
            </div>
          </div>

          <!-- ITEM 2 -->
          <div class="accordion-item mt-2">
            <h2 class="accordion-header" id="panelsStayOpen-headingDos">
              <!-- START BUTTON COLLAPSED -->
              <div class="accordion-button accordion-button--mod collapsed" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                <div class="accordion-botones">
                  <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                  <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                  <i class="bi bi-paperclip"></i>
                  <i class="bi bi-trash3"></i>
                </div>
                <div class="accordion-actividad">
                  Actividad2
                </div>
              </div><!-- FIN BUTTON COLLAPSED -->
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingDos">
              <!-- START BODY -->
              <div class="accordion-body accordion-body--mod">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <!-- START BUTTON COLLAPSED -->
                    <div class="accordion-button accordion-button--mod collapsed" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      <div class="accordion-botones">
                        <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                        <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                        <i class="bi bi-paperclip"></i>
                        <i class="bi bi-trash3"></i>
                      </div>
                      <div class="accordion-actividad">
                        Subactividad2
                      </div>
                    </div><!-- FIN BUTTON COLLAPSED -->
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body accordion-body--mod">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                          <!-- START BUTTON COLLAPSED -->
                          <div class="accordion-button accordion-button--mod collapsed" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <div class="accordion-botones">
                              <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                              <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#actividadModal" data-bs-whatever="@mdo"></i>
                              <i class="bi bi-paperclip"></i>
                              <i class="bi bi-trash3"></i>
                            </div>
                            <div class="accordion-actividad">
                              Subactividad2
                            </div>
                          </div><!-- FIN BUTTON COLLAPSED -->
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- FINAL BODY -->
            </div>
          </div>
          
        </div> <!-- FIN ACCORDION -->
          
        <div class="col-sm-3">
          <button class="btn btn-primary text-uppercase fw-200">Guardar <i class="bi bi-floppy"></i></button>
        </div>
      </div>

      <!--MODAL-->
      <div class="modal fade" id="actividadModal" tabindex="-1" aria-labelledby="actividadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h1 class="modal-title fs-5 text-uppercase" id="actividadModalLabel">Actividad</h1>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          <div class="modal-body">
            <!--ACTIVIDAD-->
            <div class="row g-3">
              <div class="col-12 mt-2">
                <label for="actividadesId" class="form-label mb-0">Nombre de actividad</label>
                <input type="text" class="form-control" id="actividadesId">
              </div>
              <div class="col-md-12 mt-2">
                <label for="diagnosticoId" class="form-label mb-0">Diagnóstico</label>
                <textarea name="diagnosticos" class="form-control fixed-size-textarea" row="4" id="diagnosticoId"></textarea>
              </div>
              <div class="col-md-12 mt-2">
                <label for="trabajosId" class="form-label mb-0">Trabajos</label>
                <textarea name="trabajos" class="form-control fixed-size-textarea" row="4" id="trabajosId"></textarea>
              </div>
              <div class="col-md-12 mt-2">
                <label for="observacionesId" class="form-label mb-0">Observación</label>
                <textarea name="observaciones" class="form-control fixed-size-textarea" row="4" id="observacionesId"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div><!--FIN CONTAINER-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../js/actividad.js"></script>
  
  </body>
</html>
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
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row border-bottom mb-3 fs-5">
          <div class="col-12 fw-bold d-flex justify-content-between">
            <p class="m-0 p-0">CLIENTE</p>
              <input type="text" class="d-none" id="txtIdOt" value="" readonly/>
            <p class="m-0 p-0 text-center text-secondary">INFORME GP-INF-1</p>
          </div>
      </div>

      <div class="row">
          <div class="col-12">
              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/datoGeneral.php" class="text-decoration-none">DATOS GENERALES</a></li>
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
          <p class="m-0 p-0 text-center text-secondary text-uppercase">Listado de actividades</p>
        </div>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between">
            <div class="fw-bold">Actividad01 <small class="text-secondary">01/01/2024</small></div><span class="badge bg-primary">Proceso</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <div class="fw-bold">Actividad02 <small class="text-secondary">01/02/2024</small></div><span class="badge bg-success">Terminado</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <div class="fw-bold">Actividad03 <small class="text-secondary">01/03/2024</small></div><span class="badge bg-secondary">Anulado</span>
          </li>
        </ul>
        <div class="col-sm-3">
          <a href="/sigein/gesman/resumen.php" class="btn btn-primary form-control"><i class="bi bi-arrow-left-square"></i> Atrás</a>
        </div>
        <div class="col-sm-3">
          <button class="btn btn-success"><i class="bi bi-floppy"></i> Guardar</button>
        </div>
      </div>

      <!--MODAL-->
      <div class="modal fade" id="actividadModal" tabindex="-1" aria-labelledby="actividadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h1 class="modal-title fs-5 text-uppercase" id="actividadModalLabel">Actividad nueva</h1>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          <div class="modal-body">
            <!--ACTIVIDAD-->
            <div class="row g-3">
              <div class="col-12">
                <label for="actividadesId" class="form-label">Actividad</label>
                <input type="text" class="form-control" id="actividadesId">
              </div>
              <div class="col-md-12">
                <label for="diagnosticoId" class="form-label">Diagnóstico</label>
                <textarea name="diagnosticos" class="form-control" id="diagnosticoId"></textarea>
              </div>
              <div class="col-md-12">
                <label for="trabajosId" class="form-label">Trabajos</label>
                <textarea name="trabajos" class="form-control" id="trabajosId"></textarea>
              </div>
              <div class="col-md-12 col-lg-6">
                <label for="tituloUnoId" class="form-label">Título [1]</label>
                <input type="text" class="form-control" id="tituloUnoId">
              </div>
              <div class="col-md-12 col-lg-6">
                <label class="form-label" for="inputGroupFile02">Cargar[1]</label>
                <input type="file" class="form-control" id="inputGroupFile02" multiple>
              </div>
              <div class="col-md-12 col-lg-12">
                <label for="descripcionUnoId" class="form-label">Descripción [1]</label>
                <textarea name="descripcionUno" class="form-control" id="descripcionUnoId"></textarea>
              </div>
              <div class="col-md-12 col-lg-6">
                <label for="tituloDosId" class="form-label">Título [2]</label>
                <input type="text" class="form-control" id="tituloDosId">
              </div>
              <div class="col-md-12 col-lg-6">
                <label class="form-label" for="inputGroupFile02">Cargar[2]</label>
                <input type="file" class="form-control" id="inputGroupFile02" multiple>
              </div>
              <div class="col-md-12 col-lg-12">
                <label for="descripcionDosId" class="form-label">Descripción [2]</label>
                <textarea name="descripcionDos" class="form-control" id="descripcionDosId"></textarea>
              </div>

              <div class="col-md-12col-lg-4">
                <label for="stateId" class="form-label">Estado</label>
                <input type="text" class="form-control" id="stateId" disabled>
              </div>
              <div class="col-md-12">
                <label for="observacionesId" class="form-label">Observación</label>
                <textarea name="observaciones" class="form-control" id="observacionesId"></textarea>
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
  </body>
</html>
<?php
// Variables para almacenar los valores
$actividades = [];
$antecedentes = [];
$diagnosticos = [];
$conclusiones = [];
$recomendaciones = [];

// Verifica si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['actividad'])) {
        $actividad = $_POST['actividad'];
    }
    if (isset($_POST['antecedente'])) {
        $antecedente = $_POST['antecedente'];
    }
    if (isset($_POST['diagnostico'])) {
        $diagnostico = $_POST['diagnostico'];
    }
    if (isset($_POST['conclusion'])) {
        $conclusion = $_POST['conclusion'];
    }
    if (isset($_POST['recomendacion'])) {
        $recomendacion = $_POST['recomendacion'];
    }
}
?>

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
      ::placeholder {
        color: #cecccc !important;
        font-weight: 200;
        text-transform: uppercase;
      }
      .form-label {
        color: #212529;
        font-weight: 700;
        padding-right: 0.5rem;
        margin-bottom: 0;
        text-transform: uppercase;
      }
      .form-label i {
        font-size: 18px;
        cursor: pointer;
      }
      @media(max-width:767px) {
        .form-label {
          font-size: 13px;
        }
      }
      @media(min-width:768px) {
        .mt--mod {
          margin-top: 17px !important;
        }
      }
      @media(min-width:92px) {
        .form-label {
          font-size: 15px;
        }
      }
      .form-control {
        border-radius: .25rem;
        font-weight:300;
      }
      .btn-control {
        padding: .375rem .75rem;
      }
      .fixed-size-textarea {
        resize: none; /* Evita que el textarea se pueda redimensionar */
      }
      .input-group-text{
        background-color: transparent;
        border: none;
      }
      .input-group{
        display: grid;
        grid-template-columns: 80% 20%;
        align-items: center;
      }
      .input-group p{
        font-weight: 300;
      }
      .input-grop-icons{
        display: flex;
        justify-content: flex-end;
      }
      .vineta::before {
        content: '\2713'; /* Unicode para el check mark */
        font-size: 13px;
        color: green; /* Cambia el color según prefieras */
        margin-right: 8px;
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
                        <li class="breadcrumb-item active fw-bold" aria-current="page">RESUMEN</li>
                        <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/actividad.php" class="text-decoration-none">ACTIVIDAD</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <!--RESUMEN-->
        <div class="row">
            <div class="col-12 mt-2">
              <label for="actividadId" class="form-label">Actividades <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalActividad"></i></label>
              <div class="input-group">
                <p class="mb-0" id="actividadId">Mantenimiento de motor</p>
                <div class="input-grop-icons">
                  <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                  <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                </div>
              </div>
            </div>
            <div class="col-12 mt-2">
              <label for="antecedenteId" class="form-label">Antecedentes <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalAntecedente"></i></label>
              <div class="input-group">
                <div class="d-flex">
                  <span class="vineta"></span>
                  <p class="mb-0" id="antecedenteId">El año 2023 se realizó cambios mantenimiento al cigueñal</p>
                </div>
                <div class="input-grop-icons">
                  <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                  <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                </div>
              </div>
            </div>
            <div class="col-12 mt-2">
              <label for="diagnosticoId" class="form-label">Análisis <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalDiagnostico"></i></label>
              <div class="input-group">
                <div class="d-flex">
                  <span class="vineta"></span>
                  <p class="mb-0" id="diagnosticoId">Se deben canbiar las fajas.</p>
                </div>
                <div class="input-grop-icons">
                  <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                  <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                </div>
              </div>
            </div>
            <div class="col-12 mt-2">
              <label for="conclusionId" class="form-label">Conclusiones <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalConclusion"></i></label>
              <div class="input-group">
                <div class="d-flex">
                  <span class="vineta"></span>
                  <p class="mb-0" id="conclusionId">Conclusión nro.01</p>
                </div>
                <div class="input-grop-icons">
                  <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                  <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                </div>
              </div>
            </div>
            <div class="col-12 mt-2">
              <label for="recomendacionId" class="form-label">Recomendaciones <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalRecomendacion"></i></label>
              <div class="input-group">
                <div class="d-flex">
                  <span class="vineta"></span>
                  <p class="mb-0" id="recomendacionId">recomendación 1</p>
                </div>
                <div class="input-grop-icons">
                  <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                  <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                </div>
              </div>
            </div>
            <div class="col-6 btn-control mt-2">
              <button type="button" class="btn btn-primary text-uppercase fw-light" onclick="sendResumen()">Guardar <i class="bi bi-floppy"></i></button>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="modalActividad" tabindex="-1" aria-labelledby="modalActividadLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title text-uppercase" id="modalActividadLabel">Agregar Actividad</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <input type="text" class="form-control" id="modalActividadInput" name="actividad">
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary text-uppercase fw-light">Guardar <i class="bi bi-floppy"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalAntecedente" tabindex="-1" aria-labelledby="modalAntecedenteLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title text-uppercase" id="modalAntecedenteLabel">Agregar Antecedente</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <input type="text" class="form-control" id="modalAntecedenteInput" name="antecedente">
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary text-uppercase fw-light">Guardar <i class="bi bi-floppy"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalDiagnostico" tabindex="-1" aria-labelledby="modalDiagnosticoLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title text-uppercase" id="modalDiagnosticoLabel">Agregar Diagnóstico</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <input type="text" class="form-control" id="modalDiagnosticoInput" name="diagnostico">
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary text-uppercase fw-light">Guardar <i class="bi bi-floppy"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalConclusion" tabindex="-1" aria-labelledby="modalConclusionLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title text-uppercase" id="modalConclusionLabel">Agregar Conclusión</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <input type="text" class="form-control" id="modalConclusionInput" name="conclusion">
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary text-uppercase fw-light">Guardar <i class="bi bi-floppy"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalRecomendacion" tabindex="-1" aria-labelledby="modalRecomendacionLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title text-uppercase" id="modalRecomendacionLabel">Agregar Recomendación</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <input type="text" class="form-control" id="modalRecomendacionInput" name="recomendacion">
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary text-uppercase fw-light">Guardar <i class="bi bi-floppy"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/resumen.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

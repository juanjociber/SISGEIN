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
        $actividades = $_POST['actividad'];
    }
    if (isset($_POST['antecedente'])) {
        $antecedentes = $_POST['antecedente'];
    }
    if (isset($_POST['diagnostico'])) {
        $diagnosticos = $_POST['diagnostico'];
    }
    if (isset($_POST['conclusion'])) {
        $conclusiones = $_POST['conclusion'];
    }
    if (isset($_POST['recomendacion'])) {
        $recomendaciones = $_POST['recomendacion'];
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
        font-weight: 300;
        display: flex;
        justify-content: space-between;
        padding-right: 0.5rem;
        margin-bottom: 0;
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
      }
      .btn-control {
        padding: .375rem .75rem;
      }
      .fixed-size-textarea {
        resize: none; /* Evita que el textarea se pueda redimensionar */
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
        <form method="post" action="">
            <div class="row">
                <div class="col-12 mt-2">
                  <label for="actividadId" class="form-label">Actividad <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalActividad"></i></label>
                  <div class="input-group">
                    <?php foreach ($actividades as $index => $actividad): ?>
                      <input type="text" class="form-control" name="actividad[]" value="<?php echo htmlspecialchars($actividad); ?>">
                      <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                      <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                    <?php endforeach; ?>
                    <!-- Campo para nueva actividad -->
                    <input type="text" class="form-control" name="actividad[]">
                  </div>
                </div>
                <div class="col-12 mt-2">
                  <label for="antecedenteId" class="form-label">Antecedente <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalAntecedente"></i></label>
                  <div class="input-group">
                    <?php foreach ($antecedentes as $index => $antecedente): ?>
                      <input type="text" class="form-control" name="antecedente[]" value="<?php echo htmlspecialchars($antecedente); ?>">
                      <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                      <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                    <?php endforeach; ?>
                    <!-- Campo para nuevo antecedente -->
                    <input type="text" class="form-control" name="antecedente[]">
                  </div>
                </div>
                <div class="col-12 mt-2">
                  <label for="diagnosticoId" class="form-label">Diagnóstico <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalDiagnostico"></i></label>
                  <div class="input-group">
                    <?php foreach ($diagnosticos as $index => $diagnostico): ?>
                      <input type="text" class="form-control" name="diagnostico[]" value="<?php echo htmlspecialchars($diagnostico); ?>">
                      <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                      <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                    <?php endforeach; ?>
                    <!-- Campo para nuevo diagnóstico -->
                    <input type="text" class="form-control" name="diagnostico[]">
                  </div>
                </div>
                <div class="col-12 mt-2">
                  <label for="conclusionId" class="form-label">Conclusión <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalConclusion"></i></label>
                  <div class="input-group">
                    <?php foreach ($conclusiones as $index => $conclusion): ?>
                      <input type="text" class="form-control" name="conclusion[]" value="<?php echo htmlspecialchars($conclusion); ?>">
                      <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                      <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                    <?php endforeach; ?>
                    <!-- Campo para nueva conclusión -->
                    <input type="text" class="form-control" name="conclusion[]">
                  </div>
                </div>
                <div class="col-12 mt-2">
                  <label for="recomendacionId" class="form-label">Recomendación <i class="bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#modalRecomendacion"></i></label>
                  <div class="input-group">
                    <?php foreach ($recomendaciones as $index => $recomendacion): ?>
                      <input type="text" class="form-control" name="recomendacion[]" value="<?php echo htmlspecialchars($recomendacion); ?>">
                      <span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                      <span class="input-group-text"><i class="bi bi-trash3"></i></span>
                    <?php endforeach; ?>
                    <!-- Campo para nueva recomendación -->
                    <input type="text" class="form-control" name="recomendacion[]">
                  </div>
                </div>
                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
        <!-- FIN RESUMEN-->
    </div>

    <!-- Modal Agregar Actividad -->
    <div class="modal fade" id="modalActividad" tabindex="-1" aria-labelledby="modalActividadLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalActividadLabel">Agregar Actividad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formActividad" action="#" method="post">
                        <div class="mb-3">
                            <label for="nombreActividad" class="form-label">Nombre de la Actividad</label>
                            <input type="text" class="form-control" id="nombreActividad" name="nombreActividad" placeholder="Nombre de la actividad">
                        </div>
                        <div class="mb-3">
                            <label for="descripcionActividad" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcionActividad" name="descripcionActividad" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fechaActividad" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fechaActividad" name="fechaActividad">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agregar Antecedente -->
    <div class="modal fade" id="modalAntecedente" tabindex="-1" aria-labelledby="modalAntecedenteLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAntecedenteLabel">Agregar Antecedente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formAntecedente" action="#" method="post">
                        <div class="mb-3">
                            <label for="nombreAntecedente" class="form-label">Nombre del Antecedente</label>
                            <input type="text" class="form-control" id="nombreAntecedente" name="nombreAntecedente" placeholder="Nombre del antecedente">
                        </div>
                        <div class="mb-3">
                            <label for="descripcionAntecedente" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcionAntecedente" name="descripcionAntecedente" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fechaAntecedente" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fechaAntecedente" name="fechaAntecedente">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agregar Diagnóstico -->
    <div class="modal fade" id="modalDiagnostico" tabindex="-1" aria-labelledby="modalDiagnosticoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDiagnosticoLabel">Agregar Diagnóstico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formDiagnostico" action="#" method="post">
                        <div class="mb-3">
                            <label for="nombreDiagnostico" class="form-label">Nombre del Diagnóstico</label>
                            <input type="text" class="form-control" id="nombreDiagnostico" name="nombreDiagnostico" placeholder="Nombre del diagnóstico">
                        </div>
                        <div class="mb-3">
                            <label for="descripcionDiagnostico" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcionDiagnostico" name="descripcionDiagnostico" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fechaDiagnostico" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fechaDiagnostico" name="fechaDiagnostico">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agregar Conclusión -->
    <div class="modal fade" id="modalConclusion" tabindex="-1" aria-labelledby="modalConclusionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalConclusionLabel">Agregar Conclusión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formConclusion" action="#" method="post">
                        <div class="mb-3">
                            <label for="nombreConclusion" class="form-label">Nombre de la Conclusión</label>
                            <input type="text" class="form-control" id="nombreConclusion" name="nombreConclusion" placeholder="Nombre de la conclusión">
                        </div>
                        <div class="mb-3">
                            <label for="descripcionConclusion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcionConclusion" name="descripcionConclusion" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fechaConclusion" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fechaConclusion" name="fechaConclusion">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agregar Recomendación -->
    <div class="modal fade" id="modalRecomendacion" tabindex="-1" aria-labelledby="modalRecomendacionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRecomendacionLabel">Agregar Recomendación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formRecomendacion" action="#" method="post">
                        <div class="mb-3">
                            <label for="nombreRecomendacion" class="form-label">Nombre de la Recomendación</label>
                            <input type="text" class="form-control" id="nombreRecomendacion" name="nombreRecomendacion" placeholder="Nombre de la recomendación">
                        </div>
                        <div class="mb-3">
                            <label for="descripcionRecomendacion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcionRecomendacion" name="descripcionRecomendacion" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fechaRecomendacion" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fechaRecomendacion" name="fechaRecomendacion">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
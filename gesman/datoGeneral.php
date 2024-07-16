<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
  </head>
  <style>
    ::placeholder{
      color: #cecccc !important;
      font-weight: 200;
      text-transform: uppercase;
    }
    .form-label{
      color:#212529;
      font-weight:300; 
    }
    .form-control{
      border-radius:.25rem;
    }
    .btn-control{
      padding:.375rem .75rem;
    }
    </style>
  <body>

    <div class="container">

      <div class="row border-bottom mb-3 fs-5">
        <div class="col-12 fw-bold d-flex justify-content-between">
            <p class="m-0 p-0">CLIENTE</p>
            <input type="text" class="d-none" id="txtIdOt" value="" readonly/>
            <p class="m-0 p-0 text-center text-secondary">GP-INF-1</p>
        </div>
      </div>
      <!-- ENLACES -->
      <div class="row">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">                        
                    <li class="breadcrumb-item active fw-bold" aria-current="page">INFORME</li>
                    <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/datoEquipo.php" class="text-decoration-none">EQUIPO</a></li>
                    <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/resumen.php" class="text-decoration-none">RESUMEN</a></li>
                    <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/actividad.php" class="text-decoration-none">ACTIVIDADES</a></li>
                </ol>
            </nav>
        </div>
      </div>

      <!--DATOS GENERALES-->
      <div class="row g-3">
        <div class="col-6 col-md-4 col-lg-4">
          <label for="nroInforme" class="form-label">Nro. Informe</label>
          <input type="text" class="form-control" id="nroInforme" value="INFORME GP-INF-1" disabled>
        </div>
        <div class="col-6 col-md-4 col-lg-4">
          <label for="fechaInforme" class="form-label">Fecha</label>
          <input type="date" class="form-control" id="fechaInforme">
        </div>
        <div class="col-6 col-md-4 col-lg-4">
          <label for="nroOrdenTrabajo" class="form-label">Orden de trabajo</label>
          <input type="text" class="form-control" id="nroOrdenTrabajo" disabled>
        </div>
        <div class="col-6 col-md-6 col-lg-4">
          <label for="nombreCliente" class="form-label">Cliente</label>
          <input type="text" class="form-control" id="nombreCliente" disabled>
        </div>
        <div class=" col-md-6 col-lg-4">
          <label for="contacto" class="form-label">Contacto</label>
          <input type="text" class="form-control" id="contacto">
        </div>
        <div class="col-md-6 col-lg-4">
          <label for="ubicacion" class="form-label">Lugar</label>
          <input type="text" class="form-control" id="ubicacion">
        </div>      
        <div class="custom-select-container col-md-6 col-lg-12">
          <label for="supervisorId" class="form-label">Supervisor</label>
          <div class="custom-select-wrapper">
            <input type="text" id="supervisorInput" class="custom-select-input" placeholder="Seleccionar supervisor" />
            <span class="custom-select-arrow"><i class="bi bi-chevron-down"></i></span>
            <div id="supervisorList" class="custom-select-list">
              <div class="custom-select-item" data-value="supervisor1">Supervisor1</div>
              <div class="custom-select-item" data-value="colaborador1">Colaborador1</div>
              <div class="custom-select-item" data-value="tecnico1">Tecnico1</div>
            </div>
          </div>
        </div>
        <div class="col-6 btn-control">
          <a href="/sigein/gesman/datoEquipo.php" class="btn btn-primary form-control">Siguiente <i class="bi bi-arrow-right-square"></i></a>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../js/datoGeneral.js"></script>
  </body>
</html>
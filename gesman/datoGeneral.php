<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
      <!-- ENLACES -->
      <div class="row">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">                        
                    <li class="breadcrumb-item active fw-bold" aria-current="page">DATOS GENERALES</li>
                    <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/datoEquipo.php" class="text-decoration-none">EQUIPO</a></li>
                    <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/resumen.php" class="text-decoration-none">RESUMEN</a></li>
                    <li class="breadcrumb-item fw-bold"><a href="/sigein/gesman/actividad.php" class="text-decoration-none">ACTIVIDADES</a></li>
                </ol>
            </nav>
        </div>
      </div>

      <!--DATOS GENERALES-->
      <div class="row g-3">
        <div class="col-12">
          <label for="nroInforme" class="form-label">Nro. Informe</label>
          <input type="text" class="form-control" id="nroInforme" disabled>
        </div>
        <div class="col-md-6">
          <label for="fechaInforme" class="form-label">Fecha</label>
          <input type="date" class="form-control" id="fechaInforme">
        </div>
        <div class="col-md-6">
          <label for="nroOrdenTrabajo" class="form-label">Orden de trabajo</label>
          <input type="text" class="form-control" id="nroOrdenTrabajo" disabled>
        </div>
        <div class="col-md-6">
          <label for="nombreCliente" class="form-label">Cliente</label>
          <input type="text" class="form-control" id="nombreCliente" disabled>
        </div>
        <div class="col-md-6">
          <label for="contacto" class="form-label">Contacto</label>
          <input type="text" class="form-control" id="contacto">
        </div>
        <div class="col-md-6">
          <label for="ubicacion" class="form-label">Lugar</label>
          <input type="text" class="form-control" id="ubicacion">
        </div>
        <div class="col-md-4">
          <label for="supervisorId" class="form-label">Supervisor</label>
          <select id="supervisorId" class="form-select">
              <option selected>Seleccionar supervisor</option>
              <option>Supervisor1</option>
              <option>Supervisor2</option>
              <option>Supervisor3</option>
          </select>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
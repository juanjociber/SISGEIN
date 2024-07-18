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
    @media(max-width:767px){
      .form-label{
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
        </div>
      </div>

      <div class="row mb-1 border-bottom">
        <div class="col-6 col-lg-6 col-xl-3">
          <label for="txtOrden" class="form-label mb-0">Informe</label>
          <input type="text" class="form-control" id="txtOrden">
        </div>
        <div class="col-6 custom-select-container col-lg-6 col-xl-3">
          <label for="equipoId" class="form-label mb-0">Equipo</label>
          <div class="custom-select-wrapper">
            <input type="text" id="equipoInput" class="custom-select-input" placeholder="Seleccionar equipo" />
            <span class="custom-select-arrow"><i class="bi bi-chevron-down"></i></span>
            <div id="equipoList" class="custom-select-list">
              <div class="custom-select-item" data-value="equipo1">Equipo1</div>
              <div class="custom-select-item" data-value="equipo2">Equipo2</div>
              <div class="custom-select-item" data-value="equipo3">Equipo3</div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-6 col-xl-3">
          <label for="fechaInicial" class="form-label mb-0">Fecha inicial</label>
          <input type="date" class="form-control" id="dtpFechaInicial" value="2024-07-17"/>
        </div>
        <div class="col-6 col-lg-6 col-xl-3">
          <label for="fechaFinal" class="form-label mb-0">Fecha final</label>
          <input type="date" class="form-control" id="dtpFechaFinal" value="2024-07-17"/>
        </div>
        
        <div class="col-6 col-lg-3 mt-2 mb-2">
          <button type="button" class="btn btn-primary text-uppercase fw-200 col-12">Buscar <i class="bi bi-search"></i></button>
        </div>  
      </div>

      <a class="link-colecciones" href="/sigein/gesman/vistaPreliminar.php" style="text-decoration:none;color: #212529;font-weight: 300;">
        <div class="row">
          <div class="col-8"><span class="fw-bold">00003</span> <span style="font-size: 12px; font-style: italic;">2024-07-17</span></div>
          <div class="col-4 text-end"><span class="badge bg-primary">Proceso</span></div>
          <div class="col-12">21FLOTA PREVENTIVA DRENADO DE SISTEMA NEUMATICO ARTICULADO - L,M,V</div>
        </div>
      </a>
      <hr>
      <a class="link-colecciones" href="/sigein/gesman/vistaPreliminar.php" style="text-decoration:none;color: #212529;font-weight: 300;">
          <div class="row">
              <div class="col-8"><span class="fw-bold">00002</span> <span style="font-size: 12px; font-style: italic;">2024-04-17</span></div>
              <div class="col-4 text-end"><span class="badge bg-secondary">Abierto</span></div>
              <div class="col-12">21FLOTA PREVENTIVA DRENADO DE SISTEMA NEUMATICO ARTICULADO - L,M,V</div>
          </div>
      </a>
      <hr>
      <a class="link-colecciones" href="/sigein/gesman/vistaPreliminar.php" style="text-decoration:none;color: #212529;font-weight: 300;">
        <div class="row">
          <div class="col-8"><span class="fw-bold">00001</span> <span style="font-size: 12px; font-style: italic;">2024-01-02</span></div>
          <div class="col-4 text-end"><span class="badge bg-success">Cerrado</span></div>
          <div class="col-12">21064 CORRECTIVA REVISAR PALANCA DE LUCES</div>
        </div>
      </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
  </body>
</html>
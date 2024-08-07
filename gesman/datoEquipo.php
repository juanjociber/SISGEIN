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
    <style>
      ::placeholder{
        color: #cecccc !important;
        font-weight: 300;
        font-size:15px;
        /* text-transform: uppercase; */
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
                    <li class="breadcrumb-item fw-bold"><a href="/sisgein/gesman/datoGeneral.php" class="text-decoration-none">INFORME</a></li>
                        <li class="breadcrumb-item active fw-bold" aria-current="page">EQUIPO</li>
                        <li class="breadcrumb-item fw-bold"><a href="/sisgein/gesman/resumen.php" class="text-decoration-none">RESUMEN</a></li>
                        <li class="breadcrumb-item fw-bold"><a href="/sisgein/gesman/actividad.php" class="text-decoration-none">ACTIVIDAD</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <!--DATOS EQUIPOS-->
        <div class="row g-3">
            <div class="col-6 col-lg-4 mt-2">
                <label for="nombreEquipoInput" class="form-label mb-0">Nombre</label>
                <input type="text" class="form-control" id="nombreEquipoInput" placeholder="Ingresar nombre">
            </div>
            <div class="custom-select-container col-6 col-lg-4 mt-2">
              <label for="modeloInput" class="form-label mb-0">Modelo</label>
              <input type="text" class="form-control" id="modeloInput" placeholder="Ingresar modelo">
            </div>
            <div class="col-6 col-lg-4 mt-2">
                <label for="serieEquipoInput" class="form-label mb-0">Serie</label>
                <input type="text" class="form-control" id="serieEquipoInput" placeholder="Ingresar serie">
            </div>

            <div class="custom-select-container col-6 col-lg-4 mt-2">
              <label for="marcaInput" class="form-label mb-0">Marca</label>
              <input type="text" class="form-control" id="marcaInput" placeholder="Ingresar marca">
            </div>
            <div class="col-6 col-lg-4 mt-2">
                <label for="kmEquipoInput" class="form-label mb-0">Kilometraje</label>
                <input type="text" class="form-control" id="kmEquipoInput" placeholder="Ingresar kilometraje">
            </div>
            <div class="col-6 col-lg-4 mt-2">
                <label for="horaMotorInput" class="form-label mb-0">Horas de motor</label>
                <input type="text" class="form-control" id="horaMotorInput" placeholder="Ingersar horas de motor">
            </div>

            <div class="col-md-12 col-lg-12 mt-2">
                <label for="descripcionEquipoInput" class="form-label mb-0">Descripción</label>
                <textarea name="desEquipo" class="form-control fixed-size-textarea" rows="4" id="descripcionEquipoInput" style="text-align:justify" placeholder="Puede ingresar adicionalmente la fecha de fabricación, número interno, número de padron,tipo de combustible y otros que considere necesario."></textarea>
            </div>
            <div class="col-6 btn-control mt-2">
              <button type="button" class="btn btn-primary text-uppercase fw-light" onclick="fnDatosEquipos()">Guardar <i class="bi bi-floppy"></i></button>
            </div>
        </div>
    </div>

    <script src="../js/datoEquipo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
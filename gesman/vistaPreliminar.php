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
    @media(max-width:576px){
      .text-button{
        display:none;
      }
    }
    </style>
  <body>

      <div class="container">

        <div class="row mb-3 mt-3">
          <div class="col-12 btn-group" role="group" aria-label="Basic example">
            <a href="/sigein/gesman/index.php" class="col-4">
              <button type="button" class="btn btn-outline-primary col-12 fw-bold d-flex flex-column align-items-center" style="border-radius:0"><i class="bi bi-list-task"></i><span class="text-button"> Ordenes</span></button>
            </a>
            <a href="/sigein/gesman/datoGeneral.php" class="col-4">
              <button type="button" class="btn btn-outline-primary col-12 fw-bold d-flex flex-column align-items-center" style="border-radius:0; border-left:0"><i class="bi bi-pencil-square"></i><span class="text-button"> Editar</span></button>
            </a>
            <a href="#" class="col-4">
              <button type="button" class="btn btn-outline-primary col-12 fw-bold d-flex flex-column align-items-center" style="border-radius:0; border-left:0"><i class="bi bi-check-square"></i><span class="text-button"> Finalizar</span></button>
            </a>
          </div>
        </div>

        <div class="row border-bottom mb-2 fs-5">
          <div class="col-12 fw-bold d-flex justify-content-between">
            <p class="m-0 p-0">CLIENTE</p>
            <input type="text" class="d-none" id="txtId" value="">
            <p class="m-0 p-0 text-center text-secondary">GP-INF-1</p>
          </div>
        </div>

        <div class="row p-1 mb-0">
          <div class="col-12 mb-0 border-bottom bg-light">
            <p class="m-0 fw-bold">Órden</p>
          </div>
        </div>

        <div class="row p-1 mb-2">
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Nro. Informe</p> 
            <p class="m-0 p-0">001</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Nombre Informe</p> 
            <p class="m-0 p-0">GP-INF-1</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Fecha</p> 
            <p class="m-0 p-0">17/07/2024</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">OT N°</p> 
            <p class="m-0 p-0">0101</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Nombre de cliente:</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Contacto</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-12 col-sm-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Lugar</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-6 col-sm-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Supervisor</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Nombre Equipo</p>
            <p class="m-0 p-0">UNKNOWN</p>              
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Modelo Equipo</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Serie Equipo</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Marca Equipo</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Kilometraje</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-6 col-sm-4 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Horas Motor</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Descripción</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Antecedentes</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Actividad</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Análisis</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Conclusiones</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Recomendaciones</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>
          <div class="col-12 mb-1">
            <p class="m-0 text-secondary" style="font-size: 12px;">Estado</p> 
            <p class="m-0 p-0">UNKNOWN</p>
          </div>            
        </div>

        <div class="row p-1 mb-0">
          <div class="col-12 mb-0 border-bottom bg-light">
              <p class="m-0 fw-bold">Tareos</p>
          </div>
        </div>
        
        <div class="row mb-2 p-1">  
          <div class="col-12 mb-1 pb-1 border-bottom">
            <div class="row">
              <div class="col-12 d-flex justify-content-between">
                <p class="m-0 p-0">INOCENTE CONFIADO, BUENANCIO</p>
                <p class="m-0 p-0 fw-bold">0 Min</p>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <p class="m-0 p-0">2024-07-17 15:30:48</p>
                <p class="m-0 p-0"></p>                                    
              </div>
            </div>
          </div>        
        </div>

        <div class="row p-1 mb-0">
          <div class="col-12 mb-0 border-bottom bg-light">
            <p class="m-0 fw-bold">Imágenes</p>
          </div>
        </div>
        
        <div class="row p-2 mb-3">
          <div class="col-12">
            <p class="fst-italic">No hay imágenes asociadas a esta Órden.</p>
          </div>       
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../js/datoGeneral.js"></script>
  </body>
</html>
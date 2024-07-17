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

      <!--MATRIZ DE TAB-->
      <div class="tab-content" id="myTabContent">

        

        <!--DATOS EQUIPOS-->
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <form class="row g-3">
              <div class="col-md-6 col-lg-4">
                  <label for="nombreEquipoId" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombreEquipoId">
              </div>
              <div class="col-md-4 col-lg-4">
                  <label for="modeloId" class="form-label">Modelo</label>
                  <select id="modeloId" class="form-select">
                      <option selected>Seleccionar modelo</option>
                      <option>Modelo1</option>
                      <option>Modelo2</option>
                      <option>Modelo3</option>
                  </select>
              </div>
              <div class="col-md-6 col-lg-4">
                  <label for="serieEquipoId" class="form-label">Serie</label>
                  <input type="text" class="form-control" id="serieEquipoId">
              </div>
              <div class="col-md-4 col-lg-4">
                  <label for="marcaEquipoId" class="form-label">Marca</label>
                  <select id="modeloId" class="form-select">
                      <option selected>Seleccionar marca</option>
                      <option>Marca1</option>
                      <option>Marca2</option>
                      <option>Marca3</option>
                  </select>
              </div>
              <div class="col-md-6 col-lg-4">
                  <label for="kmEquipoId" class="form-label">Kilometraje</label>
                  <input type="text" class="form-control" id="kmEquipoId">
              </div>
              <div class="col-md-6 col-lg-4">
                  <label for="horaMotorId" class="form-label">Horas de motor</label>
                  <input type="text" class="form-control" id="horaMotorId">
              </div>

              <div class="col-md-2 col-lg-12">
                  <label for="desEquipoId" class="form-label">Descripción</label>
                  <textarea name="desEquipo" class="form-control" id="desEquipoId" placeholder="Puede ingresar adicionalmente la fecha de fabricación, número interno, número de padron,tipo de combustible y otros que considere necesario."></textarea>
              </div>
              <div class="col-12">
                  <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
          </form>
        </div>
        <!--RESUMEN-->
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <form class="row g-3">
                <div class="col-md-2">
                    <label for="antecedentesId" class="form-label">Antecedentes</label>
                    <textarea name="antecedentes" class="form-control" id="antecedentesId"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="actividadId" class="form-label">Actividad</label>
                    <input type="text" class="form-control" id="actividadId">
                </div>
                <div class="col-md-2">
                    <label for="analisisId" class="form-label">Análisis | Diagnóstico</label>
                    <textarea name="analisis" class="form-control" id="analisisId"></textarea>
                </div>
                <div class="col-md-2">
                    <label for="conclusionesId" class="form-label">Conclusiones</label>
                    <textarea name="conlcusiones" class="form-control" id="conclusionesId"></textarea>
                </div>
                <div class="col-md-2">
                    <label for="recomendacionesId" class="form-label">Recomendaciones</label>
                    <textarea name="recomendaciones" class="form-control" id="recomendacionesId"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="estadoId" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estadoId" disabled>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>

      </div> <!-- FIN MATRIZ TAB-->
    </div>


    <div class="row">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">                        
                    <li class="breadcrumb-item active fw-bold" aria-current="page">DATOS GENERALES</li>
                    <li class="breadcrumb-item fw-bold"><a href="/gesman/datoEquipo.php?orden" class="text-decoration-none">EQUIPO</a></li>
                    <li class="breadcrumb-item fw-bold"><a href="/gesman/resumen.php?orden" class="text-decoration-none">RESUMEN</a></li>
                    <li class="breadcrumb-item fw-bold"><a href="/gesman/actividad.php?orden" class="text-decoration-none">ACTIVIDADES</a></li>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
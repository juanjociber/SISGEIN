<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Recursivas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Actividades</h2>
        <div id="accordion" class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Actividad Principal
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <button class="btn btn-primary mb-3" data-bs-toggle="collapse" data-bs-target="#subcollapse1" aria-expanded="false" aria-controls="subcollapse1">
                            Agregar Subactividad
                        </button>
                        <div id="subcollapse1" class="accordion-collapse collapse">
                            <div class="accordion" id="subactivities1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Subactividad Nivel 1
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#subactivities1">
                                        <div class="accordion-body">
                                            <button class="btn btn-primary mb-3" data-bs-toggle="collapse" data-bs-target="#subcollapse2" aria-expanded="false" aria-controls="subcollapse2">
                                                Agregar Subactividad
                                            </button>
                                            <div id="subcollapse2" class="accordion-collapse collapse">
                                                <div class="accordion" id="subactivities2">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="heading3">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                                Subactividad Nivel 2
                                                            </button>
                                                        </h2>
                                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#subactivities2">
                                                            <div class="accordion-body">
                                                                Aquí se puede agregar contenido de la subactividad de nivel 2.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Más subactividades de nivel 2 se pueden agregar aquí -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Más subactividades de nivel 1 se pueden agregar aquí -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Más actividades principales se pueden agregar aquí -->
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/js/bootstrap.min.js"></script>
</body>

</html>

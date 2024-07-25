<div class="accordion-item" id="accordionId-1">
  <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-1">
    <div class="item-actividad">
      <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-1" aria-expanded="false" aria-controls="collapseAcordion-1" id="gpem1">
        <div class="accordion-actividad col-8 text-uppercase" id="actividadId">ACTIVIDAD 1</div>
      </div>
      <div class="accordion-botones">
        <i class="bi bi-plus-lg icono icono-agregar" data-id="1" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
        <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
        <i class="bi bi-paperclip icono icono-cargar" data-bs-toggle="modal" data-bs-target="#imagenModal"></i>
        <i class="bi bi-trash3 icono delete-activity" data-id="accordionId-1"></i>
      </div>
    </div>
  </h2>
  <div id="collapseAcordion-1" class="accordion-collapse collapse show" aria-labelledby="accordionHeaderId-1" style="">
    <div class="accordion-body accordion-body--mod">
      <!-- CONTENEDOR-DIAGNÓSTICO-TRABAJO-OBSERVACIÓN -->
      <div class=" row detalles">
        <div class="detalles-diagnostico col-6">
          <label for="diagnosticoId" class="form-label mb-0">Diagnóstico</label>
          <p class="mb-1" id="diagnosticoId">Diagnostico Nro.1</p>
        </div>
        <div class="detalles-trabajo col-6">
          <label for="trabajoId" class="form-label mb-0">Trabajos</label>
          <p class="mb-1" id="trabajoId">Trabajo Nro.1</p>
        </div>
        <div class="detalles-observacion col-12">
          <label for="observacionId" class="form-label mb-0">Observaciones</label>
          <p class="mb-1" id="observacionId">Observación N°1</p>
        </div>
      </div>
      <!-- CONTENEDOR-IMAGENES -->
      <div class="imagenes-actividad">
        <div class="grid-imagen">
          <div class="titulo-imagen">
            <p class="mb-1" id="titulo1Id" style="text-align:center;">Título 1</p>
          </div>
          <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
            <img src="../img/imagen1.png" id="imagen1Id" class="img-thumbnail">
            <i class="bi bi-x-circle-fill remover-icono" data-target="imagen1Id" onclick="removerImagen('imagen1Id')" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
          </div>
          <div class="descripcion-imagen">
            <p class="mb-1" id="descripcion1Id" style="text-align:center;">Descripción 1</p>
          </div>
        </div>
        <div class="grid-imagen">
          <div class="titulo-imagen">
            <p class="mb-1" id="titulo2Id" style="text-align:center;">Título 2</p>
          </div>
          <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
            <img src="../img/imagen2.png" id="imagen2Id" class="img-thumbnail">
            <i class="bi bi-x-circle-fill remover-icono" data-target="imagen2Id" onclick="removerImagen('imagen2Id')" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
          </div>
          <div class="descripcion-imagen">
            <p class="mb-1" id="descripcion2Id" style="text-align:center;">Descripción 2</p>
          </div>
        </div>
      </div>
      <div class="accordion-item" id="accordionId-2">
        <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-2">
          <div class="item-actividad">
            <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-2" aria-expanded="true" aria-controls="collapseAcordion-2" id="2">
              <div class="accordion-actividad col-8 text-uppercase">SUBACTIVIDAD 1.1</div>
            </div>
            <div class="accordion-botones">
              <i class="bi bi-plus-lg icono icono-agregar" data-id="2" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
              <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
              <i class="bi bi-paperclip icono icono-cargar" data-bs-toggle="modal" data-bs-target="#imagenModal"></i>
              <i class="bi bi-trash3 icono"></i>
            </div>
          </div>
        </h2>
        <div id="collapseAcordion-2" class="accordion-collapse collapse show" aria-labelledby="accordionHeaderId-2" style="">
          <div class="accordion-body accordion-body--mod">
            <!-- CONTENEDOR-DIAGNÓSTICO-TRABAJO-OBSERVACIÓN -->
            <div class=" row detalles">
              <div class="detalles-diagnostico col-6">
                <label for="detalleDiagnosticoId-2" class="form-label mb-0">Diagnóstico</label>
                <p class="mb-1" id="detalleDiagnosticoId-2">Diagnostico Nro.1.1</p>
              </div>
              <div class="detalles-trabajo col-6">
                <label for="detalleTrabajoId" class="form-label mb-0">Trabajos</label>
                <p class="mb-1" id="detalleTrabajoId-2">Trabajo Nro.1.1</p>
              </div>
              <div class="detalles-observacion col-12">
                <label for="detalleObservacionId" class="form-label mb-0">Observaciones</label>
                <p class="mb-1" id="detalleObservacionId-2">Observación N°1.1</p>
              </div>
            </div>
            <!-- CONTENEDOR-IMAGENES -->
            <div class="imagenes-actividad">
              <div class="grid-imagen">
                <div class="titulo-imagen">
                  <p class="mb-1" id="tituloImagenId1-2" style="text-align:center;">Título 1</p>
                </div>
                <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                  <img src="../img/imagen3.png" id="imagen3Id" class="img-thumbnail">
                  <i class="bi bi-x-circle-fill remover-icono" data-target="imagen3Id" onclick="removerImagen('imagen3Id')" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                </div>
                <div class="descripcion-imagen">
                  <p class="mb-1" id="descripcionImagenId1-2" style="text-align:center;">Descripción 1</p>
                </div>
              </div>
              <div class="grid-imagen">
                <div class="titulo-imagen">
                  <p class="mb-1" id="tituloImagenId2-2" style="text-align:center;">Título 2</p>
                </div>
                <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                  <img src="../img/imagen4.png" id="imagen4Id" class="img-thumbnail">
                  <i class="bi bi-x-circle-fill remover-icono" data-target="imagen4Id" onclick="removerImagen('imagen4Id')" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                </div>
                <div class="descripcion-imagen">
                  <p class="mb-1" id="descripcionImagenId2-2" style="text-align:center;">Descripción 2</p>
                </div>
              </div>
            </div>
            <div class="accordion-item" id="accordionId-3">
              <h2 class="accordion-header accordion-header--mod" id="accordionHeaderId-3">
                <div class="item-actividad">
                  <div class="accordion-button accordion-button--mod" data-bs-toggle="collapse" data-bs-target="#collapseAcordion-3" aria-expanded="true" aria-controls="collapseAcordion-3" id="3">
                    <div class="accordion-actividad col-8 text-uppercase">SUBACTIVIDAD 1.1.1</div>
                  </div>
                  <div class="accordion-botones">
                    <i class="bi bi-plus-lg icono icono-agregar" data-id="3" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                    <i class="bi bi-pencil-square icono" data-bs-toggle="modal" data-bs-target="#actividadModal"></i>
                    <i class="bi bi-paperclip icono icono-cargar" data-bs-toggle="modal" data-bs-target="#imagenModal"></i>
                    <i class="bi bi-trash3 icono"></i>
                  </div>
                </div>
              </h2>
              <div id="collapseAcordion-3" class="accordion-collapse collapse show" aria-labelledby="accordionHeaderId-3" style="">
                <div class="accordion-body accordion-body--mod">
                  <!-- CONTENEDOR-DIAGNÓSTICO-TRABAJO-OBSERVACIÓN -->
                  <div class=" row detalles">
                    <div class="detalles-diagnostico col-6">
                      <label for="detalleDiagnosticoId-3" class="form-label mb-0">Diagnóstico</label>
                      <p class="mb-1" id="detalleDiagnosticoId-3">Diagnostico Nro.1.1.1</p>
                    </div>
                    <div class="detalles-trabajo col-6">
                      <label for="detalleTrabajoId-3" class="form-label mb-0">Trabajos</label>
                      <p class="mb-1" id="detalleTrabajoId-3">Trabajo Nro.1.1.1</p>
                    </div>
                    <div class="detalles-observacion col-12">
                      <label for="detalleObservacionId-3" class="form-label mb-0">Observaciones</label>
                      <p class="mb-1" id="detalleObservacionId-3">Observación N°1.1.1</p>
                    </div>
                  </div>
                  <!-- CONTENEDOR-IMAGENES -->
                  <div class="imagenes-actividad">
                    <div class="grid-imagen">
                      <div class="titulo-imagen">
                        <p class="mb-1" id="tituloImagenId1-3" style="text-align:center;">Título 1</p>
                      </div>
                      <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                        <img src="../img/imagen5.png" id="imagen5Id" class="img-thumbnail">
                        <i class="bi bi-x-circle-fill remover-icono" data-target="imagen5Id" onclick="removerImagen('imagen5Id')" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                      </div>
                      <div class="descripcion-imagen">
                        <p class="mb-1" id="descripcionImagenId1-2" style="text-align:center;">Descripción 1</p>

                      </div>
                    </div>
                    <div class="grid-imagen">
                      <div class="titulo-imagen">
                        <p class="mb-1" id="tituloImagenId2-2" style="text-align:center;">Título 2</p>
                      </div>
                      <div class="image-wrapper" style="position: relative; display: inline-block; margin: 10px;">
                        <img src="../img/imagen6.png" id="imagen6Id" class="img-thumbnail">
                        <i class="bi bi-x-circle-fill remover-icono" data-target="imagen6Id" onclick="removerImagen('imagen6Id')" style="position: absolute; top: 5px; right: 5px; cursor: pointer;"></i>
                      </div>
                      <div class="descripcion-imagen">
                        <p class="mb-1" id="descripcionImagenId2-3" style="text-align:center;">Descripción 2</p>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



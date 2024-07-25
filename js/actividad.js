const limpiarInputs = (selector) => {
  const inputs = document.querySelectorAll(selector);
  inputs.forEach(input => input.value = '');
};

const cerrarModal = (modalId) => {
  const modal = bootstrap.Modal.getInstance(document.getElementById(modalId));
  modal.hide();
};

const setValues = (fields) => {
  fields.forEach(({ id, value, isImage }) => {
    const element = document.querySelector(`#${id}`);
    if (element) {
      if (isImage) {
        element.src = value;
      } else {
        element.textContent = value;
      }
    }
  });
};

const fnGuardarActividad = () => {
  const fields = [
    { id: 'actividadId', value: document.querySelector('#nombreActividadInput').value.trim() },
    { id: 'diagnosticoId', value: document.querySelector('#diagnosticoInput').value.trim() },
    { id: 'trabajoId', value: document.querySelector('#trabajosInput').value.trim() },
    { id: 'observacionId', value: document.querySelector('#observacionesInput').value.trim() }
  ];

  setValues(fields);
  limpiarInputs('#modal-body input');
  cerrarModal('actividadModal');
};

const fnGuardarDetallesActividad = () => {
  const basePath = "../img/";

  const imagen1Input = document.querySelector('#imagen1Input').files[0];
  const imagen2Input = document.querySelector('#imagen2Input').files[0];

  const fields = [
    { id: 'titulo1Id', value: document.querySelector('#titulo1Input').value.trim() },
    { id: 'descripcion1Id', value: document.querySelector('#descripcion1Input').value.trim() },
    { id: 'titulo2Id', value: document.querySelector('#titulo2Input').value.trim() },
    { id: 'descripcion2Id', value: document.querySelector('#descripcion2Input').value.trim() }
  ];

  if (imagen1Input) {
    const imagen1Path = basePath + imagen1Input.name;
    fields.push({ id: 'imagen1Id', value: imagen1Path, isImage: true });
  }

  if (imagen2Input) {
    const imagen2Path = basePath + imagen2Input.name;
    fields.push({ id: 'imagen2Id', value: imagen2Path, isImage: true });
  }

  setValues(fields);
  limpiarInputs('#modal-body-imagen input');
  cerrarModal('imagenModal');
};

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.remove-icon').forEach(icon => {
    icon.addEventListener('click', (event) => {
      const targetId = event.target.getAttribute('data-target');
      const imageElement = document.getElementById(targetId);

      if (imageElement) {
        // Eliminando imagen de raiz
        imageElement.src = '';

        // Reseteando archivo input
        const inputId = targetId.replace('Id', 'Input'); // reemplanzando id con INPUT
        const inputElement = document.getElementById(inputId);
        if (inputElement) {
          inputElement.value = ''; // Limpiar archivo input
        }
      }
    });
  });
});


document.addEventListener('DOMContentLoaded', () => {
  // Manejar clic en íconos de eliminación de imagen
  document.querySelectorAll('.remove-icon').forEach(icon => {
    icon.addEventListener('click', (event) => {
      const targetId = event.target.getAttribute('data-target');
      const imageElement = document.getElementById(targetId);

      if (imageElement) {
        // Eliminar la imagen visualmente
        imageElement.src = '';

        // Restablecer el campo de entrada de archivos correspondiente
        const inputId = targetId.replace('Id', 'Input');
        const inputElement = document.getElementById(inputId);
        if (inputElement) {
          inputElement.value = ''; // Limpiar el campo de entrada de archivos
        }
      }
    });
  });

  // Manejar clic en íconos de eliminación de actividad
  document.querySelectorAll('.delete-activity').forEach(icon => {
    icon.addEventListener('click', (event) => {
      const activityId = event.target.getAttribute('data-id');
      const activityElement = document.getElementById(activityId);

      if (activityElement) {
        // Eliminar la actividad del DOM
        activityElement.remove();

        // Opcional: Enviar solicitud al servidor para eliminar la actividad
        fetch(`/api/actividades/${activityId}`, {
          method: 'DELETE',
          headers: {
            'Content-Type': 'application/json'
          }
        })
        .then(response => {
          if (response.ok) {
            console.log(`Actividad con ID ${activityId} eliminada exitosamente.`);
          } else {
            console.error(`Error al eliminar la actividad con ID ${activityId}.`);
          }
        })
        .catch(error => {
          console.error(`Error de red al eliminar la actividad con ID ${activityId}:`, error);
        });
      }
    });
  });
});

const fnCargaContenidoActividad = () =>{
  const formData = new FormData();
  const actividad = document.querySelector('#actividadId').textContent;
  const diagnostico = document.querySelector('#diagnosticoId').textContent;
  const trabajo     = document.querySelector('#trabajoId').textContent;
  const observacion = document.querySelector('#observacionId').textContent;
  const titulo1 = document.querySelector('#titulo1Id').textContent;
  const descripcion1 = document.querySelector('#descripcion1Id').textContent; 
  const titulo2 = document.querySelector('#titulo2Id').textContent;
  const descripcion2 = document.querySelector('#descripcion2Id').textContent; 

  formData.append('actividad', actividad);
  formData.append('diagnostico', diagnostico);
  formData.append('trabajo', trabajo);
  formData.append('observacion', observacion); 
  formData.append('titulo1', titulo1);
  formData.append('descripcion1', descripcion1);
  formData.append('titulo2', titulo2);
  formData.append('descripcion2', descripcion2);

  console.log('Datos a enviar: ', {actividad, diagnostico, trabajo, observacion,titulo1,descripcion1,titulo2,descripcion2 });
  console.log(formData);


  // const response = await fetch(``, {
  //   method: 'POST',
  //   body: formData
  // });
  // if (!response.ok) {
  //   throw new Error(response.status + ' ' + response.statusText);
  // }
  // const datos = await response.json();
  // if (!datos.res) {
  //   throw new Error(datos.msg);
  // }
};



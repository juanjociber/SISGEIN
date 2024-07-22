// const cargaImagen = () =>{  
//   document.addEventListener('click', (e) => {
//     if (e.target.classList.contains('icono-cargar')) {
//         const fileInput = document.querySelector('#file-input');
//         fileInput.click();
//     } 
//   });
// }

// document.addEventListener('DOMContentLoaded',()=>{
//   cargaImagen();
// });

const sendActividades = () =>{
  const formData = new FormData();
  
  const padreActividad = document.querySelector('#gpem1').firstElementChild.textContent;

  console.log(padreActividad);
  const diagnostico = document.querySelector('#detalleDiagnosticoId-1').value;
  const trabajo     = document.querySelector('#detalleTrabajoId-1').value;
  const observacion = document.querySelector('#detalleObservacionId-1').value;
  const titulo1 = document.querySelector('#tituloImagenId1-1').value;
  const imagen1 = document.querySelector('#imagenId1-1').src;
  const descripcion1 = document.querySelector('#descripcionImagenId2-1').value; 
  const titulo2 = document.querySelector('#tituloImagenId2-1').value;
  const imagen2 = document.querySelector('#imagenId2-1').src;
  const descripcion2 = document.querySelector('#descripcionImagenId1-1').value; 

  formData.append('padreActividad', padreActividad);
  formData.append('diagnostico', diagnostico);
  formData.append('trabajo', trabajo);
  formData.append('observacion', observacion); 
  formData.append('titulo1', titulo1);
  formData.append('imagen1', imagen1);
  formData.append('descripcion1', descripcion1);
  formData.append('titulo2', titulo2);
  formData.append('imagen2', imagen2);
  formData.append('descripcion2', descripcion2);

  console.log('Datos a enviar: ', {padreActividad, diagnostico, trabajo, observacion,titulo1,imagen1,descripcion1,titulo2,imagen2,descripcion2 });
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



const sendResumen = async () => {
  const formData = new FormData();

  const actividad     = document.querySelector('#actividadId').value;
  const antecedente   = document.querySelector('#antecedenteId').value;
  const diagnostico   = document.querySelector('#diagnosticoId').value;
  const conclusion    = document.querySelector('#conclusionId').value;
  const recomendacion = document.querySelector('#recomendacionId').value;

  formData.append('actividad', actividad);
  formData.append('antecedente', antecedente);
  formData.append('diagnostico', diagnostico);
  formData.append('conclusion', conclusion);
  formData.append('recomendacion', recomendacion);

  console.log('Datos a enviar: ', { actividad, antecedente, diagnostico, conclusion,recomendacion });
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
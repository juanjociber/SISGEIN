const sendResumen = async () => {
  const formData = new FormData();

  const actividad     = document.querySelector('#actividadId').textContent;
  const antecedente   = document.querySelector('#antecedenteId').textContent;
  const diagnostico   = document.querySelector('#diagnosticoId').textContent;
  const conclusion    = document.querySelector('#conclusionId').textContent;
  const recomendacion = document.querySelector('#recomendacionId').textContent;

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
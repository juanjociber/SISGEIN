document.addEventListener('click', (e) => {
    if (e.target.classList.contains('icono-cargar')) {
        console.log('SI');
        // Mostrar el contenedor de carga de archivos
        const fileUploadContainer = document.querySelector('#cargar-archivo');
        //fileUploadContainer.style.display = 'block';

        const fileInput = document.querySelector('#file-input');
        fileInput.click();
    } else {
        console.log('NO');
    }
});


const formData = new FormData();
const latitud = document.querySelector('#latitud').textContent;
const longitud = document.querySelector('#longitud').textContent;
const direccion = document.querySelector('#direccion').textContent;
const codigo = document.querySelector('#codigo').value;

formData.append('latitud', latitud);
formData.append('longitud', longitud);
formData.append('direccion', direccion);
formData.append('id', codigo);
formData.append('tipo', tipo);
formData.append('forma',forma)

console.log('Datos a enviar: ', { longitud, latitud, direccion, codigo, tipo, forma });
console.log(formData);

const response = await fetch('http://192.168.40.70/marcador/controller/RegistrarMarcacion.php', {
  method: 'POST',
  body: formData
});
if (!response.ok) {
  throw new Error(response.status + ' ' + response.statusText);
}
const datos = await response.json();

if (!datos.res) {
  throw new Error(datos.msg);
}
console.warn('Respuesta del servidor registro marcacion : ', datos);

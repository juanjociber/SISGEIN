document.addEventListener('click', (e) => {
    if (e.target.classList.contains('icono-cargar')) {
        console.log('SI');
        // Mostrar el contenedor de carga de archivos
        const fileUploadContainer = document.querySelector('#cargar-archivo');
        //fileUploadContainer.style.display = 'block';

        // Alternativamente, puedes activar el input de archivo directamente
        const fileInput = document.querySelector('#file-input');
        fileInput.click();
    } else {
        console.log('NO');
    }
});

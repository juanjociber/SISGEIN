const cargaImagen = () =>{  
  document.addEventListener('click', (e) => {
    if (e.target.classList.contains('icono-cargar')) {
        const fileInput = document.querySelector('#file-input');
        fileInput.click();
    } 
  });
}


document.addEventListener('DOMContentLoaded',()=>{
  cargaImagen();
});



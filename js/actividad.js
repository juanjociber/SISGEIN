const lista = document.querySelectorAll('.list-group-item');

lista.forEach((item, i) =>{
    console.log(item,i)
});


document.addEventListener('click',(event)=>{
        console.log(event.target);
        if(event.target.matches('.list-group-item') || event.target.matches('.list-group-item--nombre')
            || event.target.matches('.list-group-item--fecha')){
            // document.querySelector('#actividadId1').classList.toggle('ocultarDiv');
            document.querySelector('#actividadId1').classList.remove('ocultarDiv');
        }
        
});

document.addEventListener('DOMContentLoaded', function() {
    // Función para inicializar el select personalizado
    function initCustomSelect(inputId, listId) {
        const selectInput = document.getElementById(inputId);
        const selectList = document.getElementById(listId);
        const selectItems = selectList.getElementsByClassName('custom-select-item');

        // Mostrar/Ocultar la lista al hacer clic en el input
        selectInput.addEventListener('click', function() {
            selectList.style.display = selectList.style.display === 'block' ? 'none' : 'block';
        });

        // Seleccionar un elemento de la lista
        Array.from(selectItems).forEach(item => {
            item.addEventListener('click', function() {
                selectInput.value = this.textContent;
                selectList.style.display = 'none';
            });
        });

        // Ocultar la lista si se hace clic fuera del select
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.custom-select-wrapper')) {
                selectList.style.display = 'none';
            }
        });

        // Filtrar elementos de la lista al escribir en el input
        selectInput.addEventListener('input', function() {
            const filter = selectInput.value.toLowerCase();
            Array.from(selectItems).forEach(item => {
                const text = item.textContent.toLowerCase();
                item.style.display = text.includes(filter) ? '' : 'none';
            });
            selectList.style.display = 'block';
        });
    }

    // Inicializar ambos selectores personalizados
    initCustomSelect('modeloInput', 'modeloList');
    initCustomSelect('marcaInput', 'marcaList');
});

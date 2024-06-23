$(document).ready(function(){
    // Agregar un evento clic a todas las imágenes con el ID 'agregar-producto'
    $(document).on('click', '#agregar-producto', function(){
        // Obtener el nombre del producto usando jQuery
        var nombreProducto = $(this).closest('.formulario-producto').find('.nombre-producto').text();
        
        // Mostrar el nombre del producto en la consola usando jQuery
        console.log("Nombre del producto (jQuery):", nombreProducto);
        
        // Obtener el nombre del producto usando JavaScript puro
        var nombreProductoJS = document.getElementById('nproducto').textContent;
        
        // Mostrar el nombre del producto en la consola usando JavaScript puro
        console.log("Nombre del producto (JavaScript puro):", nombreProductoJS);
    });
});



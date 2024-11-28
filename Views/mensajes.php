<?php
require_once __DIR__ . "/../Models/mensaje.php";
require_once __DIR__ . "/../routes.php";
require_once "head.php"
?>

<div class="container" id="mensajes"></div>

<script>
 new gridjs.Grid({
    columns: ["ID", "Nombre", "Email", "Teléfono", "Dirección", "Mensaje"],
    server: {
        url: '<?php echo BASE_URL ?>/Controllers/listarmensajes.php',
        then: data => 
            data
                .sort((a, b) => b.id - a.id) // Ordenar por ID descendente
                .map(mensaje => [
                    mensaje.id,
                    mensaje.name,
                    mensaje.email,
                    mensaje.phone,
                    mensaje.address,
                    mensaje.message
                ])
    },
    search: true,
    pagination: {
        limit: 10,
    },
    language: {
        search: {
            placeholder: 'Buscar en la tabla...'
        },
        pagination: {
            previous: 'Anterior',
            next: 'Siguiente',
            showing: 'Mostrando',
            results: 'resultados'
        },
        noRecordsFound: 'No se encontraron registros'
    }
}).render(document.getElementById("mensajes"));

</script>

<?php
require_once "footer.php"
?>
<?php
require_once __DIR__ . "/../Models/mensaje.php";
require_once __DIR__ . "/../routes.php";
require_once "head.php"
?>

<div class="container" id="contenido">

</div>



<script>

    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');

    if (id) {
            fetch(`<?php echo BASE_URL ?>/Controllers/obtenernoticia.php?id=${id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la red');
                    }
                    return response.json();
                })
                .then(data => {
                    
                    document.getElementById('contenido').innerHTML = `
                        <h2>${data[0].titulo_not}</h2>
                        <p>${data[0].descripcion_not}</p>
                    `;
                })
                .catch(error => {
                    document.getElementById('contenido').innerHTML = '<p>Error al obtener datos.</p>';
                    console.error('Error:', error);
                });
        } else {
            document.getElementById('contenido').innerHTML = '<p>No se proporcionó un ID válido.</p>';
        }


</script>

<?php
require_once "footer.php"
?>
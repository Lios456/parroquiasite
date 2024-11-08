<?php
include __DIR__ . "/../Models/noticia.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $noticia = new Noticia();
    $noticia->titulo = $_POST["titulo"] ?? null;
    $noticia->detalle = $_POST["detalle"] ?? null;
    $noticia->fecha = date("Y-m-d");
    //$noticia->autor = $_POST["autor"] ?? null;

    if ($noticia->insertar($noticia)) {
        echo 'Toastify({
                        text: "Éxito al registrar la noticia",
                        duration: 500,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                        onClick: function(){} // Callback after click
                    }).showToast();';
    } else {
        echo "Fallo al registrar la noticia";
    }
} else {
    echo "La noticia no se ha podido subir";
}

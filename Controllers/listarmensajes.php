<?php
require_once __DIR__ . '/../Models/mensaje.php';

$mensajes = new Mensaje();
echo $mensajes->listar();
?>
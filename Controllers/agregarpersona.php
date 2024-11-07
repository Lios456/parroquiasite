<?php
include ('../Models/persona.php');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $persona = new Persona();
    $persona->cedula = $_POST["cedula"];
    $persona->nombre = $_POST["nombre"];
    $persona->apellido1 = $_POST["apellido1"];
    $persona->apellido2 = $_POST["apellido2"];
    $persona->celular = $_POST["celular"];

    if($persona->registrar($persona)){
        echo "Éxito al registrar la persona";
        header("Location: noticias.php");
    }else{
        echo "Fallo al registrar la persona";
    }
}
?>
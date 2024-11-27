<?php

// create user administrator@'%' identified by santisimatrinidad@1982
// grant all privilegies on parroquia.* to administrator@'%'
// create user visitante@'%'
// grant select on parroquia.noticias to visitante@'%'
// grant insert on parroquia.mensajes to visitante@'%'
include("Models/idiorm/idiorm.php");
ORM::configure('mysql:host=localhost;dbname=parroquia');
ORM::configure('username', 'administrator');
ORM::configure('password', 'santisimatrinidad@1982');


?>
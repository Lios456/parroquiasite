<?php
require_once "../routes.php";
echo BASE_URL;
echo HEAD;
include HEAD;
include 'Models/noticia.php';
?>

<div class="content">
<?php
try{
  $a = new Noticia();
  //$a->insertar(['titulo'=>'Hola','descripcion'=>'Noticia de Prueba']);
  $a->listar() ;
}catch(Exception $e){
  echo $e->getMessage();
}
?>
</div>
<br><br><br><br><br>
<center><h1 class="h1">Ingreso de noticias</h1></center>
<div class="d-flex justify-content-center">
<form action="Controllers/agregarnoticia.php" method="post" name="noticiaform">
  <input type="text" class="form-control" name="titulo" placeholder="Título">
<textarea id="summernote" name="detalle"></textarea>
<button type="submit">Enviar</button>
</form>
</div>

    <script>
      $('#summernote').summernote({
        placeholder: 'Escribe aquí tu noticia',
        tabsize: 2,
        height: 100,
        width: 1000,
        lan: 'es-ES'
      });
    </script>
<?php
include "footer.php";
?>
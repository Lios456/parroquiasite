<?php
include 'head.php';
include 'Models/noticia.php';
?>
<div class="contente d-flex justify-content-center">
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
<div class="d-flex justify-content-center">
<form action="noticia.php" method="post">
<div id="summernote" ></div>
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
include 'footer.php';
?>
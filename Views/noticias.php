<?php
session_start();
include 'head.php';
include __DIR__ . '/../Models/noticia.php';
require_once __DIR__ . '/../routes.php';
?>

<div class="container d-flex justify-content-center align-items-center">
  <?php
  try {
    $a = new Noticia();
    //$a->insertar(['titulo'=>'Hola','descripcion'=>'Noticia de Prueba']);
    $a->listar();
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  ?>
</div>
<br><br><br><br><br>
<center>
  <h1 class="h1">Ingreso de noticias</h1>
</center>
<div class="container d-flex justify-content-center">
  <form action="<?php echo BASE_URL . '/Controllers/agregarnoticia.php' ?>" method="post" name="noticiaform">
    <input type="text" class="form-control" name="titulo" placeholder="Título" required>
    <textarea id="summernote" name="detalle" required></textarea>
    <button type="submit" class="btn btn-success rounded">Enviar</button>
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
include 'footer.php'
?>
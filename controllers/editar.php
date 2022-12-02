<?php include '../templates/header.php'?>

<?php 
include '../models/conexion.php';

$codigoLibro = $_GET['id'];

$consulta = $bd->prepare("SELECT * from libros WHERE id = ?");
$consulta->execute([$codigoLibro]);

$libro = $consulta->fetch(PDO::FETCH_OBJ);
print_r($libro);

?>

<div class="container">
    <div class="row justify-content-center">
    <div class="card-header">Editar datos del libro</div>
      <form action="update.php" method="POST">
        <div>
          <label>Nombre del libro</label>
          <input class="form-control" type="text" placeholder="Ingrese Nombre" name="inputNombre" value="<?php echo $libro->nombre ?>" required> 
        </div>
        <div>
          <label>Genero literario</label>
          <input class="form-control" type="text" placeholder="Ingrese Género" name="inputGenero" value="<?php echo $libro->genero ?>" required> 
        </div>
        <div>
          <label>Nombre del autor</label>
          <input class="form-control mb-2" type="text" placeholder="Ingrese autor" name="inputAutor" value="<?php echo $libro->autor ?>" required> 
        </div>
        <div>
          <label>Año de publicación</label>
          <input class="form-control mb-2" type="text" placeholder="Ingrese año" name="inputPublicacion" value="<?php echo $libro->publicacion ?>" required> 
        </div>
        <input type="hidden" name="id" value="<?php echo $libro->id ?>">
        <button type="submit" class="btn btn-success mb-5" value="Registrar">Enviar</button>
        <br>
    </form>
    </div>
</div>

<?php include '../templates/footer.php'?>
<?php include 'templates/header.php' ?>

<?php  
include 'models/conexion.php';

$sentencia = $bd->query("SELECT * from libros");

$libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($libros)
?>

<table class="table container">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Género</th>
      <th scope="col">Autor</th>
      <th scope="col">Publicación</th>
      <th scope="col">Acciones</th>
      <th scope="col">  </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($libros as $dato) { ?>
    <tr>
      <th scope="row"><?php echo $dato->id ?></th>
      <td><?php echo $dato->nombre ?></td>
      <td><?php echo $dato->genero ?></td>
      <td><?php echo $dato->autor ?></td>
      <td><?php echo $dato->publicacion ?></td>
      <td><a href="controllers/editar.php?id=<?php echo $dato->id ?>" class="btn btn-primary">Editar<td><a href="controllers/eliminar.php?id=<?php echo $dato->id ?>" class="btn btn-danger">Eliminar</td></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<br>
<h2 class="text-center">Agregar un nuevo libro</h2>
<br>
<div class="card container">
    <div class="card-header mb-3">Ingrese los datos del nuevo libro</div>
      <form action="controllers/registro.php" method="POST">
        <div>
          <label>Nombre del libro</label>
          <input class="form-control" type="text" placeholder="Ingrese nombre" name="inputNombre" required> 
        </div>
        <div>
          <label>Genero literario</label>
          <input class="form-control" type="text" placeholder="Ingrese género literario" name="inputGenero" required> 
        </div>
        <div>
          <label>Nombre del autor</label>
          <input class="form-control mb-2" type="text" placeholder="Ingrese autor" name="inputAutor" required> 
        </div>
        <div>
          <label>Año de publicación</label>
          <input class="form-control mb-2" type="text" placeholder="Ingrese año de publicación" name="inputPublicacion" required> 
        </div>
        <br>
        <button type="submit" class="btn btn-success mb-5" value="Registrar">Enviar</button>
      </form>
</div>
<br>

<?php include 'templates/footer.php' ?>

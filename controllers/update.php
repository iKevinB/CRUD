<?php 
print_r($_POST);

include '../models/conexion.php';

$codigoLibro = $_POST['id'];
$nombre = $_POST['inputNombre'];
$genero = $_POST['inputGenero'];
$autor = $_POST['inputAutor'];
$publicacion = $_POST['inputPublicacion'];

$consulta = $bd->prepare("UPDATE libros SET nombre = ?, genero = ?, autor = ?, publicacion = ? WHERE id = ?");
$respuesta = $consulta->execute([$nombre,$genero,$autor,$publicacion,$codigoLibro]);

if($respuesta){
    header("Location: ../index.php");
} else {
    echo "Fallo la actualización";
}

?>
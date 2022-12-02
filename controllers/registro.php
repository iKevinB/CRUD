<?php 
//echo "Hola";
//print_r($_POST);

if(empty($_POST['inputNombre']) || empty($_POST['inputGenero']) || empty($_POST['inputAutor']) || empty($_POST['inputPublicacion'])){
    echo "Error, complete todo el formulario";
    exit();
}
include '../models/conexion.php';

$nombre = $_POST['inputNombre'];
$genero = $_POST['inputGenero'];
$autor = $_POST['inputAutor'];
$publicacion = $_POST['inputPublicacion'];

echo $nombre,$genero,$autor,$publicacion;

$consulta = $bd->prepare("INSERT INTO libros(nombre,genero,autor,publicacion) VALUES (?,?,?,?)");

$resultado = $consulta->execute([$nombre,$genero,$autor,$publicacion]);

if($resultado){
    header("Location: ../index.php");
} else {
    echo "Fallo la consulta";
}

?>
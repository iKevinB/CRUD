<?php 
include '../models/conexion.php';

$codigoLibro = $_GET['id'];

$consulta = $bd->prepare("DELETE FROM libros WHERE id = ?");
$resultado = $consulta->execute([$codigoLibro]);

if ($resultado){
    header('Location: ../index.php');
}else{
    echo "Su Eliminación falló";
}

?>
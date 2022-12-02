<?php 

$nombre_bd = "crud";
$usuario = "root";
$contraseña = "";


try{
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contraseña
    );
} catch(Exeption $e){
    //Manejo de exepciones(errores)
    echo "No funciono la conexión porque: ".$e->getMessage();
}


?>
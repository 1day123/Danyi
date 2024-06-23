<?php

include("Conexion.php");

$nombre = $_POST['nombre'];
$apa = $_POST['paterno'];
$ama = $_POST['materno'];
$email = $_POST['correo'];
$pass = $_POST['contraseña'];



$consulta = "INSERT INTO usuarios (id_usuario, nombre, apellidopa, apellidoma, correo, contraseña) 
VALUES (NULL, '$nombre', '$apa', ' $ama', '$email', '$pass')";

$ejecutar= mysqli_query($conexion,$consulta);


if($ejecutar){
 
    header("Location: ../index.php");// Redirige al usuario a la página de inicio
 

}else{
    //echo "tyu primera consulta no te salio"; es solo para debuguear
}


?>


<?php
include("Conexion.php");


$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];

$consulta="INSERT INTO categorias (id_categoria, nombre, imagen_categoria) VALUES (NULL, '$nombre', '$imagen')";


$ejecutar = mysqli_query($conexion, $consulta);


if ($ejecutar) {
    
    header("Location: ../cliente/interfaz-admin/categorias.php");// Redirige al usuario a la página de inicio
 

}else {
    echo "te equivocaste parce";
}


?>
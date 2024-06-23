<?php

include("Conexion.php");/*importamos los datos de conexion.php para decirle a nuestra pagina que si conecta con el localhost */


$nombre=$_POST['nombre'];/*aqui mandamos a traer las variables de nuestro formulario para registrar repartidores */
$apaterno=$_POST['paterno'];/*lo que va entre comillas es el name delformulario */
$amaterno=$_POST['materno'];/*el _POST es el metodo de envio que usa el formulario, te das cuenta que es post o get porque en fromulario */
$telefono=$_POST['telefono'];/*dice method:POST */
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$tipo_usuario=$_POST['tipo_usuario'];

/*CONSULTA ES UNA VARIABLE lA PUEDES LLAMAR COMO SEA, todos los nombres que que tengan un signo de peso'$' veas entre los php son variables */
$consulta = "INSERT INTO usuarios (id_usuario, id_tipo_usuario, nombre, apellidopa, apellidoma, correo, telefono, contraseña)
 VALUES (NULL, $tipo_usuario, '$nombre', '$apaterno', '$amaterno', '$correo', '$telefono', '$contraseña') ";/*esta consulta inserta el repartidor en usuario */

$ejecutar = mysqli_query($conexion, $consulta);/*mysql_query es el que hace la magia de conectar con la bd: nos dice que si $conexion y $consulta existen en la bd ejecutala*/

if ($ejecutar) {
    // echo "si ejecuta";
    $usuario_generado = mysqli_insert_id($conexion);/* obtenemos el ultimo usuario registrado en la base de datos*/
    $consulta2 = "INSERT INTO repartidores (id_repartidor, id_usuario) 
VALUES (NULL, $usuario_generado)";/* insertamos el usuario en repartidores*/

$ejecutar2=mysqli_query($conexion,$consulta2);/* si haces otra consulta como en este caso debes de volver a llamr el mysqli_query para queconecte con la conexion */

if ($ejecutar2) {
   
 
    header("Location: ../cliente/interfaz-admin/inicio.php");// este heder es como una ruta para que lo mande a otra pagina, es como el boton submit del formulario
                                                            //o un a de enlace
 


}else {
    echo "te salio mal ma";//estos comentarios solo son para checar en tu pagina sisi hagarro lo que hiciste
}


} else {
    echo "te salio mal ma";
}
?>
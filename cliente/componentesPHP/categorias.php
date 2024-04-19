<?php
           include("../../servidor/Conexion.php");

            $consulta = "SELECT * FROM categorias";
            $ejecutar = mysqli_query($conexion, $consulta);

            if (mysqli_num_rows($ejecutar) > 0) {
                while ($datos = mysqli_fetch_assoc($ejecutar)) {
                    $rutaimagen = $datos['imagen_categoria'];
                    $nombrecategoria = $datos['nombre'];
                    $id_categoria = $datos['id_categoria'];

                    echo "<form class='card-categorias'  action='../componentesPHP/productos.php' method='POST'>
                        <img class='imagen-categorias' src='$rutaimagen' alt=''>
                        <h1 class='texto-categorias'>$nombrecategoria</h1>
                        <input type='hidden' value='$id_categoria' name='id_categoria'>
                        <button type='submit' class='ver-categorias radius'> Ver productos</button>
                     </form>";
                }
            } else {
                echo "te fallo master";
            }
?>
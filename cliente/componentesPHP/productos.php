          <?php
            include("../../servidor/Conexion.php");
            $id_categoria = $_POST['id_categoria'];
            $consulta = "SELECT * FROM productos WHERE id_categoria = $id_categoria";
            $ejecutar = mysqli_query($conexion, $consulta);

            if (mysqli_num_rows($ejecutar) > 0) {
                while ($datos = mysqli_fetch_assoc($ejecutar)) {
                    $rutaimagen = $datos['imagen_producto'];
                    $nombreproducto = $datos['nombre'];
                    $stock = $datos['cantidad'];
                    $descripcion = $datos['descripcion'];
                    echo "<form class='formulario-producto' action=''>
                            <img class='imagen-producto' src='$rutaimagen' alt=''>
                            <h1 id'nproducto' class='nombre-producto'>$nombreproducto</h1>
                            <h4 class='descripcion-producto'>$descripcion</h4>
                            <h5 class='stock-producto'>Stock $stock</h5>
                            <img id='agregar-producto' class='btn-agregar-producto' src='../img/iconos/add.png' alt=''>
                    </form>";
                }
            } else {
                echo "te fallo master";
            }
            ?>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
          <script src="../js/productos.js"></script>
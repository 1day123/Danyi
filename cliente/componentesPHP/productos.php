      <link rel="stylesheet" href="../css/estilos.css">
      <div class="contenedor-productos">
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
                            <h1 class='nombre-producto'>$nombreproducto</h1>
                            <h4 class='descripcion-producto'>$descripcion</h4>
                            <h5 class='stock-producto'>Stock $stock</h5>
                            <img class='btn-agregar-producto' src='../img/add.png' alt=''>
                    </form>";
                }
            } else {
                echo "te fallo master";
            }
            ?>
      </div>
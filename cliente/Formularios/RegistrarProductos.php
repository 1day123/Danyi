<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilos.css">
    <title>Registrar Proveedores</title>
</head>

<body class="overflow-h">
    <img src="../img/Fondo-general.jpg" alt="" class="fondo">

    <!-- sombra para el fondo -->
    <div class="sombra"></div>
    <div class="container-fluid">
        <header class="separar-extremos">
            <!-- logo de la pagina -->
            <img src="../img/logo-principal.png" alt="Dulceria Danyi logo" id="logo">
            <!-- menu de navegacion-->
            <nav class="nav navbar-expand-lg ">
                <a class="a-color-blanco btn-hover  btn-g centrar top-c " href="../Interfaz-admin/inicio.php">Regresar</a>
            </nav>
        </header>

        <main class="centrar">
            <!-- cuadro del formulario negro-->
            <div class="cuadro-formulario-g relative radius box-sombra-blanco">
                <div class="centrar">
                    <h1 id="titulo-formulario">Registrar Productos</h1>
                </div>
                <form class="formulario" action="../../servidor/RegistrarProveedoresbd.php" method="post">
                    <div class="row">
                        <div class="col-4">
                            <label class="txt-s" for="">Nombre del producto:</label>
                            <input class="radius" type="text" name="nombreproducto" id="" placeholder="  Nombre">
                            <label class="txt-s" for="">Caducidad:</label>
                            <input class="radius" type="date" name="caducidad" id="" placeholder="  Apellido Paterno">
                            <label class="txt-s" for="">Cantidad:</label>
                            <input class="radius" type="text" name="cantidad" id="" placeholder="  Apellido Materno">
                            <!-- seleccionar el repartidor-->
                            <select name="categoria" class="select-categorias radius">
                                <option value="">Selecciona una categoria</option><!-- muestra el encabezado para el select con la primera opcion -->

                                <?php // agregamos codigo php para poder realizar una consulta en nuestro html
                                include_once("../../servidor/Conexion.php"); //importamos todas la variables del documento conexion.php para poderlas usar aqui
                                $consulta = "SELECT id_categoria,nombre FROM categorias"; //consultamos los id_usuarios y id_repartidor que existen en la tabla repartidores
                                $ejecutar = mysqli_query($conexion, $consulta); //ejecutamos la consulta estableciendo conexion con la bd y pedirle la consulta 


                                if (mysqli_num_rows($ejecutar) > 0) { // revisamos que la ejecucion tiene filas con datos
                                    while ($persona = mysqli_fetch_array($ejecutar)) { //hacemos un arreglo con los datos que obtubimos en ejecutar osea la consulta
                                ?>
                                        <option value="<?php echo $persona['id_categoria']; ?>"><!-- imprimimos el arreglo con el id repartidor en este caso es lo que va valer-->
                                            <?php echo $persona['nombre']; ?><!--imprimimos el arreglo con el id usuario en este caso es lo que va mostrar la opcion-->
                                        </option>
                                <?php
                                    }
                                } ?>
                            </select>

                            <select name="proveedor" class="select-productos radius">
                                <option value="">Selecciona un proveedor</option><!-- muestra el encabezado para el select con la primera opcion -->

                                <?php // agregamos codigo php para poder realizar una consulta en nuestro html
                                include_once("../../servidor/Conexion.php"); //importamos todas la variables del documento conexion.php para poderlas usar aqui
                                $consulta = "SELECT u.nombre,
                                    p.id_proveedor
                             FROM proveedores as p
                             INNER JOIN usuarios as u
                             ON p.id_usuario = u.id_usuario
                                    "; //consultamos los id_usuarios y id_repartidor que existen en la tabla repartidores
                                $ejecutar = mysqli_query($conexion, $consulta); //ejecutamos la consulta estableciendo conexion con la bd y pedirle la consulta 
                                if (mysqli_num_rows($ejecutar) > 0) { // revisamos que la ejecucion tiene filas con datos
                                    while ($persona = mysqli_fetch_array($ejecutar)) { //hacemos un arreglo con los datos que obtubimos en ejecutar osea la consulta
                                ?>
                                        <option value="<?php echo $persona['id_proveedor']; ?>"><!-- imprimimos el arreglo con el id repartidor en este caso es lo que va valer-->
                                            <?php echo $persona['nombre']; ?><!--imprimimos el arreglo con el id usuario en este caso es lo que va mostrar la opcion-->
                                        </option>
                                <?php
                                    }
                                } ?>
                            </select>


                      
                            



                            <!--fin de seleccionar el repartidor-->
                        </div>
                        <div class="col">
                            <label class="txt-s" for="">Fecha de compra:</label>
                            <input class="radius" type="date" name="fcompra" id="" placeholder="  Correo">
                            <label class="txt-s" for="">Precio:</label>
                            <input class="radius" type="text" name="precio" id="" placeholder="  Contraseña">
                            <label class="txt-s" for="">Telefono:</label>
                            <input class="radius" type="text" name="telefono" id="" placeholder="  Telefono">
                        </div>
                        <button type="submit" id="btn-registrar-proveedores" class="btn-hover btn-g btn-rojo">Registrar</button>
                        <img src="../img/avatar-danyi.png" alt="avatar-danyi" id="avatar" class="avatar-proveedores">
                    </div>
                </form>
            </div>
        </main>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
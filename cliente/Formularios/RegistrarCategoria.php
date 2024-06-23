<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilos.css">
    <title>plantilla</title>
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
            <div class="cuadro-formulario-C relative radius box-sombra-blanco">
                <div class="centrar">
                    <h1 id="titulo-formulario">Registrar categoria</h1>
                </div>
                <form class="formulario" action="../../servidor/RegistrarcategoriasBD.php" method="post">
                    <label class="txt-s" for="">Nombre de la categoria</label>
                    <input class="radius" type="text" name="nombre" id="" placeholder="  Nombre">
                    <label class="txt-s" for="">Ruta de imagen:</label>
                    <input class="radius" type="text" name="imagen" id="" placeholder="  Ruta">
                    <button type="submit" id="btn-registrar-categoria" class="btn-hover btn-g btn-rojo">Registrar</button>
                </form>
                <img src="../img/avatar-danyi.png" alt="avatar-danyi" id="avatar" class="avatar-categoria">
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
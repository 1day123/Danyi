<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilos.css">
    <title>Autenticar</title>
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
                <a class="a-color-blanco btn-hover btn-rojo btn-g centrar top-c " href="RegistrarUsuario.php">Registrarse</a>
            </nav>
        </header>

        <main class="centrar">
            <div class="cuadro-formulario-m relative radius box-sombra-blanco">
                <div class="centrar">
                    <h1 id="titulo-formulario">Iniciar Sesión</h1>
                </div>
                <form class="formulario" action="../../servidor/Autenticar.php" method="post">
                    <label class="txt-s" for="">Correo:</label>
                    <input class="radius" type="text" name="correo" id="" placeholder="  Correo">
                    <label class="txt-s" for="">Contraseña:</label>
                    <input class="radius" type="password" name="contraseña" id="" placeholder="  Contraseña">
                    <button type="submit" id="btn-autenticar" class="btn-hover btn-g btn-rojo">Iniciar Sesión</button>
                </form>
                <div class="recuperar-recordar">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label txt-blanco txt-s" for="flexCheckIndeterminate">
                        Recordarme
                    </label>
                    <br>
                    <a class="txt-s" href="">Recuperar contraseña</a>
                </div>
                <img src="../img/avatar-danyi.png" alt="avatar-danyi" id="avatar" class="avatar-autenticar">
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
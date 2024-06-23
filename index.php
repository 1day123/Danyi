<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="cliente/css/estilos.css">
    <title>Hello, world!</title>
</head>

<body class="overflow-h">
    <!-- video del fondo -->
    <video muted autoplay loop class="fondo">
        <source src="./cliente/videos/video-index.mp4" type="video/mp4">
    </video>
    <div class="container-fluid">
        <!-- encabezado del index -->
        <header class="separar-extremos">
            <!-- logo de la pagina -->
            <img src="Cliente/img/logo-principal.png" alt="Dulceria Danyi logo" id="logo">
            <!-- menu de navegacion-->
            <nav class="nav navbar-expand-lg ">
                <a class="a-color-blanco btn-hover btn-rojo btn-g centrar top-s" href="cliente/Formularios/RegistrarUsuario.php">Registrarse</a>
            </nav>
        </header>
        <!--Titulo - subtitulo del index - boton comenzar-->
        <main class="espacio-left-c ">
            <h1 id="text-Dulces-index" class="txt-blanco txt-g ">Dulces de México</h1>
            <h4 id="text-sub-index" class="txt-blanco txt-m">Descubre la magia del dulce en cada mordisco!</h4>
            <a id="btn-comenzar-index" class="a-color-blanco btn-hover btn-rojo btn-eg centrar top-c" href="cliente/Formularios/Autenticar.php">Comenzar</a>
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
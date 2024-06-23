<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Menú navegación-Cliente</title>
</head>

<body>
    <div class="container-fluid ">

        <header class="">
            <!-- logo de la pagina -->
            <a href="inicio.php"> 
                <img src="../img/logo-principal.png" alt="Dulceria Danyi logo" id="logo">
            </a>
            <div class="container-fluid" id="barramenu">
                <h1 id="btncerrarcarrito"><img src="../img/iconos/x-button.png" class="icono" id="x-btn-estilo" alt=""></h1>
            </div>


            <!-- menu de navegacion-->
            <nav class="nav navbar-expand-lg ">
                <a class="menu-nav a-color-blanco btn-hover txt-s centrar" href="../Interfaz-cliente/conocenos.php">Conocenos</a>
                <a class="menu-nav a-color-blanco btn-hover txt-s centrar" href="categorias.php">Categorias</a>
                <input class="menu-nav txt-s centrar radius buscar" type="text" id="" placeholder="  Buscar">
                <button class="btn-buscar btn-hover" type="submit"><img src="../img/iconos/search-blanco.png" class="icono" alt=""></button>
                <a class="menu-nav a-color-blanco btn-hover txt-s centrar " id="btncarrito"><img src="../img/iconos/carrito-blanco.png" class="icono" alt=""></a>
                <a class="menu-nav a-color-blanco btn-hover txt-s centrar " href="../../index.php"><img src="../img/iconos/salir-blanco.png" class="icono" alt=""></a>
            </nav>
        </header>




        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="../js/funciones_inicio.js"></script>

</body>

</html>
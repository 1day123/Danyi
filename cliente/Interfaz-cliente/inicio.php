<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">

    <title>Inicio</title>
    <?php
    session_start();
    ?>
</head>



<body class="overflow-hidden">
    <div class="container-fluid">
        <!-- video del fondo-inicio -->
        <img src="../img/Fondo-general.jpg" class="fondo" id="fondo-inicio" alt="">
        <!-- sombra para el fondo -->
        <div class="sombra-inicio"></div>
        <!-- menu del inicio-cliente -->
        <?php include("menu-navegacion-cliente.php"); ?>

        <h4 class="pregunta-inicio-tipo_usu">Tipo de usuario: <?php include("../../servidor/variables_sesion/variable_tipo_sesion.php"); ?></h4>
        <h4 class="pregunta-inicio">Hola <?php include("../../servidor/variables_sesion/variable_nombre_sesion.php"); ?>,
            ¿Que vas a comprar hoy?</h4>

        <!-- frase-promocion-inicio -->
<<<<<<< HEAD
        <img src="../videos/fondo-inicio.jpg" class="imagen-inicio">
=======
        <img src="../img/fondo-inicio.jpg" class="imagen-inicio">
>>>>>>> 2072517d17c7595946e7e4ace434f7f57b478ca0
        <img src="../img/comiendo.jpg" alt="" class="comiendo">
        <h2 class="frase1">¡Encuentra la tradición que más te antoje en nuestros productos!</h2>
        <h3 class="inicio-frase">Ofrecemos una amplia variedad de dulces que abarcan desde
            los clásicos de leche y coco hasta los más exquisitos como los de convento, enchilado
            y cristalizado. </h3>

        <video muted autoplay loop class="oferta">
            <source src="../videos/oferta.mp4" type="video/mp4">
        </video>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
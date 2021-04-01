<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJETO MVC</title>

    <!--===========================
          PLUGINS DE CSS
===============================-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--===========================
        PLUGINS DE JS
     ===============================-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Latest compiled Fontanwesome -->
    <script src="https://kit.fontawesome.com/d3b16fe3ce.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--===========================
        LOGOTIPO
    ===============================-->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <!--===========================
        BOTONERA
    ===============================-->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
            

                <!--GET: $_GET["VARIAVEL"]-->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=registo">Regitos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingresos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>
            </ul>
        </div>
    </div>
    <!--===========================
             Contenido
    ===============================-->
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            if (isset($_GET["pagina"])) {
                if (
                    $_GET["pagina"] == "registo" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "salir"
                ) {

                    include "paginas/" . $_GET["pagina"] . ".php";
                }
            } else {
                include "paginas/registo.php";
            }
            ?>
        </div>
    </div>
</body>

</html>
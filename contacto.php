<?php
session_start();
  
if (!isset($_SESSION['usuario'])) {
    $_SESSION['message'] = "Error: Tienes que iniciar sesión";
    header('location: index.php');
}
?>
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Dinglis+</title>
    <link rel="icon" type="image/x-icon" href="imagenes/icono.ico">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/pagina.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/deslizador.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>

    <nav id="nav">
        <div id="nav-logo">
            <a>Dinglis+</a>
        </div>

        <div id="nav-paginas">
            <ul id="nav-lista">
                <div style="margin-right: 50px;width: 0;float: right;">&nbsp;</div>
                <li class="dropdown" style="float: right;">
                    <a class="dropbtn hover-underline-animation" style="margin-right: 0;" href="">Perfil</a>
                    <div class="dropdown-content">
                        <a class="hover-underline-animation" style="margin-right: 0px;" href="index.php">Estadisticas</a>
                        <a class="hover-underline-animation" style="margin-right: 0px;" href="inicio.php?logout='1'">Cerrar sesión</a>
                    </div>
                </li>
                <li style="margin-top: 10;"><a style="margin-right: 40px;" class="actual" href="contacto.php">Contacto</a></li>
                <li><a class="hover-underline-animation" style="margin-right: 40px;" href="herramientas.php">Herramientas</a></li>
                <li><a class="hover-underline-animation" href="calificanos.php">Calificanos</a></li>
                <li><a class="hover-underline-animation" href="jugar.php">Jugar</a></li>
                 <li><a class="hover-underline-animation" href="tips.php">Tips</a></li>
                <li><a class="hover-underline-animation" href="inicio.php">Inicio</a></li>

            </ul>
        </div>
    </nav>


    <div id="contenedor">
        <div>
            <section style="height: 77%;">

                <div id="patron1" style="width: 700px;height: 150px;">
                    <p class="titulo" style="margin-top: 0px; margin-bottom: 0px;">
                        Contacto&nbsp;
                    </p>
                </div>


                <div class="bloque">
                    <p id="parrafo">




                        Acá está la información para contactar a los creadores de Dinglis+<br><br>

                        Javier Cantillo de la Asunción - javiercantillodelaasuncion@pascualbravo.edu.co<br><br>
                        Stiven Javier Guzmán Otero - stivenjavierguzmanotero@pascualbravo.edu.co<br><br>
                        Jaider Rojas Alvarez - jaiderrojasalvarez@pascualbravo.edu.co<br><br>
                        Omar Yesid García Guzmán - omaryesidgarciaguzman@pascualbravo.edu.co

                    </p>
                </div>
            </section>

            <section style="height: 77%;">
                <img style="width: 700px; height: 700px; margin-top: 10%; margin-left: 10%;" class="imagen" src="imagenes/email.png">
            </section>
        </div>
    </div>

</body>
<footer>
    <div id="info-footer">
        <p>Dinglis+ © 2021</p>
    </div>

    <div id="paginas-footer">
        <p style="display: inline-block; margin-right: 10%; margin-left: 25%;">Institución Universitaria Pascual Bravo</p>
        <p style="display: inline-block;">Institución Educativa Hectór Abad Gómez</p>
    </div>
</footer>

</html>
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
    <title>Jugar - Dinglis+</title>
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
                        <a class="hover-underline-animation" style="margin-right: 0px;" href="inicio.php?logout='1'">Cerrar sesión</a>
                    </div>
                </li>
                <li><a class="hover-underline-animation" href="contacto.php">Contacto</a></li>
                <li><a class="hover-underline-animation" href="herramientas.php">Herramientas</a></li>
                <li><a class="hover-underline-animation" href="calificanos.php">Calificanos</a></li>
                <li style="margin-top: 10;"><a style="margin-right: 40px;" class="actual" href="jugar.php">Jugar</a></li>
                <li><a class="hover-underline-animation" style="margin-right: 40px;" href="tips.php">Tips</a></li>
                <li><a class="hover-underline-animation" href="inicio.php">Inicio</a></li>

            </ul>
        </div>
    </nav>


    <div id="contenedor">
        <div>
            <section style="height: 77%;">

                <div id="patron1" style="padding-bottom: 7%; padding-right: 2%;">
                    <p class="titulo" style="margin-top: 0px; margin-bottom: 0px; font-size: 100px; text-align: left;">
                        ¿CÓMO JUGAR<br>DINGLIS+?&nbsp;
                    </p>
                </div>


                <div class="bloque">
                    <p id="parrafo">
                        Para poder jugar a Dinglis+ se debe ir a la página de Scratch, la cual es la plataforma con la que se realizó y donde se aloja.<br><br>Puedes hacerlo dándole clic al botón de Jugar o mediante esta página. <br>
                    </p>
                </div>
                <div class="bloque">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <button class="boton" style="margin-left: 10%;margin-top: 50px;"><a href="https://scratch.mit.edu/projects/419176047" target="_blank" style="color: white;text-decoration: none;">Ir a la página de Scratch</a></button>
                </div>
            </section>

            <section style="height: 77%; margin-bottom: 7%;">
                <iframe style="border: solid rgb(255, 109, 109) 5px; border-radius: 5px; margin-left: -100px; margin-top: 30px;" src="https://scratch.mit.edu/projects/419176047/embed" allowtransparency="true" scrolling="no" allowfullscreen="" width="976" height="734" frameborder="0"></iframe>
            </section>
        </div>

        <div style="display: inline-block; width: 100%;margin-top: 75px;">
            <br><br><br><br>
            <div id="seccion-abajo" style="display: inline-block; width: 100%;">
                <section>
                <div id="patron1" style="padding-bottom: 0; padding-right: 2%;height: 275px;">
                    <p class="titulo" style="margin-top: 0px; margin-bottom: 0px; font-size: 100px; text-align: left;">
                        VIDEO TUTORIAL
                    </p>
                </div>
                    <div class="bloque">
                        <p id="parrafo">
                        En este video se explica las mecánicas, controles y objetivos del videojuego.</p>
                    </div>
                </section>

                <section>
                    <iframe src="https://www.youtube.com/embed/Yeb7YUQrVkA" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="margin-top: 15%;border-radius: 5px;border: solid rgb(255, 109, 109) 5px;" width="768" height="432" frameborder="0"></iframe>
                </section>
            </div>
        </div>

    </div>

<footer>
        <div id="info-footer">
            <p>Dinglis+ © 2021</p>
        </div>
    
        <div id="paginas-footer">
            <p style="display: inline-block; margin-right: 10%; margin-left: 25%;">Institución Universitaria Pascual Bravo</p>
            <p style="display: inline-block;">Institución Educativa Hectór Abad Gómez</p>
        </div>
    </footer>



</body>

</html>
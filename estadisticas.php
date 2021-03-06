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
    <title>Inicio - Dinglis+</title>
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
                <li><a class="hover-underline-animation" href="jugar.php">Jugar</a></li>
                <li><a class="hover-underline-animation" href="tips.php">Tips</a></li>
                <li style="margin-top: 10;"><a style="margin-right: 40px;" class="actual" href="inicio.php">Inicio</a></li>
            </ul>
        </div>
    </nav>


    <div id="contenedor">
        <div>
            <section style="height: 77%;">

                <div id="patron1">
                    <p class="titulo" style="margin-top: 0px; margin-bottom: 0px;">
                        APRENDE<br>INGLÉS&nbsp;
                    </p>
                </div>


                <div class="bloque">
                    <p id="parrafo">
                        Aprende sustantivos, verbos, adjetivos, adverbios con Dinglis+<br>
                        Puedes aprender jugando el videojuego o haciendo el quiz.
                    </p>
                </div>
                <div class="bloque">
                    <button class="boton" style="margin-left:25%; margin-top: 30px;"><a href="jugar.php" style="text-decoration: none; color: white;">Jugar</a></button>
                    <button class="boton" style="margin-top: 0px;"><a href="calificanos.php" style="text-decoration: none; color: white;">Calificanos</a></button>
                </div>
            </section> 

            <section style="height: 77%;">
                <img class="imagen" src="imagenes/english.jpg">
                <img style="margin-left: 30%;" src="imagenes/iloveenglish.gif">
            </section>
        </div>

        <div style="display: inline-block; width: 100%;">
            <br><br><br><br>
            <div id="seccion-abajo" style="display: inline-block; width: 100%;">
                <section>
                    <div id="patron2" style="margin-left: 10%;height: 160px;">
                        <p class="titulo" style="margin-top: 0px; margin-bottom: 0px;">
                            GALERÍA
                        </p>
                    </div>
                    <div class="bloque">
                        <p id="parrafo">
                        Acá están varias imágenes del videojuego de Scratch, donde se ven varios niveles y la selección de personajes.</p>
                    </div>
                </section>

                <section>
                    <div class="deslizador">
                        <ul style="margin-top: 0;">
                            <li>
                                <img src="imagenes/imgJuego1.png" alt="Logo">
                            </li>
                            <li>
                                <img src="imagenes/imgJuego2.png" alt="Selección de Personajes">
                            </li>
                            <li>
                                <img src="imagenes/imgJuego3.png" alt="Primer Nivel">
                            </li>
                            <li>
                                <img src="imagenes/imgJuego4.png" alt="Segundo Nivel">
                            </li>
                        </ul>
                    </div>

                </section>
            </div>
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
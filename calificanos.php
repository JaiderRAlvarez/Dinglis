<?php include("calificar.php"); ?>
<?php
  
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

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance:textfield; 
    }
</style>

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
                <li style="margin-top: 10;"><a style="margin-right: 40px;" class="actual" href="calificanos.php">Calificanos</a></li>
                <li><a class="hover-underline-animation" style="margin-right: 40px;" href="jugar.php">Jugar</a></li>
                <li><a class="hover-underline-animation" href="tips.php">Tips</a></li>
                <li><a class="hover-underline-animation" href="inicio.php">Inicio</a></li>
            </ul>
        </div>
    </nav>


    <div id="contenedor">
        
    <div>
            <section style="height: 77%;">

                <div id="patron1" style="width: 900px;height: 180px;">
                    <p class="titulo" style="margin-top: 0px; margin-bottom: 0px;padding-left: 5%;">
                        CALIFICANOS
                    </p>
                </div>


                <div class="bloque">
                    <p id="parrafo">
                        ¡Hola, <?php echo $_SESSION['usuario']; ?>!
                    </p>
                    <p id="parrafo">
            
                        Aqui puedes calificar nuestro proyecto.
                        
                    </p>
                    






                    <form action="calificar.php" method="POST" style="width: 900px;">
                        <div>
                            <input type="number" id="calificacion " name="calificacion" style="width: 100%;border: 1px solid silver;padding: 10px;border-radius: 5px;" placeholder="1-10" min="1" max="10" required="">
                        </div>
                        <div>
                        <button class="boton" type="submit" name="Calificar" style="margin-left:34%; margin-top: 30px; text-decoration: none; color: white;padding-left: 24px;">Calificar</button>
                        </div>
                    </form>
                        <?php if (isset($_SESSION['message'])) { ?>
                            <div class="alert alert-primary" style="background-color: rgb(255, 109, 109); color: white;padding-top: 20px;padding-bottom: 20px;padding-left: 0px;border-radius: 5px;font-family: 'Roboto Mono', monospace;width: 300px;margin-left: 40%; " role="alert">
                            <strong style="padding-left: 21%;"><?= $_SESSION['message']?></strong>
                            </div>
                        <?php } ?>









                </div>
            </section> 

            <section style="height: 77%;">
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
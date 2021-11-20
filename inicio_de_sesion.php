<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio de sesión</title>
	<link rel="stylesheet" href="estilos.css">
</head>

<body>
	<div>
		<form action="consultar.php" method="POST">
			<h2>Por favor inicie sesión</h2>
			<div>
				<ul>
					<li>
						<input id="email" type="text" name="usuario" placeholder="Usuario" size="30"><br><br>
					</li>
					<li>
						<input id="clave" type="password" name="clave" placeholder="******" size="30"><br><br>
					</li>
				</ul>
			</div>
			<div style="text-align: center;">
				<button class="boton" name="consultar" id="consultar">Enviar</button>
			</div>
		</form>
	</div>
</body>

</html>
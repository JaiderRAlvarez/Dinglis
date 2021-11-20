<?php include("db.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" href="estilos.css">
</head>

<body>
	<div>
		<form action="guardar.php" method="POST">
			<h2>Por favor registrese</h2>
			<div>
				<ul>
					<li>
						<input id="usuario" name="usuario" type="text" placeholder="Usuario" size="30"><br><br>
					</li>
					<li>
						<input id="nombre" name="nombre" type="text" placeholder="Nombre" size="30"><br><br>
					</li>
					<li>
						<input id="clave" name="clave" type="password" placeholder="Contraseña" size="30"><br><br>
					</li>
					<li>
						<input id="email" name="email" type="text" placeholder="Email" size="30"><br><br>
					</li>
					<li>
						<input id="fechanacimiento" name="fechanacimiento" type="date" size="30"><br><br>
					</li>
					<div style="text-align: center;">
						<button class="boton" name="guardar" id="guardar">Enviar</button>
					</div>
				</ul>
			</div>

		</form>
	</div>
</body>

</html>
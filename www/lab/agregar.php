<!DOCTYPE html>
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Emerald 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120902

-->
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Laboratorio Programaci&oacute;n III</title>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
	<div id="wrapper">
		<div id="header-wrapper" class="container">
			<div id="header" class="container">
				<div id="logo">
					<h1><a href="#">Usuarios</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li class="current_page_item"><a href="index.php">Homepage</a></li>
						<li><a href="agregar.php">Nuevo</a></li>
						<li><a href="listar.php">Listar</a></li>
						<li><a href="borrar.php">eliminar</a></li>
					</ul>
				</div>
			</div>
			<div><img src="images/img03.png" width="1000" height="40" alt="" /></div>
		</div>
		<!-- end #header -->

		<div id="page">
			<div id="content">
				<div class="post">
					<h2>Sistema de Administraci&oacute;n de Usuarios</h2>
					<p class="meta"><span class="date"><?php echo date("d - m - Y"); ?></span></p>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<h3>Nuevo Usuario</h3>
						<br>

						<form action="" method="post">
						<div class="formulario"  >
						<label>Nombre</label>
						<input type="text" name="nombre" required>
						</div>

						<div  class="formulario"   >
						<label>Apellido</label>
						<input type="text" name="apellido" required>
						</div>

						<div  class="formulario"   >
						<label>Nick</label>
						<input type="text" name="nick" required>
						</div>

						<div  class="formulario"   >
						<label>Email</label>
						<input type="email" name="email" required>
						</div>

						<div  class="formulario"    >
						<label>Direcci&oacute;n</label>
						<input type="text" name="direccion" required>
						</div>


						<div  class="formulario"   >
						<label>Teléfono</label>
						<input type="text" name="telefono" required>
						</div>


						<div  class="formulario"   >
						
						<label for="genero">Seleccione género</label>
  				<select name="genero">
    <option value="Hombre">Hombre</option>
    <option value="Mujer">Mujer</option>
    <option value="Otro">Otro</option>
  </select>

						
						</div>


						<input type="submit" value="Submit">
						</form>


						<?php

						

						if($_SERVER['REQUEST_METHOD'] === "POST"){
							
							
							$nombre = $_POST['nombre'];
							$apellido = $_POST['apellido'];
							$nick = $_POST['nick'];
							$email = $_POST['email'];
							$direccion = $_POST['direccion'];
							$telefono = $_POST['telefono'];
							$gender = $_POST['genero'];
					

						// Se conecta a la base de datos
						$dbconn = pg_connect("host=db dbname=usuariosdb user=usuario password=usuario")
							or die('No se ha podido conectar: ' . pg_last_error());
						// Se busca un usuario con el nick ingresado en el formulario
						$result = pg_query_params($dbconn, 'SELECT * FROM usuario WHERE nick = $1', array($nick));
						if ($line = pg_fetch_assoc($result)) {
							if (count($line) > 0) {
								$nickError = "El nick ya existe";
								$error = true;
							}
						}
						?>


						<?php
						$array = array($nombre, $apellido, $nick, $email, $direccion, $telefono, $gender);
						$sql = 'INSERT INTO usuario(nombre, apellido, nick, email, direccion, telefono, genero) values ($1, $2, $3, $4, $5, $6, $7);';
						// Se inserta en la base de datos el nuevo usuario
						$result = pg_query_params($dbconn, $sql, $array);
						?>
						<?php
						// se cierra la conexión a la base de datos
						if ($dbconn) {
							pg_close($dbconn);
						}

					}
						?>

					</div>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	</div>
	<div id="footer-content"></div>
	<div id="footer">
		<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
	</div>
	<style>

		.formulario{
			justify-content:space-between;
			display:flex;
			width: 400px;
			gap:5px;
			padding:5px;
		}
	</style>
</body>

</html>
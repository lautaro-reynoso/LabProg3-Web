<html>
<body>
<?php if(! ($_SERVER["REQUEST_METHOD"] == "POST")) {?>
	<form action="form1.php" method="POST">
		Su nombre:
		<input type=text name=nombre><br>
		Su edad:
		<input type=text name=edad><br>
		<input type=submit>
	</form>
<?php
} else {
?>
<h3>Su nombre es <?php echo $_POST["nombre"] ?></h3>
<h3>Hace <?php echo $_POST["edad"] ?> a&ntilde;os que naci&oacute;</h3>
<?php } ?>

</html>
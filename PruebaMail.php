<!DOCTYPE html>
<html>
<head>
	<title>PruebaMail</title>
	<link rel="stylesheet" type="text/css" href="PruebaMail.css">
</head>
<body>
	<form method="POST">
		<input type="text" placeholder ="Nombre" name="nombre" required="">
		<input type="email" placeholder ="Mail" name="mail"  required="">
		<input type="text" placeholder ="Asunto" name="asunto" required="">
		<textarea placeholder ="Mensaje" name="msg"></textarea>
		<input type="submit" name="enviar">
	</form>
<?php
	include("Correo.php");
?>
</body>
</html>
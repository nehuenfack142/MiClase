<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $contraseña = trim($_POST['contraseña']);
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg, contraseña) VALUES ('$name','$email','$fechareg', '$contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    $cons = mysqli_query($conex,"SELECT id FROM datos ");
	    $filas= mysqli_num_rows($cons);
		if ($filas == 1) {
	    $consulto = mysqli_query($conex,"UPDATE datos SET tipousuario ='Preceptor'");
	    }
		
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok" style="margin: 0px 0px 0px 100px;">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad" style="margin: 0px 0px 0px 100px;">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad" style="margin: 0px 0px 0px 100px;">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
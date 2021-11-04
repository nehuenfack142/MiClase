<?php

include("con_db.php");

if (isset($_POST['guardar'])) {
    if (strlen($_POST['name']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $cursos = trim($_POST['cursos']);

	    $consulta = "UPDATE datos SET cursos ='".$cursos."' WHERE email like '".$email."' and tipousuario like 'Alumno'";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }//
}

?>
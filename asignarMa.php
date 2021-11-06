<?php

include("con_db.php");

if (isset($_POST['guardar'])) {
    if (strlen($_POST['name']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $materias = trim($_POST['materias']);

	    $consulta = "UPDATE datos SET materias ='$materias' WHERE email like '".$email."' ";
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
<?php

include("con_db.php");
if (isset($_POST['guardar'])) {
    if (strlen($_POST['link']) >= 1) {
	    $link = trim($_POST['link']);
	    $cursos = trim($_POST['curso']);
	    $consulta = "INSERT INTO link(link,curso) VALUES ('$link','$cursos')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<p>¡Se ha subido correctamente!</p>
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
    }
}

?>
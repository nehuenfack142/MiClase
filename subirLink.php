<?php

include("con_db.php");
if (isset($_POST['guardar'])) {
    if (strlen($_POST['link']) >= 1) {
	    $link = trim($_POST['link']);
	    $cursos = trim($_POST['curso']);
	    $materia = trim($_POST['materia']);
	    $consulta = "INSERT INTO link(link,curso,materias) VALUES ('$link','$cursos','$materia')";
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
    }
}

?>
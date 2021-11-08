<?php

include("con_db.php");
if (isset($_POST['guardar1'])) {
    if (strlen($_POST['link1']) >= 1) {
	    $link = trim($_POST['link1']);
	    $cursos = trim($_POST['curso1']);
	    $materia = trim($_POST['materia1']);
	    $consulta = "INSERT INTO evaluaciones(link,curso,materias) VALUES ('$link','$cursos','$materia')";
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
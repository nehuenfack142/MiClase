<?php

include("con_db.php");
if (isset($_POST['guardar2'])) {
    if (strlen($_POST['link2']) >= 1) {
	    $link = trim($_POST['link2']);
	    $cursos = trim($_POST['curso2']);
	    $materia = trim($_POST['materia2']);
	    $consulta = "INSERT INTO carpetas(link,curso,materias) VALUES ('$link','$cursos','$materia')";
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

<?php
$inc = include("con_db.php");
if(!isset($_SESSION)){
session_start();
$seccion=$_SESSION['email'];}
{
$resultado = mysqli_query($conex,"SELECT * FROM datos where email ='".$seccion."'" );

	if ($resultado) {
	  		while ($row = $resultado -> fetch_array()){
			$materias = $row['materias'];
			$cursos = $row['cursos'];
			$id = $row['id'];
			$cons=$conex->query("SELECT id FROM datos where email ='".$email."' and id = '".$id."' ");
			$filas= mysqli_num_rows($cons);
			

		}
	}
				
			 }
if (isset($_POST['guardar'])) {
    if (strlen($_POST['name']) >= 1) {
	    $name = trim($_POST['name']);
	    $mail = trim($_POST['mail']);
	    $curso = trim($_POST['curso']);
		$tabla = mysqli_query($conex,"SELECT * FROM datos where email ='".$mail."' and nombre ='".$name."' ");
				while ($row = $tabla -> fetch_array()){ 
							$ida = $row['id'];
							$tipousuario = $row['tipousuario'];
							$contra=$row['contraseña'];
							$fecha=$row['fecha_reg'];
							$cursoso=$row['cursos'];
							}
	    if (!empty($cursoso)&& $tipousuario == 'Alumno') {
	    	$consulta = "UPDATE datos SET cursos ='$curso' WHERE email like '".$mail."' ";
	    }else  if (empty($cursoso && $tipousuario == 'Alumno')){
	    	$consulta = "UPDATE datos SET cursos ='$curso' WHERE cursos = '' and email like '".$mail."' ";
	    }else if (!empty($cursoso)&& $tipousuario == 'Profesor') {
	    	$consulta = "INSERT INTO datos(id,tipousuario,nombre,email,fecha_reg,contraseña,cursos,materias) VALUES ('','".$tipousuario."','".$name."','".$mail."','".$fecha."','".$contra."','".$curso."','')";
	    }else if (empty($cursoso && $tipousuario == 'Profesor')){
	    	$consulta = "UPDATE datos SET cursos ='$curso' WHERE cursos = '' and email like '".$mail."' ";
	    
	    
	    $resultadoo = mysqli_query($conex,$consulta);
	    if ($resultadoo) {
	    	?> 
	    	
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!<?php echo $resultadoo;?></h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}}

?>
<?php

include("con_db.php");

if (isset($_POST['register']))
{
    if (strlen($_POST['email']) >= 1 && strlen($_POST['contraseña'] >= 1))
    	{
	    $email = $_POST['email'];
	    $fechareg = date("d/m/y");
	    $contraseña = $_POST['contraseña'];
	    $cons=$conex->query("SELECT * FROM datos where email ='".$email."' and contraseña = '".$contraseña."' ");
	    $filas= mysqli_num_rows($cons);
	    $consulta = "SELECT tipousuario FROM datos where email='".$email."'";
	  	 $resultado=mysqli_query($conex,$consulta);
	  	}

	  	if ($resultado) {
	  		while ($row = $resultado->fetch_array()){
	  		$tipo = $row['tipousuario'];
	    	if($filas == 1 && $tipo == 'Profesor'){
	    	   header("Location: http://localhost/Miclase/cursos.php");
	    	   session_start();
          	$_SESSION['email']=$email;
	    	}

	    	else if($filas == 1 && $tipo == 'Alumno'){
	    	   header("Location: http://localhost/Miclase/materias.php");
	    	   session_start();
          	$_SESSION['email']=$email;
	      }

	      else if($filas == 1 && $tipo == 'Preceptor'){
	    	   header("Location: http://localhost/Miclase/preceptor.php");
	    	   session_start();
          	$_SESSION['email']=$email;
	      } 



          else if ($filas == 0){

	    		echo "Datos incorrectos";}

	}


    
 }
}

?>

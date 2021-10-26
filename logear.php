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
	    	
	 }
	    	if($filas == 1){
	    		session_start();
           $_SESSION['email']=$email;
	    			header("Location: http://localhost/Miclase/cursos.php");
	    		}
          else if ($filas == 0){

	    		echo "Datos incorrectos";}

}


    

	

?>

<?php 

include("con_db.php");

if (isset($_POST['register']))
 {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['contraseña'] >= 1)) 
    {
	    $email = $_POST['email'];
	    $fechareg = date("d/m/y");
	    $contraseña = $_POST['contraseña'];

	    $cons=mysqli_query($conex,"SELECT * FROM datos where email ='".$email."' ");
	    	$filas= mysqli_num_rows($cons);

	    	if($filas == 1)
	    		 
	    		 header("Location: http://localhost/Miclase/Index.php");
	    		
		
		    	else if ($filas == 0)

	    		echo "Datos incorrectos";
	 

    
	    
    }

	}
 
?>
<?php

$inc = include("con_db.php");
session_start();
  $seccion = $_SESSION['email'];
	$tipo = $_SESSION['tipousuario'];
	{
	$cons = "SELECT * FROM datos where email='".$seccion."'";
	$res = mysqli_query($conex, $cons);
	if ($res)
		{
		while($row = $res -> fetch_array())
			{
			$name = $row['nombre'];
			$email = $row['email'];
			$tipo = $row['tipousuario'];
			}
		}
	}?>
	
			<div class="datos" >
				<p><?php echo $name; ?></p>
				<p><?php echo $tipo; ?></p>
				

			</div>

			

			<style>
				.datos{
				width: 200px;
				height: 100px;
				margin-left: 910px ;
    			background: #89d0ca;
    			color: #5e35b1;
    			border-radius: 5px;
    			text-align-last: center;
    			font-size: 1.2em;
    			float: center;
				}

			</style>
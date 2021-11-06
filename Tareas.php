<?php
$inc = include("con_db.php");
if(!isset($_SESSION)){
session_start();
$seccion=$_SESSION['email'];}
{
$resultado = mysqli_query($conex,"SELECT * FROM datos where email ='".$seccion."'" );

	if ($resultado) {
	  		while ($row = $resultado -> fetch_array()){
			$cursos = $row['cursos'];
			$id = $row['id'];
			$cons=$conex->query("SELECT id FROM datos where email ='".$email."' and id = '".$id."' ");
			$filas= mysqli_num_rows($cons);
			

		}
	}

}
?>


			

			<?php 
				$tabla = mysqli_query($conex,"SELECT * FROM link where curso ='".$cursos."'");

				while ($row = $tabla -> fetch_array()){ ?>
				<div class=datos2>
					
							<a href="<?php echo $row['link'];?>"><?php echo $row['link'];?></a><br>
						
					
			 </div>
			<?php } ?>
		

			<style>
				.datos2{
				min-height: 300px;
				max-height: 400px;
				width: 300px;
    			background: #89d0ca;
    			color: #5e35b1;
    			border-radius: 20px;
    			font-size: 48px;
    			float: center;
    			padding: 150px 110px 120px 130px;
    			font-family: Oswald;
				}

			</style>
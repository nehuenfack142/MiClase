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
				$tabla = mysqli_query($conex,"SELECT * FROM datos where email ='".$email."' ");

				while ($row = $tabla -> fetch_array()){ ?>
				<div style="margin: 0px 0px 150px 0px; ">
					
					
							<a class="datos2" href="alumno.php"><?php echo $row['materias'];?></a><br>
				
					
			 </div>
			<?php } ?>
		

			<style>
				.datos2{
				
				min-height: 300px;
				max-height: 400px;
    			background:  #5e35b1;
    			color: #89d0ca;
    			border-radius: 20px;
    			font-size: 48px;
    			float: center;
    			padding: 50px 800px 50px 20px;
    			margin: 0px 0px 0px 0px;
    			font-family: Oswald;
				}
				

			</style>






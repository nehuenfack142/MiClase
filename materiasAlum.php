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
				$tabla = mysqli_query($conex,"SELECT * FROM datos where email ='".$email."' and id = '".$id."'");

				while ($row = $tabla -> fetch_array()){ ?>
				<div class=>
					
					
							<a class="datos2" href="alumno.php"><?php echo $row['materias'];?></a><br>
				
					
			 </div>
			<?php } ?>
		

			<style>
				.datos2{
				
				min-height: 300px;
				max-height: 400px;
				width: 310px;
    			background:  #5e35b1;
    			color: #89d0ca;
    			border-radius: 20px;
    			font-size: 48px;
    			float: center;
    			padding: 100px 100px 100px 100px;
    			font-family: Oswald;
				}
				

			</style>






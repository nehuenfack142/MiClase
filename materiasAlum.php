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
				<div class="datos2" style="margin: 0px 0px 50px 0px; ">
					
					
							<a class="datos3" href="alumno.php" style="min-height: 300px; max-height: 400px;"><?php echo $row['materias'];?></a><br>
				
					
			 </div>
			<?php } ?>
		

			<style>
				.datos2{
				
				min-height: 100px;
				max-height: 400px;
    			background:  #5e35b1;
    			color: #89d0ca;
    			border-radius: 20px;
    			font-size: 48px;
    		    padding: 24px 0px 24px 0px;
    			font-family: Oswald;
				}
				.datos3{
				
				min-height: 100px;
				max-height: 400px;
    			background:  ;
    			color: #89d0ca;
    			border-radius: 20px;
    			font-size: 48px;
    		    padding: 24px 900px 24px 50px;
    			font-family: Oswald;
				}
				

			</style>






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


			

		<!--	<?php 
				$tabla = mysqli_query($conex,"SELECT * FROM datos where email ='".$email."' ");

				while ($row = $tabla -> fetch_array()){ ?>
				<div class=datos2>
					
							<a href="profesor.php"><?php echo $row['cursos'];?></a><br>
						
					
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

			</style>-->
 <?php 
				$tabla = mysqli_query($conex,"SELECT * FROM datos where email ='".$email."' ");

				while ($row = $tabla -> fetch_array()){ ?>
				<div class="datos2" style="margin: 0px 0px 50px 0px; ">
					
							<form  action="profesor.php" method="get"  class="u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-3" >
			                <input style="background: transparent; padding: 24px 900px 24px 50px; border-color: transparent;" type="submit" name="enviar" value="<?php echo $row['cursos'];?>"><br>
			              	</form>
							
					
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
    		    padding: 0px 0px 0px 0px;
    			font-family: Oswald;
				}
				.datos3{
				
				min-height: 100px;
				max-height: 400px;
    			background: transparent; 
    			color: #89d0ca;
    			border-radius: 20px;
    			font-size: 48px;
    		    padding: 24px 900px 24px 50px;
    			font-family: Oswald;
				}
				

			</style>

















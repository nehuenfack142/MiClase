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
?>


			

			<?php 
				$tabla = mysqli_query($conex,"SELECT * FROM link where curso ='".$cursos."' and materias ='".$materias."' ");
				while ($row = $tabla -> fetch_array()){ ?>
				<div class="datos1">
				<div class="u-border-4 u-border-custom-color-3 u-shape u-shape-right u-shape-top u-shape-3" style="margin: 2% 2% 2% -2%;">
							<h2 >Tarea:<?php echo $row['id'];?></h2>
							<h5><a href="<?php echo $row['link'];?>"><?php echo $row['link'];?></a></h5><br>
				</div>
			 </div>
			<?php } ?>
		

			<style>
				.datos1{
					background: #89d0ca;
					padding: 20px 50px 20px 50px; 
					margin: 50px 50px 50px 50px; 
					border-radius: 20px;
				}
				

			</style>
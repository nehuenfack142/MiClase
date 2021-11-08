<?php
$inc = include("con_db.php");
if(!isset($_SESSION)){
session_start();
$seccion=$_SESSION['email'];}
{
$resultado = mysqli_query($conex,"SELECT * FROM datos where email ='".$seccion."'" );
$i=0;
	if ($resultado) {
	  		while ($row = $resultado -> fetch_array()){
			$array[$i]=$cursos = $row['cursos'];
			$id = $row['id'];
			$i++;
		}
	}$cons=$conex->query("SELECT id FROM datos where email ='".$email."' ");
			$filas= mysqli_num_rows($cons);

}
?>


			

			<?php 
				$consa=$conex->query("SELECT id FROM tabla ");
				$filass= mysqli_num_rows($consa);
                $i=0;
				$tabla = mysqli_query($conex,"SELECT * FROM tabla where curso ='".$array[$i]."' ");
                  while ($row = $tabla -> fetch_array()){
                          $a[$i]= $row['curso'];
						  $b[$i]= $row['link'];
						  if ($i<$filas-1) {
						  $i++;	
						  $tabla = mysqli_query($conex,"SELECT * FROM tabla where curso ='".$array[$i]."' ");
						  }
                          }
                   
				for($i=0;$i<$filas;$i++){ ?>
				<div class="datos1">
				<?php if (empty($a[$i])||empty($b[$i])) { ?>
					<div class="u-border-4 u-border-custom-color-3 u-shape u-shape-right u-shape-top u-shape-3" style="margin: 2% 2% 2% -2%;">
							<h2 >Complete demas tablas...</h2>
					</div>
				<?php }else{ ?>
				<div class="u-border-4 u-border-custom-color-3 u-shape u-shape-right u-shape-top u-shape-3" style="margin: 2% 2% 2% -2%;">
							<h2 >Tabla: <?php echo $a[$i];?></h2>
							<h5><a href="<?php echo $b[$i];?>"><?php echo $b[$i];?></a></h5><br>
				</div>
			 </div>
			<?php } ?>
			<?php } ?>
		

			<style>
				.datos1{
					background: #89d0ca;
					padding: 20px 50px 20px 50px; 
					margin: 50px 50px 50px 50px; 
					border-radius: 20px;
				}
				

			</style>
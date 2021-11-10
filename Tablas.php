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
				
                 for($e=0;$e<$filas;$e++){
                 $tabla = mysqli_query($conex,"SELECT * FROM tabla where curso= '".$array[$e]."' ");
                 while ($row = $tabla -> fetch_array()){
                          $a[$i]= $row['curso'];
						  $b[$i]= $row['link'];
						  $c[$i] =$row['id'];
					      $i++;
							}}
					$i=0;
					$cant=0;
					while (!empty($c[$i])) {
						$cant+=1;
						$i++;
					}
					echo $cant;

						  //if ($idd[$e]==1) {
						  //$a[$e-1]=$a[$e];
						  //$e++;	
						  //$tabla = mysqli_query($conex,"SELECT * FROM tabla where curso ='".$array[$i]."' and id='".$idd[$e]."' ");
						  //}
						  //if ($a[$e]==$a[$e-1]) {
						  //$e++;
						  //$i=$i;	
						  //$tabla = mysqli_query($conex,"SELECT * FROM tabla where curso ='".$array[$i]."' and id='".$idd[$e]."' ");
						  //}else 
						  //if ($a[$e]!=$a[$e-1]){
						  //$e++;
						  //$i++;	
						  //$tabla = mysqli_query($conex,"SELECT * FROM tabla where curso ='".$array[$i]."' and id='".$idd[$e]."' ");
						  //}
 
                          //}
                   			
				for($i=0;$i<$cant;$i++){ ?>
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
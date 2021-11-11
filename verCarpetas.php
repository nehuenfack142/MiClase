<?php
if (isset($_GET['enviar2'])) {
	$h = $_POST['enviar'];//curso
	$j = $_POST['enviar2'];//materia
}
$inc = include("con_db.php");
if(!isset($_SESSION)){
session_start();
$seccion=$_SESSION['email'];}
{
$resultado = mysqli_query($conex,"SELECT * FROM datos where email ='".$seccion."'" );
$i=0;
	if ($resultado) {
	  		while ($row = $resultado -> fetch_array()){
			$array[$i]=$materias = $row['materias'];
			$cursos = $row['cursos'];
			$id = $row['id'];
			$cons=$conex->query("SELECT id FROM datos where email ='".$email."' ");
			$filas= mysqli_num_rows($cons);
			$i++;

		}
	}

}
?>




			<?php
				$consa=$conex->query("SELECT id FROM carpetas ");
				$filass= mysqli_num_rows($consa);

					$tabla = mysqli_query($conex,"SELECT * FROM carpetas where curso ='".$h."' and materias ='".$j."'");
					$i=0;
					while ($row = $tabla -> fetch_array()){
					$arrey[$i]= $ca= $row['materias'];
					$i++;
					}
					for ($i=0; $i < $filass ; $i++) {
						if ($j==$arrey[$i]) {
							$var= $j;
							$i=$filass;
						}
					}
					if (empty($var)) {
						$var='';
					}
				$tabla = mysqli_query($conex,"SELECT * FROM carpetas where curso ='".$h."' and materias ='".$var."' ");
				while ($row = $tabla -> fetch_array()){?>
				<div class="datos1">
				<div class="u-border-4 u-border-custom-color-3 u-shape u-shape-right u-shape-top u-shape-3" style="margin: 2% 2% 2% -2%;">
							<h2 >Evaluacion:<?php echo $row['id'];?></h2>
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

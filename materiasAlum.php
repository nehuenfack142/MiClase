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
			$cons=$conex->query("SELECT id FROM datos where email ='".$email."' ");
			$filas= mysqli_num_rows($cons);
			

		}
	}

}
?>

	
			
			
			<?php
			$consa=$conex->query("SELECT id FROM datos where tipousuario ='Profesor' and cursos='".$cursos."'");
			$filass= mysqli_num_rows($consa); 
			$i=0;
				$prof = mysqli_query($conex,"SELECT * FROM datos where tipousuario ='Profesor' and cursos='".$cursos."'");
				while ($row = $prof -> fetch_array()){
					$nom[$i] = $row['nombre'];
					$mat[$i] = $row['materias'];
					$i++;
					}
				$i=0;
				$alum = mysqli_query($conex,"SELECT * FROM datos where tipousuario ='Alumno' and cursos='".$cursos."'");
				while ($row = $alum -> fetch_array()){
					$mate[$i] = $row['materias'];
					$i++;
					}
				$J=0;
				for ($R=0; $R < $filass; $R++){
				for ($i=0; $i < $filas; $i++){ 
					if ($mat[$R] == $mate[$i]) {
					$A[$J] =$mate[$i];
					$B[$J]= $nom[$R];
					$J++;}}}

				$tabla = mysqli_query($conex,"SELECT * FROM datos where email ='".$email."' ");

				for($i=0;$i<$filas;$i++){ 
					if (empty($A[$i])||empty($B[$i])) { ?>
						<div class="datos2" style="margin: 0px 0px 50px 0px; ">
						<div >
							<form  action="alumno.php" method="get"  class="u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-3" >
			                <input style=" background: transparent; padding: 24px 900px 24px 50px; border-color: transparent; margin: -10px -50px -200px -40px ; " type="submit" name="enviar" value="Falta profesores para sus materias...">
			                
			              	</form>
						</div>
					<?php }else{ ?>
				<div class="datos2" style="margin: 0px 0px 50px 0px; ">
						<div >
							<form  action="alumno.php" method="get"  class="u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-3" >
			                <input style=" background: transparent; padding: 24px 900px 24px 50px; border-color: transparent; margin: -10px -50px -200px -40px ; " type="submit" name="enviar" value="<?php echo $A[$i];?>"> 
			                <imput style="margin: -20px 0px 0px 600px; font-size: 40px; ">Profesor: <?php echo $B[$i];?> </imput><br>
			              	</form>
						</div>
					
			 </div>
			<?php }} ?>
		

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






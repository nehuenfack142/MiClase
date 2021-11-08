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
	  		$ma[$i]=$materia = $row['materias'];
			$cu[$i]=$cursos = $row['cursos'];
			$id = $row['id'];
			$i++;
		}
	}
	$cons=$conex->query("SELECT id FROM datos where email ='".$email."'");
			$filas= mysqli_num_rows($cons);

}
?>


			

 <?php 
				for ($i=0; $i <$filas; $i++){ 			
				$prof = mysqli_query($conex,"SELECT * FROM datos where tipousuario ='Profesor' and cursos='".$cu[$i]."' and materias='".$ma[$i]."'");
				if($row = $prof -> fetch_array()){
					$cur[$i] = $row['cursos'];
					$mat[$i] = $row['materias'];
					}}

				$tabla = mysqli_query($conex,"SELECT * FROM datos where email ='".$email."' ");

				for($i=0;$i<$filas;$i++){ ?>
				<div class="datos2" style="margin: 0px 0px 50px 0px; ">
<<<<<<< HEAD
					
							
			                <form  action="profesor.php" method="post"  class="u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-3" >
			                <input style=" background: transparent; padding: 24px 900px 24px 50px; border-color: transparent; margin: -10px -50px -200px -40px ; " type="submit" name="enviar" value="<?php echo $cur[$i];?>"> 
			                <input  name="enviar2"style="margin: -20px 0px 0px 65%; font-size: 40px; "value="<?php echo $mat[$i];?>">Materia:  </input><br>
			              	</form>
			              
							
=======
				
			               <form  action="profesor.php" method="post"  class="u-custom-color-5 u-hover-custom-color-3 u-radius-10 u-text-custom-color-3 u-text-hover-custom-color-5 u-btn-3" >
			                <input style="background: transparent; padding: 24px 900px 24px 50px; border-color: transparent;" type="submit" name="enviar" value="<?php echo $cur[$i];?>"><br>
			                <input style="background: transparent; margin: 0px  0px 75% ; padding: 0px -100px 0px 0px; border-color: transparent;" name="enviar2" value="<?php echo $mat[$i];?>"><br>
							</form>
>>>>>>> origin/main
					
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

















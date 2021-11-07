<?php
if (isset($_GET['enviar'])) {
	$m = $_GET['enviar'];
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
	$prof = mysqli_query($conex,"SELECT * FROM datos where tipousuario ='Profesor' and cursos='".$cursos."'");
	$i=0;
	while ($row = $prof -> fetch_array()){
					$nom[$i] = $row['nombre'];
					$ema[$i] = $row['email'];
					$i++;
					}
					?>

				<div class="calendar2" id="calendar2" style="display: none; position: absolute center;">
                        <form method="POST" style="width: 700px; margin: auto; background-color: #89d0ca; margin-top: 100px;">
                          <select name="mail" required="" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">
                          <?php for($i=0;$i<$filas;$i++){ ?>
                            <option value="<?php echo "$email";?>"><?php echo "$nom[$i]";?></option>
                            <?php } ?>
                          </select>

                          <input type="text" placeholder ="Asunto" name="asunto" required="" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">
                          <textarea placeholder ="Mensaje" name="msg" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px; min-height: 100px;max-height: 200px;min-width: 640px;max-width: 640px;"></textarea>
                          <input type="submit" name="enviar" style="margin: 15px;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">
                          <a href="javascript:cerrar()" style="margin: 630px; color: red;padding: 10px;width: 640px;font-size: 18px;border: none;margin-bottom: 5px">X</a>
                        </form>
                           </div>
					
			 </div>



?>

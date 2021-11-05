<?php

$inc = include("con_db.php");
session_start();
$seccion=$_SESSION['email'];
if(strlen($seccion) >= 1)
{
	$resultado = $conex->query($conex,"SELECT * FROM datos where email=".$seccion."'");
	if($resultado) {
	  		while ($row = $resultado -> fetch_array()){
	  		$cons=("SELECT a.link,a.materias FROM link a inner join datos b on a.curso = b.cursos where cursos = '".$cursos."'");
	  		if ($res){
	  			while ($row = $res->fetch_array())	
	  			{
					$link = $row['link'];
					$materias = $row['materias'];
				}	

			}
		}
	}

}
?>
	<div>
	<?php echo $link; ?>
	</div>
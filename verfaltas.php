<?php
include("con_db.php");
if(!isset($_SESSION)){
session_start();
$seccion=$_SESSION['email'];}
{
$resultado = mysqli_query($conex,"SELECT * FROM datos where email ='".$seccion."'" );
$i=0;
  if ($resultado) {
        while ($row = $resultado -> fetch_array()){
          $materia= $row['materias'];
          $cursos[$i] = $row['cursos'];
          $id = $row['id'];
          $i++; 

    }
  }
  $cons=$conex->query("SELECT id FROM datos where tipousuario ='Preceptor'  ");
          $filas= mysqli_num_rows($cons);
          echo $filas;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabla Alumnos</title>
</head>
<body>

<br>
    <div>
    <table>
        <tr>
            <td>USUARIO</td>
            <td>NOMBRE</td>
            <td>MAIL</td>
            <td>CURSO</td>
        </tr>
        <?php
        $i=0;  
        $p = "SELECT * FROM datos where cursos= '".$cursos[$i]."'";
        $table = mysqli_query($conex,$p);
        while ($row = $table -> fetch_array()) { ?>
        <tr>
            <td><?php echo $row['tipousuario']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['cursos']; ?></td>
           <?php   if ($i<$filas-1) {
           $i++;
            $p = "SELECT * FROM datos where cursos= '".$cursos[$i]."'";
           }
            ?>
        </tr>
        <?php } ?>
    </table>
</div>




</body>
</html>
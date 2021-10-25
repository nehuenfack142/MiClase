<?php

$inc = include("con_db.php");
session_start();
  $seccion = $_SESSION['email'];
if ($inc){
	$cons = "SELECT * FROM datos where email='".$seccion."'";
	$res = mysqli_query($conex, $cons);
	if ($res) {
		while($row = $res -> fetch_array()){
			$name = $row['nombre'];
			$email = $row['email'];
			}}}?>
			<style>
				.datos{
				width: 260px;
				height: 120px;
				margin-left: 890px ;
    			background: #89d0ca;
    			color: #5e35b1;
    			border-radius: 5px;
    			text-align-last: center;
    			font-size: 1.2em;
    			float: right;
				}

			</style>
			<div class="datos" >
				<p><?php echo $name; ?></p>
				<p><?php echo $email; ?></p>
			</div>

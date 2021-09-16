<?php

if (isset($_POST['enviar'])){
	if (!empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['mail'])) {
		
		$asunto = $_POST['asunto'];
		$msg = $_POST['msg'];
		$mail = $_POST['mail'];
		$header = "From: noreply@example.com" . "\r\n";
		$header.= "Reply-To: noreply@example.com" . "\r\n";
		$header.= "X-Mailer: PHP/" . phpversion();
		$mail = @mail($mail, $asunto, $msg, $header);
		if ($mail) {
			echo "<h4>Se mando el mail exitosamente<!h4>";
		}
	}
}
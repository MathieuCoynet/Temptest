<?php

	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	if(empty($nom & $email))
	{
		print("<center> Les <b>champs</b> sont vides </center>");
		exit();
	}
	else{
		print("Envoyé");
	}
?>
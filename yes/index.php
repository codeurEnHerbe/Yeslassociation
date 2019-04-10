<?php
	session_start();
	include_once 'bdd.php';
	include_once 'modules/mod_register/mod_register.php';
	include_once 'modules/mod_connexion/mod_connexion.php';
	BDD::connexion();
	$m = new ModRegister();
	echo "<br/><br/>
			Ou Identifiez-vous
	<br/><br/>";
	$c = new ModConnexion();

?>
							
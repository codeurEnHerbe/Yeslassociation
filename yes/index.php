<?php
	session_start();
	include_once 'bdd.php';
	include_once 'modules/mod_register/mod_register.php';
	BDD::connexion();
	$m = new ModRegister();

?>
							
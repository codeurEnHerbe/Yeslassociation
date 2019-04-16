<?php
	include_once 'bdd.php';
	include_once 'modules/mod_register/mod_register.php';
	include_once 'modules/mod_connexion/mod_connexion.php';
	include_once 'modules/mod_search/mod_search.php';

	$m = new ModRegister();
	echo "<br/><br/>
			Ou Identifiez-vous
	<br/><br/>";
	$c = new ModConnexion();

	if(isset($_GET['module'])){
		$module = htmlspecialchars($_GET['module']);
	}else{
		$module = "welcome";
	}

	switch($module){
		case "welcome" :
			session_start();
			BDD::connexion();
			echo"<form method='post' action='index.php?module=search' id='connect'>
				<input type='submit' value='Search' />
			</form>";
			break;

		case "search" :
			$search = new ModSearch();
			break;		
	}
?>

							